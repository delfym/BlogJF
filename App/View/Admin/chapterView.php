<?php require_once 'View/template.php'; ?>

<form class="form-control" method="post" action="indexAdmin.php">

    <div class="row">
        <div class="col-md-12">

                <input type="hidden" name="id" value="<?= $variables['id'] ?>">
                <input type="hidden" name="title" value="<?= $variables['title'] ?>">
                <h4 id = title ><?= $variables['title'] ?> - <?= $variables['chapterName'] ?></h4>

                <textarea id="textAdmin" class="form-control" rows="10" name="textAdmin"><?= $variables['content'] ?></textarea>

                <span class="row ">
                <button class="btn btn-group btn-primary" name="update" type="submit">Modifier</button>
                <button class="btn btn-group btn-primary" name="delete" type="submit">Supprimer</button>
                <button class="btn btn-group btn-primary" name="cancel" type="submit">Annuler</button>
                </span>
        </div>
    </div>

</form>


