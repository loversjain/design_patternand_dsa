<?php

interface ThirdpartyPaymentInterface {
    public function pay (float $amountInCents);
}

class ThirdPartyPaymentService  {
    public function paymentProcess(int $amount) {
        echo "Payment of ". $amount/100 ." via thirdparty payment service.";
    }
}

class ThirdPartyPaymentAdoptee  implements  ThirdpartyPaymentInterface {
    public function __construct(private ThirdPartyPaymentService $thirdPartyPaymentService)
    {
    }

    public function pay(float $amountInCents)
    {
        $amountInCents = $amountInCents *100;
        $this->thirdPartyPaymentService->paymentProcess($amountInCents);
    }
}

class PaymentProceeser {
    public function __construct(private ThirdpartyPaymentInterface $thirdPartyPaymentService)
    {
    }
    public function makePayment(float $amount) {
        $this->thirdPartyPaymentService->pay($amount);
    }
}

$thirdPartyPaymentService = new ThirdPartyPaymentService;
$ThirdPartyPaymentAdoptee = new ThirdPartyPaymentAdoptee($thirdPartyPaymentService);
$PaymentProceeser = new PaymentProceeser($ThirdPartyPaymentAdoptee);
$PaymentProceeser->makePayment(10);
