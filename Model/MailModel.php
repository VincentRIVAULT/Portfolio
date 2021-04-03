<?php
//#####################################################################################################
// Lors de la définition du nom de la classe, assurez-vous d'avoir mis le même nom de table dans la BDD
//#####################################################################################################

/**  * Import des classes PHPMailer dans l’espace de nommage *
 * Ces instructions doivent être placées en début de script  *
 * et pas à l'intérieur d'une fonction !                     */  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// chargement du fichier autoload.php généré par Composer
require 'Bibliotheques/lib/autoload.php'; 

// require 'Bibliotheques/lib/phpmailer/phpmailer/src/PHPMailer.php'; 
// require 'Bibliotheques/lib/phpmailer/phpmailer/src/Exception.php'; 
// require 'Bibliotheques/lib/phpmailer/phpmailer/src/SMTP.php';


// Définition de la classe MailModel
// la mention "extends" signifie que la classe MailModel
// hérite des propriétés et méthodes de sa classe mère "Model"
class MailModel extends Model {


    // /**
    //  * Fonction de nettoyage des données issues d'un formulaire
    //  *
    //  * @param [type] $donnees
    //  * @return void
    //  */
    // function valid_donnees($donnees){
    //     $donnees = trim($donnees); // supprime les espaces inutiles en début et en fin de chaîne
    //     $donnees = stripslashes($donnees); // supprime les antislashes que certains hackers pourraient utiliser pour échapper des caractères spéciaux
    //     $donnees = htmlspecialchars($donnees); // échappe certains caractères spéciaux en les transformant en entités HTML
    //     return $donnees;
    // }


    /**
     * Définition de la fonction d'envoi de mail avec la classe PHPMailer
     *
     * @return void
     ********************************************************************/
    public function sendMail() {

        // récupération et formatage des informations saisies par l'internaute
        // $nom = htmlentities(trim($_POST['nom']));
        // $prenom = htmlentities(trim($_POST['prenom']));
        // $ville = htmlentities(trim($_POST['ville']));
        // $email = htmlentities(trim(strtolower($_POST['email'])));
        // $message = htmlentities(trim($_POST['message']));
    
        // var_dump($_POST);
    
        // définition de la RegEx appliquée à la variable $email contenant l'adresse email de l'internaute
        $regEmail = '/^(([^<>()[\]\\.,;:\s@"\']+(\.[^<>()[\]\\.,;:\s@"\']+)*)|("[^"\']+"))@((\[\d' .
        '{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])|(([a-zA-Z\d\-]+\.)+[a-zA-Z]{2,}))$/';
         
        // Vérification des données reçues du formulaire 
        // $nom
        if (isset($_POST['nom']) && !empty($_POST['nom'])) {
            $nom = htmlspecialchars(stripslashes(trim($_POST['nom'])));
        } 
        // $prenom
        if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
            $prenom = htmlspecialchars(stripslashes(trim($_POST['prenom']))); 
        }
        // $ville
        if (isset($_POST['ville']) && !empty($_POST['ville'])) {
            $ville = htmlspecialchars(stripslashes(trim($_POST['ville'])));
        }
        // $email
        $email = htmlspecialchars(strtolower(trim($_POST['email'])));
        if (isset($_POST['email']) && !empty($_POST['email']) && preg_match($regEmail, $email)) {
            $email = htmlspecialchars(stripslashes(trim(strtolower($_POST['email']))));
        }
        // $sujet
        if (isset($_POST['sujet']) && !empty($_POST['sujet'])) {
            $sujet = htmlspecialchars(stripslashes(trim($_POST['sujet'])));
        }
        // $message
        if (isset($_POST['message']) && !empty($_POST['message'])) {
            $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
        }

        // var_dump($_POST);

        // la variable contient le message à afficher suite à l'envoi du mail
        $resultat = '';

        /* Envoi du mail avec la classe PHPMailer */

        /** * Instanciation de la variable / TRUE en paramètre active les exceptions */ 
        $mail = new PHPMailer(TRUE);
        
