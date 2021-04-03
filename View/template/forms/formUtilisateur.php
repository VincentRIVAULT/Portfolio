<div class="justify-content">
	<div class="col-md-4 offset-4 mb-5 mt-5">
        <form method="POST" action="index.php?controller={class}&action={action}">
            <!-- Input de l'ID en display none -->
            <div class="form-group">
                <label for="id" class="d-none">ID</label>
                <input type="text" id="id" name="id" value="{id}" class="form-control d-none" readonly>
            </div>
            
            <!-- Dupliquez cet élément selon vos besoins -->
            <div class="form-group">
                <label for='username'>Username :</label>
                <input type="text" id='username' name="username" value="{username}" class="form-control">
            </div>
            <div class="form-group">
                <label for='password'>Password :</label>
                <input type="text" id='password' name="password" value="{password}" class="form-control">
            </div>
            <div class="form-group">
                <label for='lastname'>Nom :</label>
                <input type="text" id='lastname' name="lastname" value="{lastname}" class="form-control">
            </div>
            <div class="form-group">
                <label for='firstname'>Prénom :</label>
                <input type="text" id="firstname" name="firstname" value="{firstname}" class="form-control">
            </div>
            <div class="form-group">
                <label for='rank'>Rôle :</label>
                <input type="text" id="rank" name="rank" value="{rank}" class="form-control">
            </div>
            <!-- Dupliquez cet élément selon vos besoins -->

            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Valider</button>
            <button type="submit" formaction="index.php?controller={class}&action=edit" class="btn btn-danger"><i class="fas fa-undo-alt"></i> Retour</button>
        </form>
    </div>
</div>
