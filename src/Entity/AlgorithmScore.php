<?php


namespace App\Entity;


/**
 * Class AlgorithmScore
 * Баллы для алгоритма
 */
class AlgorithmScore
{
    /**
     * @var int ID баллов
     */
    public $id;
    /**
     * @var int ID ответа на вопрос
     */
    public $responseId;
    /**
     * @var string Алгоритм
     */
    public $algorithm;
    /**
     * @var int Баллы
     */
    public $score;
}