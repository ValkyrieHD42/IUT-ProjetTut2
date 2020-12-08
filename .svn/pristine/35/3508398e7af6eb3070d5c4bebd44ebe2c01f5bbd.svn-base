<?php

require('../app/Activity.php');

include('inc/header.php');

?>
<h1></h1>
<hr>
<div class="col-lg-6">
<div class="card">
    <div class="card-header">
        <strong>Edition d'activité</strong>
    </div>
    <div class="card-body card-block">
        <form action="pushEditActivity.php" method="POST" class="form-horizontal">
            <input name="id" type="hidden" value="<?php echo $_GET['id']; ?>"/>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="resume" class="form-control-label">Résumé</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="resume" name="resume" placeholder="Résumé" value="<?php echo $_GET['summary'] ?>" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="details" class="form-control-label">Détails</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="details" name="details" placeholder="Détails" value="<?php echo $_GET['name'] ?>" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="commercial" class="form-control-label">Statut</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="statut" id="statut" class="form-control">
                        <option value="0"
                        <?php if($_GET['state'] == "en cours") {
                            echo 'selected="selected"';
                        }
                        ?>
                        >en cours</option>
                        <option value="1"
                        <?php if($_GET['state'] == "terminee") {
                            echo 'selected="selected"';
                        }
                        ?>
                        >terminee</option>
                        <option value="2"
                            <?php if($_GET['state'] == "prevue") {
                                echo 'selected="selected"';
                            }
                            ?>
                        >prevue</option>
                        <option value="3"
                            <?php if($_GET['state'] == "annulee") {
                                echo 'selected="selected"';
                            }
                            ?>
                        >annulee</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="type" class="form-control-label">Type</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="type" id="type" class="form-control">
                        <option value="0" <?php if($_GET['type']=="1") echo 'selected="selected"'; ?> >Developpement</option>
                        <option value="1" <?php if($_GET['type']=="2") echo 'selected="selected"'; ?>>Deploiement</option>
                        <option value="2" <?php if($_GET['type']=="3") echo 'selected="selected"'; ?>>Maintenance</option>
                        <option value="3" <?php if($_GET['type']=="4") echo 'selected="selected"'; ?>>Solution innovante</option>
                        <option value="4" <?php if($_GET['type']=="5") echo 'selected="selected"'; ?>>Migration</option>
                        <option value="5" <?php if($_GET['type']=="6") echo 'selected="selected"'; ?>>Service apres vente</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="estimate_time" class="form-control-label">Durée Prévue</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="estimate_time" name="estimate_time" placeholder="Durée Prévue" value="<?php echo $_GET['duree']; ?>" class="form-control">
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i>Valider
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Annuler
        </button></a>
    </div>
    </form>
</div>';


<?php include('inc/footer.php');
?>



