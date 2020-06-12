<?php

/**
 * Предполагается, что все вызовы будут происходить из SPA на контроллеры, которые нужно реализовать.
 * В контроллеры инжектятся необходимые сервисы работы с опросами.
 */

use App\Service\Algorithm\SimpleAlgorithm;
use App\Service\ResponseService;
use App\Service\StatisticService;
use App\Service\SurveyService;

$statisticService = new StatisticService();
$surveyService = new SurveyService();
$simpleAlgorithm = new SimpleAlgorithm($statisticService);

/* Создание опроса и наполнение его вопросами, ответами и баллами нужного алгоритма */
$survey = $surveyService->addSurvey('Первый тест');
$question_1 = $surveyService->addQuestion($survey->id, 'Первый вопрос');
$answer_1_1 = $surveyService->addAnswer($question_1->id, 'Первый ответ на первый вопрос');
$surveyService->setAlgorithmScore($answer_1_1->id, $simpleAlgorithm->getAlgorithmName(), 0);
$answer_1_2 = $surveyService->addAnswer($question_1->id, 'Второй ответ на первый вопрос');
$surveyService->setAlgorithmScore($answer_1_2->id, $simpleAlgorithm->getAlgorithmName(), 2);
$answer_1_3 = $surveyService->addAnswer($question_1->id, 'Третий ответ на первый вопрос');
$surveyService->setAlgorithmScore($answer_1_3->id, $simpleAlgorithm->getAlgorithmName(), 5);

$question_2 = $surveyService->addQuestion($survey->id, 'Второй вопрос');
$answer_2_1 = $surveyService->addAnswer($question_2->id, 'Первый ответ на второй вопрос');
$surveyService->setAlgorithmScore($answer_2_1->id, $simpleAlgorithm->getAlgorithmName(), 3);
$answer_2_2 = $surveyService->addAnswer($question_2->id, 'Второй ответ на второй вопрос');
$surveyService->setAlgorithmScore($answer_2_2->id, $simpleAlgorithm->getAlgorithmName(), 2);
$answer_2_3 = $surveyService->addAnswer($question_2->id, 'Третий ответ на второй вопрос');
$surveyService->setAlgorithmScore($answer_2_3->id, $simpleAlgorithm->getAlgorithmName(), 1);

$question_3 = $surveyService->addQuestion($survey->id, 'Третий вопрос');
$answer_3_1 = $surveyService->addAnswer($question_3->id, 'Первый ответ на третий вопрос');
$surveyService->setAlgorithmScore($answer_3_1->id, $simpleAlgorithm->getAlgorithmName(), 0);
$answer_3_2 = $surveyService->addAnswer($question_3->id, 'Второй ответ на третий вопрос');
$surveyService->setAlgorithmScore($answer_3_2->id, $simpleAlgorithm->getAlgorithmName(), 9);
$answer_3_3 = $surveyService->addAnswer($question_3->id, 'Третий ответ на третий вопрос');
$surveyService->setAlgorithmScore($answer_3_3->id, $simpleAlgorithm->getAlgorithmName(), 0);

$responseService = new ResponseService();

/* Добавление ответов на все вопросы */
$response = $responseService->addResponse($survey->id);
$responseService->addResponseDetail($response->id, $question_1->id, $answer_1_2->id);
$responseService->addResponseDetail($response->id, $question_2->id, $answer_2_1->id);
$responseService->addResponseDetail($response->id, $question_3->id, $answer_3_3->id);

/* Запуск расчета алгоритма */
$result = $simpleAlgorithm->calculate($response->id);
