<?php

redirect("/");

function redirect ($path) {
    header("Location: $path");
}
