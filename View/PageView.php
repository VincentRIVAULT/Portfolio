<?php

// Définition de la classe PageView
// la mention "extends" signifie que la classe PageView
// hérite des propriétés et méthodes de sa classe mère "View"
class PageView extends View {


    /**
     * Affichage de la page dans le navigateur
     *
     * @param [type] $item
     * @return void
     ********************************************************/
    public function displayPageItem($item) {
        // Appel du fichier config.php où sont déclarées 
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        // récupération du fichier page.php ou contact.php
        // en fonction de la valeur de l'id précisée dans l'URL
        if ($item['id'] == $idContact) {
            // alors la Vue récupère le fichier php de la page Contact
            // à l'aide de la méthode file_get_contents 
            $this->page .= file_get_contents('View/template/pages/contact.php');
        } else {
            // sinon, la Vue récupère le fichier php de la page Page en utilisant
            // la valeur de l'id pour afficher la page correspondante
            $this->page .= file_get_contents('View/template/pages/page.php');
        }

        // remplacement de l'item {} par sa valeur pour qu'elle s'affiche dans le navigateur (côté front)
        $this->page = str_replace('{titre}', $item['titre'], $this->page);
        $this->page = str_replace('{contenu}', $item['contenu'], $this->page);

        // execution de la fonction displayPage() pour afficher la page dans le navigateur (côté front)
        $this->displayPage();
    }


    /**
     * Affichage de la liste des pages côté administration (Back Office)
     *
     * @param [array] $listeItems -> tableau contenant la liste des pages
     * @return void
     *******************************************************************/
    public function editListPages($listeItems) {
        
        // Appel du fichier config.php où sont déclarées 
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        $this->page .=
            '<table id="tableUser" class="table table-striped mb-0 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titre de la page</th>
                        <th scope="col"><a href="index.php?controller=' . $classPage . '&action=addForm">
                        <button class="btn btn-success"><i class="fas fa-plus"></i> Ajouter</button></a></th>
                        <th scope="col"><a href="index.php?controller=' . $classPage . '&action=edit">
                        <button class="btn btn-info"><i class="fas fa-undo-alt"></i> Retour</button></a></th>';
            $this->page .=
                    '</tr>
                        </thead>
                        <tbody>
                    <tr>';
        foreach ($listeItems as $key) {
            $this->page .='
                        <td>' . $key['id'] . '</th>
                        <td>' . $key['titre'] . '</th>
                        <td><a href="index.php?controller=' . $classPage . '&action=delDB&id=' . $key["id"] . '">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Supprimer</button></a></td>
                        <td><a href="index.php?controller=' . $classPage . '&action=editForm&id=' . $key["id"] . '"">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i> Modifier</button></a></td>
                    </tr>';
        }
            $this->page .=
                        '</tbody>
            </table>';
        
    $this->displayPage();
    }
    

    /**
     * Affichage du formulaire d'ajout
     *
     * @return void
     ******************************************************/
    public function addForm() {
        include 'Config/config.php';
        
        $this->page .= file_get_contents('View/template/forms/form' . $classPage . '.php');
        $this->page = str_replace('{class}', $classPage, $this->page);
        $this->page = str_replace('{action}', 'addDB', $this->page);
        $this->page = str_replace('{id}', '', $this->page);
        $this->page = str_replace('{titre}', '', $this->page);
        $this->page = str_replace('{contenu}', '', $this->page);
        $this->displayPage();
    }
    

    /**
     * Affichage du formulaire d'edition
     *
     * @param [type] $item
     * @return void
     ******************************************************/
    public function editForm($item) {
        include 'Config/config.php';
        
        $this->page .= file_get_contents('View/template/forms/form' . $classPage . '.php');
        $this->page = str_replace('{class}', $classPage, $this->page);
        $this->page = str_replace('{action}', 'editDB', $this->page);
        $this->page = str_replace('{id}', $item['id'], $this->page);
        $this->page = str_replace('{titre}', $item['titre'], $this->page);
        $this->page = str_replace('{contenu}', $item['contenu'], $this->page);
        $this->displayPage();
    }
}
