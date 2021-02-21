<h1>
    <?php if (empty($titre)) : ?>
        Ajouter à la liste des véhicule
    <?php else : ?>
        <?= $titre; ?>
    <?php endif; ?>
</h1>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="marque">Marque</label>
        <input type="text" class="form-control" name="marque" id="marque">
    </div>
    <div class="form-group">
        <label for="kilometrage">Kilometrage</label>
        <input type="text" class="form-control" name="kilometrage" id="kilometrage">
    </div>
    <div class="form-group">
        <label for="tarif">Tarif</label>
        <input type="text" class="form-control" name="tarif" id="tarif">
    </div>
    <div class="custom-file my-4">
        <input type="file" class="custom-file-input" id="phpto" name="photo">
        <label class="custom-file-label" for="photo">Photo du véhicule</label>
    </div>
    <div class="custom-file my-4">
        <input type="file" class="custom-file-input" id="fiche" name="fiche">
        <label class="custom-file-label" for="fiche">Fiche du véhicule</label>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">
        <?= empty($voiture) ? 'Enregistrer' : (!empty($mode) && $mode == 'suppression' ? 'Supprimer' : 'Modifier'); ?>
    </button>
    <a href="gestion_voitures.php" class="btn btn-danger">Annuler</a>
</form>