<?php

namespace Dependencies;

use Infrastructure\Api\GithubGateway;

class GatewaysProvider
{
    /**
     * @return GithubGateway
     */
    public static function getGithubApiGateway(): GithubGateway
    {
       return new GithubGateway(HttpClientsProvider::getGuzzleClient());
    }
}