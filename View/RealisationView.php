<?php

// Définition de la classe RealisationView
// la mention "extends" signifie que la classe RealisationView
// hérite des propriétés et méthodes de sa classe mère "View"
class RealisationView extends View {


    /**
     * Affichage de la page realisations dans le navigateur (côté front)
     *
     * @param [type] $realisations => contient la liste de toutes les réalisations
     * @return void
     *******************************************************************/
    public function displayListRealisations($realisations) {

        // Appel du fichier config.php où sont déclarées 
        // les classes et les tables de données correspondantes
        include 'Config/config.php';
        
        // récupération du fichier realisations.html
        $this->page .= file_get_contents('View/template/pages/realisations.php');
        
        // initialisation de la variable $listeCompleteRealisations
        $listeCompleteRealisations = "";

        // génération des articles affichant les différentes réalisations contenues dans la BDD
        foreach ($realisations as $key) {
            $listeCompleteRealisations .=   '<article>
                                                <h3>' . $key['nomProjet'] . '</h3>
                                                <p id="projet' . $key['id'] . '"><a href="index.php?controller=' . $classRealisation . '&action=view&id=' . $key['id'] . '">voir le détail du projet</a></p>    
                                            </article>';
        }
        
        // <h3 id="projet' . $key['id'] . '"><a href="index.php?controller=' . $classRealisation . '&action=view&id=' . $key['id'] . '"><i class="fas fa-folder"></i> ' . $key['nomProjet'] . '</a></h3>


        // remplacement de l'item {} par sa valeur pour qu'elle s'affiche dans le navigateur (côté front)
        $this->page = str_replace('{listeCompleteRealisations}', $listeCompleteRealisations, $this->page);

        // execution de la fonction displayPage() pour afficher la page réalisations dans le navigateur (côté front)
        $this->displayPage();

    }


    /**
     * Affichage de la page du détail d'une réalisation
     *
     * @param [type] $item
     * @return void
     ***************************************************/
    public function displayRealisation($item) {
        
        // récupération du fichier realisation.html
        $this->page .= file_get_contents('View/template/pages/realisation.php');

        // remplacement de l'item {} par sa valeur pour qu'elle s'affiche dans le navigateur (côté front)
        $this->page = str_replace('{id}', $item['id'], $this->page);
        $this->page = str_replace('{nomProjet}', $item['nomProjet'], $this->page);
        $this->page = str_replace('{description}', $item['description'], $this->page);
        $this->page = str_replace('{date}', date(('d-m-Y'), strtotime($item['date'])), $this->page);

        // execution de la fonction pour afficher la page du détail des realisations dans le navigateur (côté front)
        $this->displayPage();
    }


    /**
     * Affichage de la page de la dernière réalisation (la plus récente à partir de sa date)
     *
     * @param [type] $lastRealisation
     * @return void
     ***************************************************************************************/
    public function displayLastRealisation($lastRealisation) {
        // récupération du fichier realisation.html
        $this->page .= file_get_contents('View/template/pages/realisation.php');

        // remplacement de l'item {} par sa valeur pour qu'elle s'affiche dans le navigateur (côté front)
        $this->page = str_replace('{id}', $lastRealisation['id'], $this->page);
        $this->page = str_replace('{nomProjet}', $lastRealisation['nomProjet'], $this->page);
        $this->page = str_replace('{description}', $lastRealisation['description'], $this->page);
        $this->page = str_replace('{date}', date(('d-m-Y'), strtotime($lastRealisation['date'])), $this->page);

        // execution de la fonction pour afficher la page du détail des realisations dans le navigateur (côté front)
        $this->displayPage();
    }


    /**
     * Affichage de la liste des réalisations côté administration (Back Office)
     *
     * @param [type] $realisations
     * @return void
     **************************************************************************/
    public function editListRealisations($realisations) {

        // Appel du fichier config.php où sont déclarées les classes et les tables correspondantes
        include 'Config/config.php';
        
        $this->page .=
            '<table id="tableUser" class="table table-striped mb-0 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du projet</th>
                        <th scope="col">Description du projet</th>
                        <th scope="col">Date du projet</th>
                        <th scope="col"><a href="index.php?controller=' . $classRealisation . '&action=addForm">
                        <button class="btn btn-success"><i class="fas fa-plus"></i> Ajouter</button></a></th>
                        <th scope="col"><a href="index.php?controller=' . $classRealisation . '&action=edit">
                        <button class="btn btn-info"><i class="fas fa-undo-alt"></i> Retour</button></a></th>';
            $this->page .=
                '</tr>
                    </thead>
                    <tbody>
                <tr>';
        foreach ($realisations as $key) {
            $this->page .='
                        <td>' . $key['id'] . '</th>
                        <td>' . $key['nomProjet'] . '</th>
                        <td>' . $key['description'] . '</th>
                        <td>' . date(('d-m-Y'), strtotime($key['date'])) . '</th>
                        <td><a href="index.php?controller=' . $classRealisation . '&action=delDB&id=' . $key["id"] . '">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> Supprimer</button></a></td>
                        <td><a href="index.php?controller=' . $classRealisation . '&action=editForm&id=' . $key["id"] . '"">
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
        
        $this->page .= file_get_contents('View/template/forms/form' . $classRealisation . '.php');
        $this->page = str_replace('{class}', $classRealisation, $this->page);
        $this->page = str_replace('{action}', 'addDB', $this->page);
        $this->page = str_replace('{id}', '', $this->page);
        $this->page = str_replace('{nomProjet}', '', $this->page);
        $this->page = str_replace('{description}', '', $this->page);
        $this->page = str_replace('{date}', '', $this->page);
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
        
        $this->page .= file_get_contents('View/template/forms/form' . $classRealisation . '.php');
        $this->page = str_replace('{class}', $classRealisation, $this->page);
        $this->page = str_replace('{action}', 'editDB', $this->page);
        $this->page = str_replace('{id}', $item['id'], $this->page);
        $this->page = str_replace('{nomProjet}', $item['nomProjet'], $this->page);
        $this->page = str_replace('{description}', $item['description'], $this->page);
        $this->page = str_replace('{date}', $item['date'], $this->page);
        $this->displayPage();
    }
}
