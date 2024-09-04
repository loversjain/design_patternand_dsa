<?php

class UserPhone {
    public function userNumber() {
        return 123456789;
    }
}
class UserDetail {
    public function __construct(private readonly UserPhone $userPhone)
    {}
    public function getUserPhone() {
        return $this->userPhone->userNumber();
    }
}

$userPhone = new UserPhone();
$userDeatil = new UserDetail($userPhone);
echo $userDeatil->getUserPhone();