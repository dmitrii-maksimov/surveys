<?php


namespace App\Service;


use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Survey;
use App\Service\Algorithm\AlgorithmSurveyInterface;

/**
 * Class SurveyService
 * Сервис работы с опросами
 */
class SurveyService implements AlgorithmSurveyInterface
{

    /**
     * Создание опроса
     * @param string $name
     * @return Survey|null
     */
    function addSurvey(string $name): ?Survey
    {

    }

    /**
     * Добавление вопроса к опросу
     * @param int $surveyId
     * @param string $question
     * @return Question|null
     */
    function addQuestion(int $surveyId, string $question): ?Question
    {

    }

    /**
     * Добавление ответа к вопросу
     * @param int $questionId
     * @param string $answer
     * @return Answer|null
     */
    function addAnswer(int $questionId, string $answer): ?Answer
    {

    }

    /** {@inheritdoc} */
    function setAlgorithmScore(int $answerId, string $algorithm, int $score): bool
    {

    }

    /**
     * Получение опроса
     * @param int $surveyId
     * @return Survey|null
     */
    function getSurvey(int $surveyId): ?Survey
    {

    }

}