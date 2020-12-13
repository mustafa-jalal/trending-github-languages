<?php

namespace Application\UseCases;

use Infrastructure\Api\GithubGateway;

class GetTrendingLanguagesUseCase
{
    private $githubGateway;

    public function __construct(GithubGateway $githubGateway)
    {
        $this->githubGateway = $githubGateway;
    }

    public function execute(): array
    {

        $creationDate = date('Y-m-d', strtotime('-30 days'));

        $repos = $this->githubGateway->getTrendingRepos($creationDate);

        $languages = [];

        foreach ($repos as $repo)
        {
            if(isset($languages[$repo['language']])) {
                $languages[$repo['language']]['number_of_repos'] += 1;
            } else {
                $languages[$repo['language']]['number_of_repos'] = 1;
            }

            $languages[$repo['language']]['repos'][] = $repo;
        }

        return $languages;
    }
}