<h1>
    <?php if (empty($titre)) : ?>
        Ajouter un nouvel abonné
    <?php else : ?>
        <?= $titre; ?>
    <?php endif; ?>
</h1>

<form method="POST">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" class="form-control" value="<?= empty($membre) ? '' : $membre['pseudo']; ?>" <?= !empty($mode) && $mode == 'suppression' ? 'disabled' : ''; ?>>
    </div>
    <div class="form-group">
        <label for="mdp">MDP</label>
        <input type="text" name="mdp" class="form-control" placeholder="mot de passe" <?= !empty($mode) && $mode == 'suppression' ? 'disabled' : ''; ?>>
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="nom" <?= !empty($mode) && $mode == 'suppression' ? 'disabled' : ''; ?>>
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" class="form-control" placeholder="prenom" <?= !empty($mode) && $mode == 'suppression' ? 'disabled' : ''; ?>>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="email" <?= !empty($mode) && $mode == 'suppression' ? 'disabled' : ''; ?>>
    </div>
    <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="telephone" name="telephone" class="form-control" placeholder="telephone" <?= !empty($mode) && $mode == 'suppression' ? 'disabled' : ''; ?>>
    </div>
    <div class="form-group">
        <label for="statut">Statut</label>
        <select name="niveau" id="niveau" class="form-control">
            <option></option>
            <option value=10 <?= !empty($membre) && $membre["statut"] == 10 ? 'selected' : ''; ?>>Abonne</option>
            <option value=50 <?= !empty($membre) && $membre["statut"] == 50 ? 'selected' : ''; ?>>Administrateur</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">
        <?= empty($membre) ? 'Enregistrer' : (!empty($mode) && $mode == 'suppression' ? 'Supprimer' : 'Modifier'); ?>
    </button>
    <a href="abonne_liste.php" class="btn btn-danger">Annuler</a>
</form>