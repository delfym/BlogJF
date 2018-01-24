<?php
require_once dirname(__DIR__) . '/template.php';

?>

<div class="container align-items-start">
    <div class="row col align-items-center justify-content-center">
        <?php
        if (!empty($_SESSION['error'])) {
        ?>
            <section class="alert alert-danger">
                <p id="error">Les mots de passe saisis ne sont pas identiques. Merci de les saisir à nouveau</p>
            </section>
            <?php
            $_SESSION['error'] = "";
        }
        ?>
    </div>

    <div class="row align-items-start col">
        <div class="col "></div>
        <form class="form-group col-lg-6 align-items-center " id="login" action="indexAdmin.php" method="post">
            <div class="form-group ">
                <label class="control-label">Identifiant : </label>
                <input title="new user" type="text" name="username" class="form-control" value="<?= $_SESSION['user'] ?>" />
                <input title="userId" type="hidden" name="userId" value="<?= $_SESSION['userSelected'] ?>" />
            </div>
            <div class="form-group">
                <label class="control-label">Nouveau mot de passe : </label>
                <input title="controlPass" type="password" name="controlPass" class="form-control" autofocus/>
            </div>
            <div class="form-group">
                <label class="control-label">Nouveau mot de passe : </label>
                <input title="new pass" type="password" name="password" class="form-control" autofocus/>
            </div>
            <div class="row form-group col-sm-offset-2 col-sm-10">
                <button class="btn btn-default btn-sm" name="updateLog" type="submit">Modifier</button><br/>
                <button class="btn btn-default btn-sm" name="deleteLog" type="submit">Supprimer</button><br/>
                <button class="btn btn-default btn-sm" formaction="indexAdmin.php" name="cancel"  type="submit">Annuler</button>
            </div>
        </form>
        <div class="col"></div>
    </div>
</div>