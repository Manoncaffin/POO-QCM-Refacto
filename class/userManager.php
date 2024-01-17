<?php
require_once('./utils/database_connect.php');

class UserManager {
    private $database;
    private $users = [];

    public function __construct($database) {
        // j'instancie la classe UserManager avec la connexion à la base de données
        // car je vais avoir besoin de cette connexion pour faire mes requêtes SQL
        $this->database = $database;
    }

    public function findAllUsers() {
        $request = $this->database->query('SELECT * FROM user');
        $users = $request->fetchAll();
        return $users; // je retourne un tableau
    }

    public function hydrate(array $data) {
        // j'envoie un tableau de données à la méthode hydrate
        foreach ($data as $user) {
            // j'instancie la classe User avec les données récupérées dans la base de données
            $newUser = new User($user);
            $this->users[] = $newUser;
            echo "<pre>";
            var_dump($this->users);
            echo "</pre>";
        }
    }
}

$userManager = new UserManager($database); // $database est défini dans connexion_database.php

$allUsers = $userManager->findAllUsers(); // $allUsers stocke le tableau retourné par la méthode findAllUsers()

echo "<pre>";
var_dump($allUsers);
echo "</pre>";

$userManager->hydrate($allUsers); // j'envoie le tableau $allUsers à la méthode hydrate() de la classe UserManager


?>