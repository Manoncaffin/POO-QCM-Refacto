<?php
include_once('./Question.php');
include_once('./Answer.php');
include_once('../index.php');

// Un QCM regroupe l’ensemble des questions composant le quiz et la méthode qui permet d’afficher 
// toutes les questions dans notre HTML.

// class objet avec ses propriétés
class Qcm {
    public $allQuestions;
// méthode qui permet d'afficher les questions
    public function affichage($allQuestions) {
        $this->allQuestions = $allQuestions;
    } 
}

?>