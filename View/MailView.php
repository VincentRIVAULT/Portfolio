<?php

// Définition de la classe MailView
// la mention "extends" signifie que la classe MailView
// hérite des propriétés et méthodes de sa classe mère "View"
class MailView extends View {


    /**
     * Affichage de la liste des mails envoyés par les utilisateurs côté administration (Back Office)
     *
     * @param [type] $mails
     * @return void
     ******************************************************/
    public function editMails($mails) {
        
        // Appel du fichier config.php où sont déclarées
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        $this->page .=
            '<table id="tableUser" class="table table-striped mb-0 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOM</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Ville</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Sujet</th>
                        <th scope="col">Message</th>
                        <th scope="col"><a href="index.php?controller=' . $classMail . '&action=edit">
                        <button class="btn btn-info"><i class="fas fa-undo-alt"></i> Retour</button></a></th>';
            $this->page .=
                    '</tr>
                        </thead>
                        <tbody>
                    <tr>';
        foreach ($mails as $key) {
            $this->page .='
                        <td>' . $key['id'] . '</th>
                        <td>' . $key['nom'] . '</th>
                        <td>' . $key['prenom'] . '</th>
                        <td>' . $key['ville'] . '</th>
                        <td>' . $key['email'] . '</th>
                        <td>' . $key['sujet'] . '</th>
                        <td>' . $key['message'] . '</th>
                        <td><a href="index.php?controller=' . $classMail . '&action=delDB&id=' . $key["id"] . '">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Supprimer</button></a></td>
                    </tr>';
        }
            $this->page .=
                        '</tbody>
            </table>';
    // execution de la fonction displayPage() pour afficher la page d'administration (côté back)  
    $this->displayPage();
    }
     

}
