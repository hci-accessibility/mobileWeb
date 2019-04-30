<?php

set_include_path(dirname(__FILE__));

include_once 'config.php';

spl_autoload_register(function ($class_name) {
    include SYSTEM_PATH.'/model/'.$class_name . '.php';
});

//$dbconn = pg_connect("dbname=barrierdb host=localhost port=5432 user=barrierdb password='postgres barrier backend'");
