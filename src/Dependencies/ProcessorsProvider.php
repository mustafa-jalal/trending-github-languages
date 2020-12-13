<?php

namespace Dependencies;

use Application\Processors\GetTrendingLanguagesProcessor;

class ProcessorsProvider
{
    /**
     * @return GetTrendingLanguagesProcessor
     */
    public static function getTrendingLanguagesProcessor(): GetTrendingLanguagesProcessor
    {
        return new GetTrendingLanguagesProcessor(UseCasesProvider::getTrendingLanguagesUseCase());
    }
}