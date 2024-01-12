<?php
include_once('./Qcm.php');
include_once('./Answer.php');

// Une Question contient un corps sous forme de texte et plusieurs Answers ainsi que l’explication 
// de la bonne réponse.

// class objet avec ses propriétés
class Question {
    private $text;
    private $answers;
    private $explications;
    // méthode qui permet d'afficher la question et les choix possibles
    public function __construct($text, $answers, $explications) {
        $this->text = $text;
        $this->answers = $answers;
        $this->explications = $explications;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function getText() {
        return $this->text;
    }

    public function setAnswers($answers) {
        $this->answers = $answers;
    }

    public function getAnswers() {
        return $this->answers;
    }

    public function setExplications() {
        return $this->explications;
    }

    public function getExplications() {
        return $this->explications;
    }

    public function addQuestion($text) {
        $this->text = $text;
    }

    }


?>