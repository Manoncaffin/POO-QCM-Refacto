<?php
require_once('./utils/database_connect.php');
// Une Question contient un corps sous forme de texte et plusieurs Answers ainsi que l’explication 
// de la bonne réponse.

class Question
{
    private string $question;
    private array $answers = [];
    private string $explanation;
    private int $id;

    public function __construct(array $data)
    {
        $this->question = $data['id'];
        $this->question = $data['question'];   
        $this->question = $data['explanation'];
    }

    public function addAnswer(Answer $answer): void
    {
        $this->answers[] = $answer;
    }

    public function setExplanation($explanation): void
    {
        $this->explanation = $explanation;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function getExplanation(): string
    {
        return $this->explanation;
    }

    public function getId() : int 
    {
        return $this->id;
    }

}
