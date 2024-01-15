<?php
// include_once('./Question.php');
// include_once('./Answer.php');

// Un QCM regroupe l’ensemble des questions composant le quiz et la méthode qui permet d’afficher 
// toutes les questions dans notre HTML.

// class objet avec ses propriétés
class Qcm // je crée ma classe
{

    private array $questions = [];
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function addQuestion(Question $question): void
    {
        $this->questions[] = $question;
    }
    public function generate(): void
    {
        foreach ($this->questions as $question) {
            echo "<p>" . $question->getQuestion() . "</p>";
            foreach ($question->getAnswers() as $answer) {
                echo "<input type='radio' name='" . $question->getQuestion() . "' value='" . $answer->getContent() . "'>";
                echo "<label for='" . $answer->getContent() . "'>" . $answer->getContent() . "</label>";
                echo "<br>";
            }
        }
    }
    public function getQuestions()
    {
        $request = $this->db->query("SELECT question FROM question");
        $allQuestions = $request->fetchAll(); 

        var_dump($allQuestions);

        return $allQuestions;
    }
}


