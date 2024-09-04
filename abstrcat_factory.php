<?php

interface Product {
    public function productDetail();
}
interface Order {
    public function orderDetail();
}
interface Awb {
    public function awbDetail();
}
class ConcreatProduct implements Product {
    public function productDetail() {
        return "product detail\n";
    }
}
class ConcreatOrder implements Order {
    public function orderDetail() {
        return "order detail\n";
    }
}
class ConcreatAwb implements Awb {
    public function awbDetail() {
        return "awb detail\n";
    }
}

interface AbstractFactory {

    public function productDetail();
    public function orderDetail();
    public function awbDetail();
}


class Factory1 implements AbstractFactory {

    public function productDetail() {
        return new ConcreatProduct ;
    }
    public function orderDetail() {
        return new ConcreatOrder ;
    }

    public function awbDetail() {
        return new ConcreatAwb ;
    }
}

function client(AbstractFactory $factory) {

    $product = $factory->productDetail();
    $order = $factory->orderDetail();
    $awb = $factory->awbDetail();
    echo "facotry 1\n";
    echo $product->productDetail();
    echo $order->orderDetail();
    echo $awb->awbDetail();

}
client(new Factory1);