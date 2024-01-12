<?php
include_once('./Question.php');
include_once('./Qcm.php');

// class objet avec ses propriétés
class Answer {
    private $text;
    private $green;

    public function __construct($text, $green) {
        $this->text = $text;
        $this->green = $green;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function getText($text) {
        return $this->text = $text;
    }

    public function setGreen($green) {
        $this->green = $green;
    }

    public function getGreen($green) {
        return $this->green = $green;
    }

    public function addAnswer($text) {
        $this->text = $text;
    }

    public function goodAnswer($green) {
        $this->$text = $green;
        if($text === $green) {

        } else {
            
        }
    }
}

$qcm = new Qcm();
$question1 = new Question('Tu me retires... :');
$question1->addAnswer(new Answer('une aiguille du genoux'));
$question1->addAnswer(new Answer('un cactus de la chaussure'));
$question1->addAnswer(new Answer('une fière chandelle du pied', Answer::BONNE_REPONSE));
$question1->addAnswer(new Answer('une épine du pied'));
$question1->setExplications('Sans commentaires si vous avez eu faux :-°');
$qcm->addQuestion($question1);
$qcm->generate();

?>