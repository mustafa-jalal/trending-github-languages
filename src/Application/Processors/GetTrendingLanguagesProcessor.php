<?php

namespace Application\Processors;

use Application\Model\Response;
use Application\UseCases\GetTrendingLanguagesUseCase;

class GetTrendingLanguagesProcessor
{
    private $getTrendingLanguages;

    public function __construct(GetTrendingLanguagesUseCase $getTrendingLanguagesUseCase)
    {
        $this->getTrendingLanguages = $getTrendingLanguagesUseCase;
    }

    public function execute()
    {
        $languages = $this->getTrendingLanguages->execute();

        return (new Response($languages))->toJSON();
    }
}
