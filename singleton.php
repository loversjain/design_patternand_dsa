<?php

class DBConnect {
    private static $instance = null;
    private function __construct(){}

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new DBConnect();
        }
        return self::$instance;
    }
}

$obj = DBConnect::getInstance();
$obj1 = DBConnect::getInstance();


var_dump($obj1 === $obj);