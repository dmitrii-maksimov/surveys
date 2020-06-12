<?php


namespace App\Service\Algorithm;


/**
 * Interface AlgorithmSurveyInterface
 * Необходим для сервиса работы с опросами для корректной работы алгоритмов
 */
interface AlgorithmSurveyInterface
{
    /**
     * Установка баллов ответа для определенного алгоритма
     * @param int $answerId
     * @param string $algorithm
     * @param int $score
     * @return bool
     */
    function setAlgorithmScore(int $answerId, string $algorithm, int $score): bool;

}