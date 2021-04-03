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
                <label for="titre">Titre :</label>
                <!-- <input type="text" id="titre" name="titre" value="{titre}" class="form-control"> -->
                <textarea type="text" id="titre" name="titre" value="" class="form-control" cols="30" rows="10">{titre}</textarea>
            </div>
            <div class="form-group">
                <label for="contenu">Contenu :</label>
                <!-- <input type="text" id="contenu" name="contenu" value="{contenu}" class="form-control"> -->
                <textarea type="text" id="contenu" name="contenu" value="" class="form-control" cols="30" rows="30">{contenu}</textarea>
            </div>
            <!-- Dupliquez cet élément selon vos besoins -->

            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Valider</button>
            <button type="submit" formaction="index.php?controller={class}&action=edit" class="btn btn-danger"><i class="fas fa-undo-alt"></i> Retour</button>
        </form>
    </div>
</div>
