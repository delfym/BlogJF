<?php
require_once dirname(__DIR__) . '/template.php';
?>
<div class="container align-items-start">
    <div class="row col align-items-center justify-content-center">
        <?php

        if (!empty($_SESSION['error'])) {
            ?>
            <section class="alert alert-danger">
                <p id="error">Les identifiants saisis sont incorrects. Merci de les saisir de nouveau</p>
            </section>

            <?php
            $_SESSION['error'] = "";
        }
        ?>
    </div>
    <div class="row align-items-start col">
        <div class="col "></div>
        <form class="form-group col-lg-6 align-items-center" id="login" action="indexAdmin.php" method="post">
            <div class="form-group">
                <label class="control-label">Identifiant : </label>
                <input type="text" name="username" class="form-control" value=""/>
            </div>
            <div class="form-group">
                <label class="control-label">Mot de passe : </label>
                    <input type="password" name="password" class="form-control" value=""/>
            </div>
            <div class="row form-group  col-sm-offset-2 col-sm-10">
                <button id="auth" class="btn btn-default btn-sm" name="auth" type="submit">Envoyer</button>
                <button class="btn btn-default btn-sm" name="cancel"  type="submit">Annuler</button>
            </div>
            <br/>
        </form>
        <div class="col"></div>
    </div>
</div>