<?php

namespace Infrastructure\HttpClient;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\StreamInterface;

class GuzzleHttpClient implements IHttpClient
{

    /**
     * @param $url
     * @param null $headers
     * @return int|mixed|StreamInterface
     * @throws Exception
     * @throws GuzzleException
     */
    public function get($url, $headers = null)
    {
        try
        {
            $client = new Client();
            $response = $client->request('GET', $url);

            error_log("[DATA_RETRIEVE] - [Response] $url -- {$response->getBody()} ");

            return $response->getBody();
        }
        catch (RequestException $e)
        {
            error_log("[DATA_RETRIEVE] - [Exception] $url -- Message -- {$e->getMessage()}");
            return $e->getCode();
        }
    }

    /**
     * @param $url
     * @param null $headers
     * @param null $body
     * @return mixed
     */
    public function post($url, $headers = null, $body = null)
    {
        // TODO: Implement post() method.
    }

    /**
     * @param $url
     * @param null $headers
     * @param null $body
     * @return mixed
     */
    public function put($url, $headers = null, $body = null)
    {
        // TODO: Implement put() method.
    }

    /**
     * @param $url
     * @param null $headers
     * @param null $body
     * @return mixed
     */
    public function patch($url, $headers = null, $body = null)
    {
        // TODO: Implement patch() method.
    }

    /**
     * @param $url
     * @param null $headers
     * @return mixed
     */
    public function delete($url, $headers = null)
    {
        // TODO: Implement delete() method.
    }
}