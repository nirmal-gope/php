<h1><?= $title ?? "Nouvel emprunt" ?></h1>

<form method="POST">
    <div class="form-group">
        <label for="abonne_id">Abonné</label>
        <select name="abonne_id" id="abonne_id" class="form-control">
        <option value="">Choisir un abonné...</option>
            <?php foreach ($abonnes as $abonne) : ?>
                <option value="<?= $abonne["id"] ?>">
                    <?= $abonne["pseudo"] ?>
                </option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label for="">Livre</label>
        <select name="livre_id" id="livre_id" class="form-control">
        <option value="">Choisir un livre...</option>
            <?php foreach ($livres as $livre) : ?>
                <option value="<?= $livre["id"] ?>"><?= $livre["titre"] . " _ " . $livre["auteur"] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="date_emprunt">Date emprunt</label>
        <input type="date" name="date_emprunt" class="form-control">
    </div>
    <div class="form-group">
        <label for="date_retour">Date retour</label>
        <input type="date" name="date_retour" class="form-control">
    </div>
<button type="submit" class="btn btn-dark">Emprunter</button>
<button type="reset" class="btn btn-warning">Effacer</button>

</form>