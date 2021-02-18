<?php
include "includes/init.inc.php";
include "vues/header.html.php";
?>
<div class="row">
    <div class="col-12 p-0">
        <div class="card">
            <form action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" value=""><br>
                        </div>
                        <div class="col">
                            <select name="type" id="type" class="form-control custom-select">
                                <option value="">Type de restaurant</option>
                                <option value="gastronomique">Gastromonique</option>
                                <option value="brasserie">Brasserie</option>
                                <option value="pizzeria">Pizzeria</option>
                                <option value="autre">Autre</option>
                            </select><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="adresse" name="adresse" class="form-control" placeholder="Adresse" value=""><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Téléphone" value=""><br>
                        </div><!-- /.col -->
                        <div class="col">
                            <select name="note" id="note" class="form-control custom-select">
                                <option value="" selected>Noter</option>
                                <?php echo $select_note; ?>

                            </select><br><br>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col">
                            <label for="avis">Rédiger un avis</label><br>
                            <textarea name="avis" id="avis" cols="30" rows="10" class="form-control" value="avis"></textarea>
                        </div>
                    </div> <!-- /.row -->

                </div><!-- /.card-body -->
        </div><!-- /.card -->
        <input type="submit" value="Enregistrer" name="enregistrer" class="mt-4 btn btn-block btn-outline-info">
        </form>
    </div><!-- /.col-12 -->
</div><!-- /.row -->

<?php
include "vues/footer.html.php";
?>