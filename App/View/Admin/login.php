<?php
require_once dirname(__DIR__) . '/template.php';
?>

<div class="">
    <div class="">
        <form class="form-group" action="../../blogJF/App/index.php?p=login" method="post">
            <div class="form-group">
                <label class="control-label">Identifiant : </label>
                <input type="text" name="username" class="form-control" value=""/>
            </div>
            <div class="form-group">
                <label class="control-label">Mot de passe : </label>
                <input type="password" name="password" class="form-control" value=""/>
            </div>
            <button class="pull-right btn btn-default" type="submit">Envoyer</button><br/>
        </form>
    </div>
</div>