        /** * Tentative d’envoi de mail */ 
        try {
            /* paramètres du serveur SMTP */
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            // $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
            // $mail->Host = 'smtp.free.fr'; // Spécifier le serveur SMTP
            // $mail->SMTPAuth = true; // Activer authentication SMTP
            // $mail->Username = 'vincent.rivault@free.fr'; // Votre adresse email d'envoi
            // $mail->Password = 'poussinFREE_49'; // Le mot de passe de cette adresse email
            // $mail->SMTPSecure = 'ssl'; // Accepter SSL
            // // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            // // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            // $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            // $mail->Port = 25; // 25 ou 465 (pour FREE)

            /* Configuration envoi mail */
            $mail->setFrom($email, $prenom . ' ' . $nom); // Personnaliser l'envoyeur
            $mail->addAddress('administrateur@vincentrivault.go.yj.fr', 'Destinataire_VR_PlanetHoster'); // Ajouter le destinataire
            // $mail->addAddress('To2@example.com');
            // $mail->addReplyTo('info@example.com', 'Information'); // L'adresse de réponse
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            /* Contenu */
            $mail->isHTML(TRUE); // Paramétrer le format des emails en HTML ou non
            
            // $mail->Subject = 'Vous avez un message de votre Portfolio';
            $mail->Subject = $sujet;
            $mail->Body = $message;
            // $mail->MsgHTML($message);
            $mail->AltBody = $message;
            $mail->CharSet = 'UTF-8';

            /* Pièces jointes */
            $attachment = '';
            // $mail->addAttachment('/var/tmp/file.tar.gz'); // Ajouter un attachement
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
            if (isset($_FILES['fichier']) &&  ($_FILES['fichier']['error'] == 0)) {
                $fichier = $_FILES['fichier']['name']; 
                $chemin  = $_FILES['fichier']['tmp_name']; 
                $attachment = "</>envoi du mail avec PJ!!!</p>"; 
                $attachment .= "source: ".$chemin."/". $fichier; 
                $mail->AddAttachment($chemin, $fichier); 
            } else { 
                $attachment = "<p>envoi du mail sans PJ</p>"; 
            }

            // var_dump($mail);

            // Pour charger la version française d'affichage des erreurs
            $mail->setLanguage('fr', '/Bibliotheques/lib/phpmailer/phpmailer/language/phpmailer.lang-fr.php');
            // fonction de déboguage si envoi avec méthode SMTP
            // $mail->SMTPDebug = 4;
            
            /* Méthode pour envoyer le mail */
            $envoiOK = $mail->Send();

            if ($envoiOK == TRUE) {
                $resultat = "<h3>Votre mail a bien été envoyé. Je vous répondrai dans les meilleurs délais.</h3>" . $attachment;
            } else {
                $resultat = "<h3>Problème lors de l'envoi du mail. Veuillez réessayer.</h3>";
            }

            // var_dump($envoiOK);

        }
        /** * Traitement de l’exception levée en cas d’erreur */ 
        catch (Exception $e) {
            $resultat = '<h3>Message non envoyé</h3>'; 
            $resultat .= '<p>Erreur: ' . $mail->ErrorInfo . '</p>'; 
        }
        
        return $resultat;

    }


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
        $requete = $this->connexion->prepare("SELECT * FROM $tableMail WHERE id = :id");
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
        
        $requete = "SELECT * FROM $tableMail";
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
        
        $nom = htmlspecialchars(stripslashes(trim($_POST['nom'])));
        $prenom = htmlspecialchars(stripslashes(trim($_POST['prenom'])));
        $ville = htmlspecialchars(stripslashes(trim($_POST['ville'])));
        $email = htmlspecialchars(stripslashes(strtolower(trim($_POST['email']))));
        $sujet = htmlspecialchars(stripslashes(trim($_POST['sujet'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

        // var_dump($_POST);

        $requete = $this->connexion->prepare("INSERT INTO $tableMail
            VALUES (NULL, :nom, :prenom, :ville, :email, :sujet, :message)");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':ville', $ville);
        $requete->bindParam(':email', $email);
        $requete->bindParam(':sujet', $sujet);
        $requete->bindParam(':message', $message);
        $resultat = $requete->execute();

        // var_dump($requete);
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
        $requete = $this->connexion->prepare("DELETE FROM $tableMail WHERE id = :id");
        $requete->bindParam(':id', $id);
        $resultat = $requete->execute();
    }
   
}
