<?php


namespace App\Entity;


/**
 * Class Question
 * Вопросы
 */
class Question
{
    /**
     * @var int ID вопроса
     */
    public $id;
    /**
     * @var int ID опроса
     */
    public $surveyId;
    /**
     * @var string Вопрос
     */
    public $question;
}