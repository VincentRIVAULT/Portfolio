<?php

// Définition de la classe SecuriteModel
// la mention "extends" signifie que la classe SecuriteModel
// hérite des propriétés et méthodes de sa classe mère "Model"
class SecuriteModel extends Model {

    /**
     * Récupération du username et du password à partir de la base de données
     * pour que l'utilisateur puisse se connecter
     *
     * @return $user
     ************************************************************************/
    public function testLogin() {

        // Appel du fichier config.php où sont déclarées
        // les classes et les tables de donnéescorrespondantes
        include 'Config/config.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $requete = $this->connexion->prepare("SELECT * 
        FROM $tableUtilisateur	
        WHERE username = :username");
        $requete->bindParam(':username', $username);
        $resultat = $requete->execute();
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
        // var_dump($_POST);
        // var_dump($requete);
        // var_dump($utilisateur);
        // var_dump($requete->errorInfo());

        // si l'utilisateur est connecté
        if (password_verify($password, $utilisateur['password'])) {
            // alors on démarre ou reprend sa session
            $_SESSION['utilisateur'] = $utilisateur;
        } 
        else {
            header('location:index.php?controller=' . $classSecurite . '&action=formLogin');
        }

        // var_dump($utilisateur);
        return $utilisateur;
    }

    /**
     * Déconnexion de l'utilisateur
     *
     * @return void
     ************************************************************************/
    public function logout() {
        // fonction de destruction de la variable de session en cours
        unset($_SESSION['utilisateur']);
    }
}
