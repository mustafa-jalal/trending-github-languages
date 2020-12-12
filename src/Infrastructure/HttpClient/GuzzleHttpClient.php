<?php


use Guzzle\Http\Client;
use Guzzle\Http\Exception\RequestException;
use Infrastructure\HttpClient\iHttpClient;

class GuzzleHttpClient implements iHttpClient
{

    public function get($url, $headers = null)
    {
        $client = new Client();
        try
        {
            $response = $client->createRequest('GET', $url, $headers);

            error_log("[DATA_RETRIEVE] - [Response] $url -- {$response->getResponseBody()} ");

            return $response;
        }
        catch (RequestException $e)
        {
            error_log("[DATA_RETRIEVE] - [Exception] $url -- Message -- {$e->getMessage()}");
            return $e->getCode();
        }
    }
}