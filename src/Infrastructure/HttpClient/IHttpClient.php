<?php

namespace Infrastructure\HttpClient;

interface IHttpClient
{
    /**
     * @param $url
     * @param null $headers
     * @return mixed
     */
    public function get($url, $headers = null);

    /**
     * @param $url
     * @param null $headers
     * @param null $body
     * @return mixed
     */

    public function post($url, $headers = null, $body = null);

    /**
     * @param $url
     * @param null $headers
     * @param null $body
     * @return mixed
     */
    public function put($url, $headers = null, $body = null);

    /**
     * @param $url
     * @param null $headers
     * @param null $body
     * @return mixed
     */
    public function patch($url, $headers = null, $body = null);

    /**
     * @param $url
     * @param null $headers
     * @return mixed
     */
    public function delete($url, $headers = null);
}