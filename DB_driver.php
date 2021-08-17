<?php

namespace DB;

class DB_driver
{
    private $__conn;

    function connect()
    {
        if (!isset($this->__conn) || empty($this->__conn)) {
            $this->__conn =  mysqli_connect("localhost", "root", "", "test") or die;
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
        return  $this->__conn;
    }

    function dis_connect()
    {
        if ($this->__conn) {
            return mysqli_close($this->__conn);
        }
    }

    function insert(string $table, $data)
    {
        $this->connect();
        $field_list = "";
        $value_list = "";

        foreach ($data as $key => $value) {
            $field_list .= ",$key";
            $value_list .= ",$value";
        }

        $sql = "INSERT INTO $table" . trim($field_list, ",") . " VALUES $value_list";

        return mysqli_query($this->__conn, $sql);
    }

    function update(string $table, $data, $where)
    {
        $this->connect();
        $sql = "";

        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysqli_escape_string($this->__conn, $value) . "',";
        }

        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;

        return mysqli_query($this->__conn, $sql);
    }

    function remove(string $table, $where)
    {
        $this->connect();

        $sql = "DELETE FROM $table WHERE $where";

        return mysqli_query($this->__conn, $sql);
    }

    function get_list($sql)
    {
        $this->connect();

        $result = mysqli_query($this->__conn, $sql);

        if (!$result) {
            die('Câu truy vấn bị sai');
        }

        $return = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }

        mysqli_free_result($result);

        return $return;
    }

    function get_row($sql)
    {
        $this->connect();

        $result = mysqli_query($this->__conn, $sql);

        if (!$result) {
            die('Câu truy vấn bị sai');
        }

        $row = mysqli_fetch_assoc($result);

        mysqli_free_result($result);

        if ($row) {
            return $row;
        }

        return false;
    }
}

class DB_bussiness extends DB_driver
{

    protected $table_name = "";
    protected $key = "";

    function __construct()
    {
        parent::connect();
    }

    function __destruct()
    {
        parent::dis_connect();
    }

    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key . '=' . (int)$id);
    }

     
}

class Customer extends DB_bussiness
{

    function __construct()
    {
        $this->table_name = "customer";
        $this->key = "id";
        parent::__construct();
    }
}
