<?php

// Définition de la classe UtilisateurView
// la mention "extends" signifie que la classe UtilisateurView
// hérite des propriétés et méthodes de sa classe mère "View"
class UtilisateurView extends View {


    /**
     * Affichage de la liste des utilisateurs dans l'interface d'admin (Back Office)
     *
     * @param [type] $listeItems
     * @return void
     ******************************************************/
    public function editUtilisateurs($listeItems) {

        // Appel du fichier config.php où sont déclarées les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        $this->page .=
            '<table id="tableUser" class="table table-striped mb-0 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Rôle</th>
                        <th scope="col"><a href="index.php?controller=' . $classUtilisateur . '&action=addForm">
                        <button class="btn btn-success"><i class="fas fa-plus"></i> Ajouter</button></a></th>
                        <th scope="col"><a href="index.php?controller=' . $classUtilisateur . '&action=edit">
                        <button class="btn btn-info"><i class="fas fa-undo-alt"></i> Retour</button></a></th>';
            $this->page .=
                '</tr>
                    </thead>
                    <tbody>
                <tr>';
        foreach ($listeItems as $key) {
            $this->page .='
                        <td>' . $key['id'] . '</th>
                        <td>' . $key['username'] . '</th>
                        <td>' . $key['lastname'] . '</th>
                        <td>' . $key['firstname'] . '</th>
                        <td>' . $key['rank'] . '</th>
                        <td><a href="index.php?controller=' . $classUtilisateur . '&action=delDB&id=' . $key["id"] . '">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Supprimer</button></a></td>
                        <td><a href="index.php?controller=' . $classUtilisateur . '&action=editForm&id=' . $key["id"] . '"">
                        <button class="btn btn-warning"><i class="fas fa-edit"></i> Modifier</button></a></td>
                    </tr>';
        }
            $this->page .=
                '</tbody>
            </table>';
    // execution de la fonction displayPage() pour afficher la page d'administration (côté back)    
    $this->displayPage();
    }
    

    /**
     * Affichage du formulaire d'ajout
     *
     * @return void
     ******************************************************/
    public function addForm() {
        include 'Config/config.php';
        
        $this->page .= file_get_contents('View/template/forms/form' . $classUtilisateur . '.php');
        $this->page = str_replace('{class}', $classUtilisateur, $this->page);
        $this->page = str_replace('{action}', 'addDB', $this->page);
        $this->page = str_replace('{id}', '', $this->page);
        $this->page = str_replace('{username}', '', $this->page);
        $this->page = str_replace('{password}', '', $this->page);
        $this->page = str_replace('{lastname}', '', $this->page);
        $this->page = str_replace('{firstname}', '', $this->page);
        $this->page = str_replace('{rank}', '', $this->page);
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
        
        $this->page .= file_get_contents('View/template/forms/form' . $classUtilisateur . '.php');
        $this->page = str_replace('{class}', $classUtilisateur, $this->page);
        $this->page = str_replace('{action}', 'editDB', $this->page);
        $this->page = str_replace('{id}', $item['id'], $this->page);
        $this->page = str_replace('{username}', $item['username'], $this->page);
        $this->page = str_replace('{password}', $item['password'], $this->page);
        $this->page = str_replace('{lastname}', $item['lastname'], $this->page);
        $this->page = str_replace('{firstname}', $item['firstname'], $this->page);
        $this->page = str_replace('{rank}', $item['rank'], $this->page);
        $this->displayPage();
    }
}
