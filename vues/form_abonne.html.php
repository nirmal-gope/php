
<h1>
    <?php if(empty($titre)): ?>
        Ajouter un nouvel abonné
    <?php else: ?>
        <?= $titre ?>
    <?php endif; ?>
</h1>
<form method="POST">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <!-- CONDITION TERNAIRE : équivalent à un IF en 1 seule instruction
            syntaxe :
                condition ? valeur_si_condition_vraie : valeur_si_condition_fausse

            La condition ternaire s'utilise quand une valeur dépend d'une condition.
           Dans le cas présent si $abonne est vide, on affiche la chaîne vide ("") sinon on affiche $abonne["pseudo"]
        -->
        <input type="text" name="pseudo" class="form-control" value="<?= empty($abonne) ? "" : $abonne['pseudo'] ?>">
    </div>
    <div class="form-group">
        <label for="">MDP</label>
        <input type="text" name="mdp" class="form-control" placeholder="mot de passe">
    </div>

    <!-- EXO : si $abonne est vide, affichez "Enregistrer" sinon affichez "Modifier", dans le texte du bouton
                (en utilisant une condition ternaire) -->
    <button type="submit" class="btn btn-primary">
        <?= empty($abonne) ? "Enregistrer" : "Modifier" ?>
    </button>
</form>

<?php include "vues/footer.html.php";?>