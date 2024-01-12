<?php
include_once('./class/Qcm.php');
include_once('./class/Answer.php');
include_once('./class/Question.php')

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