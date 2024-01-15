<?php
// include_once('./Qcm.php');
// include_once('./Answer.php');
// include_once('../index.php');

// Une Question contient un corps sous forme de texte et plusieurs Answers ainsi que l’explication 
// de la bonne réponse.

class Question
{
    private string $question;
    private array $answers = [];
    private string $explanation;
    private int $id;

    public function __construct($question)
    {
        $this->question = $question;
    }

    public function addAnswer(Answer $answer) : void
    {
        $this->answers[] = $answer;
    }

    public function setExplanation($explanation) : void
    {
        $this->explanation = $explanation;
    }

    public function getAnswers() : array
    {
        return $this->answers;
    }

    public function getExplanation() : string
    {
        return $this->explanation;
    }
}

?>