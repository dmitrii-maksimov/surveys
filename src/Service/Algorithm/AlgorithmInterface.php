<?php
namespace App\Service\Algorithm;

/**
 * Interface AlgorithmInterface
 * Необходим для каждого алгоритма
 */
interface AlgorithmInterface
{
    /**
     * AlgorithmInterface constructor.
     * @param AlgorithmStatisticInterface $statisticService
     */
    function __construct(AlgorithmStatisticInterface $statisticService);

    /**
     * @return string Название алгоритма
     */
    function getAlgorithmName(): string;

    /**
     * @param int $responseId ID ответа респондента
     * @return mixed
     */
    function calculate(int $responseId);
}