<?php

interface Product {
    public function  getType();
}

class ConClassA implements Product {
    public function getType() {
        return "conclass a";
    }
}
class ConClassB implements Product {
    public function getType() {
        return "conclass b";
    }
}
class Factory {
    public static function createProduct($type) {
        return match($type) {
            "con_a" => new ConClassA(),
            "con_b" => new ConClassb(),
            default => "null"
        };
    }
}

$obja = Factory::createProduct("con_a");
$objb = Factory::createProduct("con_a");
echo $obja->getType()." - ";

echo $objb->getType();
