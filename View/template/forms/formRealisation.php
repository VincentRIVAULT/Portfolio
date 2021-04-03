<div class="justify-content">
	<div class="col-md-10 offset-1 mb-5 mt-5">
        <form method="POST" action="index.php?controller={class}&action={action}">
            <!-- Input de l'ID en display none -->
            <div class="form-group">
                <label for="id" class="d-none">ID</label>
                <input type="text" id="id" name="id" value="{id}" class="form-control d-none" readonly>
            </div>
            
            <!-- Dupliquez cet élément selon vos besoins -->
            <div class="form-group">
                <label for="nomProjet">Nom du projet :</label>
                <!-- <input type="text" id="nomProjet" name="nomProjet" value="{nomProjet}" class="form-control"> -->
                <textarea type="text" id="nomProjet" name="nomProjet" value="" class="form-control" cols="30" rows="5">{nomProjet}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Description du projet :</label>
                <!-- <input type="text" id="description" name="description" value="{description}" class="form-control"> -->
                <textarea type="text" id="description" name="description" value="" class="form-control" cols="30" rows="10">{description}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Date du projet :</label>
                <input type="date" id="date" name="date" value="{date}" class="form-control">
                <!-- <textarea type="date" id="date" name="date" value="" class="form-control" cols="30" rows="5">{date}</textarea> -->
            </div>
            <!-- Dupliquez cet élément selon vos besoins -->

            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Valider</button>
            <button type="submit" formaction="index.php?controller={class}&action=edit" class="btn btn-danger"><i class="fas fa-undo-alt"></i> Retour</button>
        </form>
    </div>
</div>
