<?php

class Order {
    public $discount = 0;
    public $total = 0;
    public $item = [];

    public function addItem($item, $price) {
        $this->item[] = ["item" => $item, "price" =>$price];
        $this->total += $price;
        return $this;
    }

    public function setDiscount($discountAmount) {
        $this->discount = $discountAmount;
        return $this;
    }

    public function process()
    {
        $this->total = $this->total - $this->discount;
        return $this;
    }

    public function get() {
        echo "Orders Summary\n";
        foreach ($this->item as $item) {
            echo $item['item']." - ". $item['price']."\n";
            echo "discount ". $this->discount."\n";

        }
        echo "total is ". $this->total - $this->discount;
        return $this;
    }
}

class OrderFacade {
    public function __construct(
        private $order  = new Order
    )
    {}

    public function addItem($item, $price) {
        $this->order->addItem($item, $price);
        return $this;
    }


    public function setDiscount($discountAmount)
    {
        $this->order->setDiscount($discountAmount);
        return $this;
    }

    public function process()
    {
        $this->order->process();
        return $this;
    }
    public function get() {
        $this->order->get();
        return $this;
    }
}

$OrderFacade = new OrderFacade(new Order);
$OrderFacade->addItem("milk", 70)
    ->addItem("curd", 50)
    ->setDiscount(10)
    ->process()
    ->get();