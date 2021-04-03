<?php
//#####################################################################################################
// Lors de la définition du nom de la classe, assurez-vous d'avoir mis le même nom de table dans la BDD
//#####################################################################################################


// Définition de la classe RealisationModel
// la mention "extends" signifie que la classe RealisationModel
// hérite des propriétés et méthodes de sa classe mère "Model"
class RealisationModel extends Model {


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
        $requete = $this->connexion->prepare("SELECT * FROM $tableRealisation WHERE id = :id");
        $requete->bindParam(':id', $id);
        $resultat = $requete->execute();
        $item = $requete->fetch(PDO::FETCH_ASSOC);
        return $item;
    }
    
    
    /**
     * Récupération de l'ensemble des données de la BDD
     *
     * @return $listeItems
     *******************************************************/
    public function getItems() {
        include 'Config/config.php';
        
        $requete = "SELECT * FROM $tableRealisation";
        $resultat = $this->connexion->query($requete);
        $listeItems = $resultat->fetchAll(PDO::FETCH_ASSOC);
        return $listeItems;
    }


    /**
     * Récupération de la réalisation la plus récente en fonction de sa date dans la BDD
     *
     * @return $lastItem
     *******************************************************/
    public function getLastItem() {
        include 'Config/config.php';
        
        $requete = $this->connexion->prepare("SELECT * FROM $tableRealisation ORDER BY date DESC LIMIT 1");
        $requete->bindParam(':date', $date);
        $resultat = $requete->execute();
        $lastItem = $requete->fetch(PDO::FETCH_ASSOC);
        return $lastItem;
    }
    

    /**
     * Ajout dans la BDD
     *
     * @return void
     ******************************************************/
    public function addDB() {
        include 'Config/config.php';
        
        $nomProjet = $_POST['nomProjet'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        // var_dump($_POST);

        $requete = $this->connexion->prepare("INSERT INTO $tableRealisation
            VALUES (NULL, :nomProjet, :description, :date)");
        $requete->bindParam(':nomProjet', $nomProjet);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':date', $date);
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
        $requete = $this->connexion->prepare("DELETE FROM $tableRealisation WHERE id = :id");
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
        $nomProjet = $_POST['nomProjet'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        // var_dump($_POST);

        $requete = $this->connexion->prepare("UPDATE $tableRealisation 
            SET nomProjet = :nomProjet, description = :description, date = :date
            WHERE id = :id");
        $requete->bindParam(':id', $id);
        $requete->bindParam(':nomProjet', $nomProjet);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':date', $date);
        $resultat = $requete->execute();

        // var_dump($resultat);
        // var_dump($requete->errorInfo());
    }
}
