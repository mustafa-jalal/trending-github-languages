<?php
namespace Infrastructure\Api;

use Infrastructure\HttpClient\iHttpClient;

class GithubGateway
{
    private $githubApiUrl;

    private $httpClient;

    public function __construct(iHttpClient $httpClient)
    {
        $this->githubApiUrl = getenv('GITHUB_API_URL');
        $this->httpClient = $httpClient;
    }

    public function getTrendingRepos()
    {
        return $this->httpClient->get($this->githubApiUrl);
    }
}