<?php
require_once dirname(__DIR__) . '/template.php';
?>

<?php

if (!empty($_SESSION['error'])) {
    ?>
    <div class="">

        <p id="error" class="">Les identifiants saisis sont incorrects. Merci de les saisir de nouveaux</p>
    </div>

    <?php
    $_SESSION['error'] = "";
}
?>

<div class="">
    <div class="">
        <form class="form-group" action="indexAdmin.php" method="post">
            <div class="form-group">
                <label class="control-label">Identifiant : </label>
                <input type="text" name="username" class="form-control" value=""/>
            </div>
            <div class="form-group">
                <label class="control-label">Mot de passe : </label>
                <input type="password" name="password" class="form-control" value=""/>
            </div>
            <button id="auth" class="pull-right btn btn-default" name="auth" type="submit">Envoyer</button><br/>
        </form>
    </div>
</div>

