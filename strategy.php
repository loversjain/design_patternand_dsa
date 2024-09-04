<?php

interface BankService {
    public function services();
}

class Interest implements BankService {
    public function services(): string
    {
        return "bank give interest";
    }
}

class AccountOpen implements BankService {
    public function services(): string
    {
        return "account open";
    }
}

class Customer {
    private $usedBankServices;
    public function __construct(BankService $bankService)
    {
        $this->usedBankServices = $bankService;
    }

    public function customerRight() {
        return $this->usedBankServices->services();
    }
}
$accountOpen = new AccountOpen();
$Interest = new Interest();
$customer = new Customer($Interest);
echo $customer->customerRight();
