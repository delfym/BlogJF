<?php require_once 'View/template.php'; ?>

<form class="form-control" method="post" action="indexAdmin.php">

    <div class="row">
        <div class="col-md-12">

                <input type="hidden" name="id" value="<?= $variables['id'] ?>">
                <input type="hidden" name="title" value="<?= $variables['title'] ?>">
                <label id = title ><?= $variables['title'] ?></label>

                <textarea class="form-control" rows="10" name="content"><?= $variables['content'] ?></textarea>

                <div class="row justify-content-around col-md-3">
                <button class="btn btn-group btn-primary" name="update" href="indexAdmin.php?p=update" type="submit">Modifier</button>
                <button class="btn btn-group btn-primary" name="delete"  href="indexAdmin.php?p=delete"type="submit">Supprimer</button>
                <button class="btn btn-group btn-primary" name="cancel"  href="indexAdmin.php?p=home"type="reset">Annuler</button>
                </div>
        </div>
    </div>

</form>


