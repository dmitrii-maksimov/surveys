<?php


namespace App\Service\Algorithm;


/**
 * Interface AlgorithmStatisticInterface
 * Необходим для сервиса статистики, который будет использован алгоритмом
 */
interface AlgorithmStatisticInterface
{
    /**
     * @param int $responseId ID ответа
     * @param string $algorithm Алгоритм
     * @return array|null
     * Должен возвращать коллекцию ответов на вопросы с баллами заданного алгоритма или null если ответов нет
     */
    function getResponsesDetailWithAlgorithmScore(int $responseId, string $algorithm): ?array;
}