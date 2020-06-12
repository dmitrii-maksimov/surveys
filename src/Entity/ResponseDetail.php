<?php

namespace App\Entity;

/**
 * Class ResponseDetail
 * Детали ответа
 */
class ResponseDetail
{
    /**
     * @var int ID детального ответа
     */
    public $id;
    /**
     * @var int ID ответа на опрос
     */
    public $responseId;
    /**
     * @var int ID вопроса
     */
    public $questionId;
    /**
     * @var int ID ответа на вопрос
     */
    public $answerId;

}