<?php

namespace Tests\Unit\PaymentMethods;

use Gradints\LaravelMidtrans\Models\PaymentMethods\ShopeePay;
use Tests\TestCase;

class ShopeepayTest extends TestCase
{
    /**
     * @test getSnapName function should return 'shopeepay'.
     */
    public function it_provides_a_getter_for_snap_name()
    {
        $shopee = new ShopeePay();
        $this->assertEquals('shopeepay', $shopee->getSnapName());
    }

    /**
     * @test getApiPaymentType function should return 'shopeepay'.
     */
    public function it_provides_a_getter_for_api_payment_type()
    {
        $shopee = new ShopeePay();
        $this->assertEquals('shopeepay', $shopee->getApiPaymentType());
    }

    /**
     * @test getApiPaymentPayload function should return Shopeepay object.
     */
    public function it_provides_a_getter_for_api_payment_payload()
    {
        $shopee = new ShopeePay();
        $this->assertEquals([], $shopee->getApiPaymentPayload());
    }
}
