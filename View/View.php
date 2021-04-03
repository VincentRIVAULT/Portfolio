<?php

// Définition de la classe mère "View"
abstract class View {

    protected $page;


    /**
     * Ajout de l'entête de la page
     ******************************************************/
    public function __construct() {

        // Appel du fichier config.php où sont déclarées
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        // récupération du fichier head.php
        $this->page = file_get_contents('View/template/head.php');
        // récupération du fichier nav.php
        $this->page .= file_get_contents('View/template/nav.php');
        
        // var_dump($_SESSION);

        // définition de la variable $vincentRivault pour l'affichage du titre du site
        // dans le bandeau d'en-tête (header)
        $vincentRivault = '< Vincent RIVAULT />';

        // Liste des actions renvoyant vers le site côté "Front"
        $actionFront = ['view', 'lastView'];

        // Liste des actions autorisées pour l'utilisateur authentifié
        $actionAuth = ['addDB', 'addForm', 'edit', 'editForm', 'delDB'];

        // initialisation de la variable contenant la liste des réalisations (ou projets)
        $listeRealisations = "";

        // instanciation de la classe RealisationModel()
        $classModel = $classRealisation . 'Model';
        $realisationModel = new $classModel();
        // $realisationModel = new RealisationModel();
        
        // récupération de tout le contenu de la base de données realisations dans la variable $realisations
        $realisations = $realisationModel->getItems();
        
        // génération de la liste des différentes réalisations à afficher dans le sous-menu de la page realisation
        foreach ($realisations as $key) {
            $listeRealisations .= '<li><a href="index.php?controller=' . $classRealisation . '&action=view&id=' . $key['id'] . '" id="projet' . $key['id'] . '" title="Projet ' . $key['id'] . '">' . $key['nomProjet'] . '</a></li>';
        }

        // si l'utilisateur n'est pas connecté, alors on affiche l'option de connexion
        if (!isset($_SESSION['utilisateur'])) {
            $optionConnect = '<li>
                                <a href="index.php?controller=' . $classSecurite . '&action=formLogin" id="connect" title="Connexion"><i class="fas fa-sign-in-alt"></i> connexion</a>
                            </li>';   
        } else {
            // si l'utilisateur est connecté et si l'action est égale à "view" ou "lastView" ou nulle,
            // on lui propose un retour vers l'interface d'admin
            if (!isset($_GET['action']) || in_array($_GET['action'], $actionFront)) {
                $optionConnect = '';
                if ($_SESSION['utilisateur']['rank'] == 'redacteur') {
                    $optionConnect .=   '<li>
                                    <a href="index.php?controller=' . $classPage . '&action=edit" id="retourAdmin" title="Retour à l\'admin">retour à l\'admin</a>
                                    </li>';
                }
                if ($_SESSION['utilisateur']['rank'] == 'administrateur') {
                    $optionConnect .=   '<li>
                                    <a href="index.php?controller=' . $classRealisation . '&action=edit" id="retourAdmin" title="Retour à l\'admin">retour à l\'admin</a>
                                    </li>';
                }
            } else {
                // sinon on propose à l'internaute un retour vers le site côté front
                $optionConnect = '<li>
                                    <a href="index.php" id="retourSite" title="Retour au site">retour au site</a>
                                </li>';
            }
            $optionConnect .= '<li>
                                <a href="index.php?controller=' . $classSecurite . '&action=logout" id="deconnect" title="Déconnexion"><i class="fas fa-user-circle"></i> se deconnecter</a>
                            </li>';
        }

        // si l'utilisateur est connecté, alors il peut accéder aux différentes pages d'administration définies par les variables $class ci-dessous
        if (isset($_SESSION['utilisateur']) && isset($_GET['action']) && in_array($_GET['action'], $actionAuth)) {
            
            // si l'utilisateur n'est pas connecté, alors il ne peut accéder qu'aux pages coté Front.
            $optionNotAuth = '';
            $optionAuth = '';
            // si l'utilisateur est connecté en tant que rédacteur, alors il peut accéder à toutes les pages.
            // Il peut également modifier le contenu des pages du site ($classPage) excepté celui des pages réalisation et utilisateur
            if ($_SESSION['utilisateur']['rank'] == 'redacteur') {    
                $optionAuth .=   '<li>
                                    <a href="index.php?controller=' . $classPage . '&action=edit">pages du site</a>
                                </li>';
            }
            // si l'utilsateur est connecté en tant qu'administrateur, alors il peut accéder et modifier toutes les pages du site.
            if ($_SESSION['utilisateur']['rank'] == 'administrateur') {
                $optionAuth .=   '<li>
                                    <a href="index.php?controller=' . $classPage . '&action=edit">pages du site</a>
                                </li>
                                <li>
                                    <a href="index.php?controller=' . $classRealisation . '&action=edit">realisations</a>
                                </li>
                                <li>
                                    <a href="index.php?controller=' . $classMail . '&action=edit">mails</a>
                                </li>
                                <li>
                                    <a href="index.php?controller=' . $classUtilisateur . '&action=edit">utilisateurs</a>
                                </li>';
            }
        // si l'utilisateur n'est pas connecté, alors il ne peut accéder qu'aux pages accessibles via le menu principal de navigation et ne peut modifier aucune page.
        } else {
            // affichage du menu principal de navigation
            $optionNotAuth =    '<li class="active">
                                    <a href="index.php?controller=' . $classPage . '&id=2" id="prof" title="Profil"><i class="fas fa-address-card"></i> profil</a>
                                </>
                                <li class="active">
                                    <a href="index.php?controller=' . $classPage . '&id=3" id="comp" title="Compétences"><i class="fas fa-cogs"></i> competences</a>
                                </li>
                                <li class="active">
                                    <a href="index.php?controller=' . $classRealisation . '" id="real" title="Réalisations"><i class="fas fa-laptop-code"></i> realisations</a>
                                    <ul id="sousMenuRealisations">'
                                        . $listeRealisations .
                                    '</ul>
                                </li class="active">
                                <li class="active">
                                    <a href="index.php?controller=' . $classPage . '&id=4" id="cont" title="Contact"><i class="fas fa-at"></i> contact</a>
                                </li>';
            $optionAuth = '';
            
        }        

        // remplacement de l'item {} par sa valeur pour qu'elle s'affiche dans le navigateur (côté front)
        $this->page = str_replace('{vincentRivault}', $vincentRivault, $this->page);
        $this->page = str_replace('{listeRealisations}', $listeRealisations, $this->page);
        $this->page = str_replace('{optionConnect}', $optionConnect, $this->page);
        $this->page = str_replace('{optionNotAuth}', $optionNotAuth, $this->page);       
        $this->page = str_replace('{optionAuth}', $optionAuth, $this->page);
    }
    

    /**
     * Affichage du pied de page
     *
     * @return void
     ******************************************************/
    protected function displayPage() {
        // récupération du fichier footer.php
        $this->page .= file_get_contents('View/template/footer.php');
        // affichage de la vue dans le navigateur (côté front)
        echo $this->page;
    }
}
