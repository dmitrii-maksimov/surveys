<?php


namespace App\Service\Algorithm;

/**
 * Class SimpleAlgorithm
 * Простой алгоритм
 */
class SimpleAlgorithm implements AlgorithmInterface
{
    /**
     * @var AlgorithmStatisticInterface
     */
    private $statisticService;

    /** {@inheritdoc} */
    public function __construct(AlgorithmStatisticInterface $statisticService)
    {
        $this->statisticService = $statisticService;
    }

    /** {@inheritdoc} */
    function getAlgorithmName(): string
    {
        return __CLASS__;
    }

    /** {@inheritdoc} */
    function calculate(int $responseId)
    {
        $data = $this->statisticService->getResponsesDetailWithAlgorithmScore($responseId, $this->getAlgorithmName());

        // TODO: Произвести расчеты необходимые расчеты исходя из полученных данных и вернуть результат

        return $data;
    }
}