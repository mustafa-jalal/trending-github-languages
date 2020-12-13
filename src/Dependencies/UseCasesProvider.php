<?php

namespace Dependencies;

use Application\UseCases\GetTrendingLanguagesUseCase;

class UseCasesProvider
{
    /**
     * @return GetTrendingLanguagesUseCase
     */
    public static function getTrendingLanguagesUseCase(): GetTrendingLanguagesUseCase
    {
        return new GetTrendingLanguagesUseCase(GatewaysProvider::getGithubApiGateway());
    }
}