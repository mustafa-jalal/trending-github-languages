<?php

namespace Dependencies;

use Infrastructure\HttpClient\GuzzleHttpClient;

class HttpClientsProvider
{

    /**
     * @return GuzzleHttpClient
     */
    public static function getGuzzleClient(): GuzzleHttpClient
    {
        return new GuzzleHttpClient();
    }
}