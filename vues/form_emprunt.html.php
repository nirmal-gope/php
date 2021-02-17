<h1><?= $title ?? "Nouvel emprunt" ?></h1>

<form method="POST">
    <div class="form-group">
        <label for="">Abonné</label>
        <select name="abonne_id" id="abonne_id" class="form-control">
            <?php foreach ($abonnes as $abonne) : ?>
                <option value="<?= $abonne["id"] ?>">
                    <?= $abonne["pseudo"] ?>
                </option>
            <?php endforeach ?>

        </select>
    </div>
    <div class="form-group">
        <label for="">Livre</label>
        <select name="livre_id" id="livre_id" class="form-group">
            <?php foreach ($livres as $livre) : ?>
                <option value="<?= $livre("id") ?>"><?= $livre["titre"] . " _ " . $livre["auteur"] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Date emprunt</label>
        <input type="date" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Date retour</label>
        <input type="date" class="form-control">
    </div>

</form>