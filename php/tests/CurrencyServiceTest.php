<?php

namespace Aardling\Currency;

use PHPUnit\Framework\TestCase;

class CurrencyServiceTest extends TestCase
{
    /*
     * @todo : these tests are intentionally left superficial, naive and incomplete
     * it just serves as a starting point for adding more tests if that would help you
     */

    /**
     * @test
     */
    public function it_should_convert_currencies()
    {
        $service = new CurrencyService();
        $this->assertIsFloat($service->convert(100, "USD", "EUR"));
    }
}
