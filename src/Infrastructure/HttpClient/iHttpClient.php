<?php

namespace Infrastructure\HttpClient;

interface iHttpClient
{
    public function get($url, $headers = null);
}