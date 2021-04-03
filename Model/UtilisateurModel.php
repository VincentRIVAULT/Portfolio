<?php
//#####################################################################################################
// Lors de la définition du nom de la classe, assurez-vous d'avoir mis le même nom de table dans la BDD
//#####################################################################################################


// Définition de la classe UtilisateurModel
// la mention "extends" signifie que la classe UtilisateurModel
// hérite des propriétés et méthodes de sa classe mère "Model"
class UtilisateurModel extends Model {


    /**
     * Récupération d'une donnée de la base de données (BDD)
     *
     * @return $item
     ******************************************************/
    public function getItem() {

        // Appel du fichier config.php où sont déclarées
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        $id = $_GET['id'];
        $requete = $this->connexion->prepare("SELECT * FROM $tableUtilisateur WHERE id = :id");
        $requete->bindParam(':id', $id);
        $resultat = $requete->execute();
        $item = $requete->fetch(PDO::FETCH_ASSOC);
        return $item;
    }
    
    
    /**
     * Récupération de l'ensemble des données de la BDD
     *
     * @return $listeItems
     ******************************************************/
    public function getItems() {
        include 'Config/config.php';
        
        $requete = "SELECT * FROM $tableUtilisateur";
        $resultat = $this->connexion->query($requete);
        $listeItems = $resultat->fetchAll(PDO::FETCH_ASSOC);
        return $listeItems;
    }
    

    /**
     * Ajout dans la BDD
     *
     * @return void
     ******************************************************/
    public function addDB() {
        include 'Config/config.php';
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $rank = $_POST['rank'];

        // var_dump($_POST);

        $requete = $this->connexion->prepare("INSERT INTO $tableUtilisateur
            VALUES (NULL, :username, :pass_hash, :lastname, :firstname, :rank)");
        $requete->bindParam(':username', $username);
        $requete->bindParam(':pass_hash', $pass_hash);
        $requete->bindParam(':lastname', $lastname);
        $requete->bindParam(':firstname', $firstname);
        $requete->bindParam(':rank', $rank);
        $resultat = $requete->execute();

        // var_dump($resultat);
        // var_dump($requete->errorInfo());
    }
    

    /**
     * Suppression dans la BDD
     *
     * @return void
     ******************************************************/
    public function delDB() {
        include 'Config/config.php';
        
        $id = $_GET['id'];
        $requete = $this->connexion->prepare("DELETE FROM $tableUtilisateur WHERE id = :id");
        $requete->bindParam(':id', $id);
        $resultat = $requete->execute();
    }


    /**
     * Modification de l'élément dans la BDD
     *
     * @return void
     ******************************************************/
    public function editDB() {
        include 'Config/config.php';
        
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $rank = $_POST['rank'];

        // var_dump($_POST);

        $requete = $this->connexion->prepare("UPDATE $tableUtilisateur 
            SET username = :username, password = :pass_hash, lastname = :lastname, firstname = :firstname, rank = :rank
            WHERE id = :id");
        $requete->bindParam(':id', $id);
        $requete->bindParam(':username', $username);
        $requete->bindParam(':pass_hash', $pass_hash);
        $requete->bindParam(':lastname', $lastname);
        $requete->bindParam(':firstname', $firstname);
        $requete->bindParam(':rank', $rank);
        $resultat = $requete->execute();

        // var_dump($resultat);
        // var_dump($requete->errorInfo());
    }
}
