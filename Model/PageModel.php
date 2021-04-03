<?php
//#####################################################################################################
// Lors de la définition du nom de la classe, assurez-vous d'avoir mis le même nom de table dans la BDD
//#####################################################################################################


// Définition de la classe PageModel
// la mention "extends" signifie que la classe PageModel
// hérite des propriétés et méthodes de sa classe mère "Model"
class PageModel extends Model {


    /**
     * Récupération d'une donnée de la base de données (BDD)
     *
     * @return $item
     ******************************************************/
    public function getItem() {
        // Appel du fichier config.php où sont déclarées
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        if (isset($_GET['id'])) {
            // si l'id est précisé dans l'URL, alors le Model récupère cet id pour exécuter
            // la requête SQL afin de récupérer les données de la page correspondante
            $id = $_GET['id'];
        } else {
            // si il n'y a pas d'id dans l'URL, alors le Model exécute la requète SQL pour
            // récupérer les données de la page d'Accueil (affichage par défaut)
            $id = $idAccueil;
        }
        // requête SQL pour récupérer les données de la page demandée grâce à son id
        // les données récupérées sont stockées dans la variable $item
        $requete = $this->connexion->prepare("SELECT * FROM $tablePage WHERE id = :id");
        $requete->bindParam(':id', $id);
        $resultat = $requete->execute();
        $item = $requete->fetch(PDO::FETCH_ASSOC);
        return $item;
        
        // var_dump($_GET);
        // var_dump($resultat);
        // var_dump($requete->errorInfo());
        // var_dump($item);
    }
    
    
    /**
     * Récupération de l'ensemble des données de la BDD
     *
     * @return $listeItems
     ******************************************************/
    public function getItems() {
        include 'Config/config.php';
        
        $requete = "SELECT * FROM $tablePage";
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
        
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];

        // var_dump($_POST);

        $requete = $this->connexion->prepare("INSERT INTO $tablePage
            VALUES (NULL, :titre, :contenu)");
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':contenu', $contenu);
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
        $requete = $this->connexion->prepare("DELETE FROM $tablePage WHERE id = :id");
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
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];

        // var_dump($_POST);

        $requete = $this->connexion->prepare("UPDATE $tablePage 
            SET titre = :titre, contenu = :contenu
            WHERE id = :id");
        $requete->bindParam(':id', $id);
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':contenu', $contenu);
        $resultat = $requete->execute();

        // var_dump($resultat);
        // var_dump($requete->errorInfo());
    }
}
