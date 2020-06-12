<?php


namespace App\Entity;


/**
 * Class Answer
 * Ответы на вопросы
 */
class Answer
{
    /**
     * @var int ID ответа на вопрос
     */
    public $id;
    /**
     * @var int ID вопроса
     */
    public $questionId;
    /**
     * @var string ответ
     */
    public $answer;
}