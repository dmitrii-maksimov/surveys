<?php


namespace App\Service;


use App\Entity\Response;
use App\Entity\ResponseDetail;

/**
 * Class ResponseService
 * Сервис работы с ответами
 */
class ResponseService
{


    /**
     * Добавить ответ
     * @param int $surveyId
     * @return Response|null
     */
    function addResponse(int $surveyId): ?Response
    {

    }

    /**
     * Добавить детали ответа
     * @param int $responseId
     * @param int $questionId
     * @param int $answerId
     * @return ResponseDetail|null
     */
    function addResponseDetail(int $responseId, int $questionId, int $answerId): ?ResponseDetail
    {

    }

}