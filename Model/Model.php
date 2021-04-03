<?php

/* Définition de la classe mère "Model" selon le serveur de connexion utilisé
à l'aide de la méthode PDO : serveur local ou serveur distant */

$server = $_SERVER['HTTP_HOST'];


if ($server == 'localhost') {
    abstract class Model {

    const SERVER = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const BASE = "vr_portfolio_2021";

    protected $connexion;

    public function __construct() {
        // Connexion à la base de données en local
        try {
            $this->connexion = new PDO("mysql:host=" . self::SERVER . ";dbname="
            . self::BASE, self::USER, self::PASSWORD);
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
        //Résoudre problèmes d'encodages (accents)
        $this->connexion->exec("SET NAMES 'UTF8'");
    }
}
} else {
    abstract class Model {

    const SERVER = "localhost";
    const USER = "bxjurhjn_vincent";
    const PASSWORD = "ABPEgcqm6949&@";
    const BASE = "bxjurhjn_portfolio_vincent_rivault";

    protected $connexion;

    public function __construct() {
        // Connexion à la base de données à distance
        try {
            $this->connexion = new PDO("mysql:host=" . self::SERVER . ";dbname="
            . self::BASE, self::USER, self::PASSWORD);
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
        //Résoudre problèmes d'encodages (accents)
        $this->connexion->exec("SET NAMES 'UTF8'");
    }
}
}