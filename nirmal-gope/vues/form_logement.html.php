<h1 class="alert alert-primary">
    Ajouter à la liste des logements
</h1>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" name="titre" value="<?= !empty($logement["titre"]) ? $logement["titre"] : "" ?>" id="titre">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" name="adresse" value="<?= !empty($logement["adresse"]) ? $logement["adresse"] : "" ?>" id="adresse">
    </div>
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" name="ville" value="<?= !empty($logement["ville"]) ? $logement["ville"] : "" ?>" id="ville">
    </div>
    <div class="form-group">
        <label for="cp">CP</label>
        <input type="text" class="form-control" name="cp" value="<?= !empty($logement["cp"]) ? $logement["cp"] : "" ?>" id="cp">
    </div>
    <div class="form-group">
        <label for="surface">Surface</label>
        <input type="text" class="form-control" name="surface" value="<?= !empty($logement["surface"]) ? $logement["surface"] : "" ?>" id="surface">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" name="prix" value="<?= !empty($logement["prix"]) ? $logement["prix"] : "" ?>" id="prix">
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" class="form-control" name="photo" value="<?= !empty($logement["photo"]) ? $logement["photo"] : "" ?>" id="photo">
    </div>
    <div class="form-group">
        <label for="type">Choisir type</label>
        <select class="form-control" id="type" name="type">
            <option></option>
            <option>location</option>
            <option>vente</option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id=" description" rows="4"><?= !empty($logement["description"]) ? $logement["description"] : "" ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>

</form>