<?php

namespace Aardling\Currency;

class CurrencyService
{
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new HttpClient();
    }

    public function convert(float $amount, string $baseCurrency, string $targetCurrency): float {
        $value = $this->httpClient->get("https://foreignexchange.example.com/?src=$baseCurrency&tgt=$targetCurrency");
        $newValue = $amount * $value;
        return $newValue;
    }
}