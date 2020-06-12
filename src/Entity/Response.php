<?php

namespace App\Entity;

/**
 * Class Response
 * Ответы на опрос
 */
class Response
{
    /**
     * @var int ID ответа
     */
    public $id;
    /**
     * @var int ID опроса
     */
    public $surveyId;
}