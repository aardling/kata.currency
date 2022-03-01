<?php

namespace Aardling\Currency;

class HttpClient
{
    public function get($url)
    {
        //@todo call actual (free) api
        //although real APIs are going to return fluctuating rates too

        return rand(0, 2);
    }
}