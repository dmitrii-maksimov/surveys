<?php

namespace App\Service;

use App\Service\Algorithm\AlgorithmStatisticInterface;

/**
 * Class StatisticService
 * Сервис статистики, производит поиск и расчет статистики по данным ответам
 */
class StatisticService implements AlgorithmStatisticInterface
{


    /**
     * @param int $surveyId ID опроса
     * @return array|null
     * Должен возвращать коллекцию ответов на опрос или null если ответов нет
     */
    function getResponses(int $surveyId): ?array
    {

    }

    /**
     * @param int $responseId ID ответа
     * @return array|null
     * Должен возвращать коллекцию деталей ответа на вопросы или null если ответов нет
     */
    function getResponseDetail(int $responseId): ?array
    {

    }

    /** {@inheritdoc} */
    function getResponsesDetailWithAlgorithmScore(int $responseId, string $algorithm): ?array
    {

    }
}