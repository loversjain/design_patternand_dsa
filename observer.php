<?php
interface Observer {
    public function userDetail($data);
}
class SendQueue implements Observer {
    public function userDetail($data)
    {

        return "some ". $data;
    }
}
class MessageDetail {
    private  $observers = [];
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }
    public function update($data) {

        $result = [];
        foreach ($this->observers as $observer) {

            $result[] = $observer->userDetail($data);
        }
        return $result;
    }
}
$objMessageDetail = new MessageDetail();
$objSendQueue = new SendQueue();
$objMessageDetail->attach($objSendQueue);
var_dump($objMessageDetail->update("lovers jain"));
