<?php

require_once '../utils/connexion_database.php';

class User
{
    private $id;
    private $nom;
    private $prenom;
    private $age;

    public function __construct(array $data) {
        // $data est égale aux données récupérées dans la base de données
        $this->id = $data['id'];
        $this->nom = $data['nom'];
        $this->prenom = $data['prenom'];
        $this->age = $data['age'];
    }

}

?>