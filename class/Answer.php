<?php
include_once('./Question.php');
include_once('./Qcm.php');
include_once('../index.php');

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

?>