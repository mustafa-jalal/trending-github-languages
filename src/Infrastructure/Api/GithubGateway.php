<?php
namespace Infrastructure\Api;

use Infrastructure\HttpClient\iHttpClient;

class GithubGateway
{
    private $githubApiUrl;

    private $httpClient;

    public function __construct(iHttpClient $httpClient)
    {
        $this->githubApiUrl = $_ENV['GITHUB_API_URL'];
        $this->httpClient = $httpClient;
    }

    /**
     * @param $creationDate
     * @return mixed
     */
    public function getTrendingRepos($creationDate)
    {
         $response = $this->httpClient->get($this->githubApiUrl . "search/repositories?q=created:>$creationDate&per_page=100&sort=stars&order=desc");
         $reposData = json_decode($response, true);
         return $reposData['items'];
    }
}