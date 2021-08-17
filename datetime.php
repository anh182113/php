<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

// $timezone = DateTimeZone::listIdentifiers() ;
// foreach ($timezone as $item){
//     echo $item . '<br/>';
// }

echo date('d/m/Y - H:i:s', time());

echo strtotime(date('Y-m-d H:i:s'));

$dateint = mktime(0, 0, 0, 11, (20 + 12), 2016);
echo date('d/m/Y', $dateint); // 02/12/2016