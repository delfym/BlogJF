<?php require_once 'View/template.php'; ?>
<div class="container">
    <form class="form-control" method="post" action="indexAdmin.php">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="id" value="<?= $variables[0]['id'] ?>">
                <input type="hidden" name="title" value="<?= $variables[0]['title'] ?>">
                <input title="chapterName" id="chapterName" name="chapterName" type="text"
                           class="input-group-lg font-weight-bold text-center col-lg-12"
                           value="<?= $variables[0]['title'] .' - ' . $variables[0]['chapterName'] ;?>"/>
                <br/><br/>
                <textarea title="chapterContent" id="textAdmin" class="form-control flex-column" rows="10"
                          name="textAdmin"><?= $variables[0]['content'] ?></textarea>
                <span class="row ">
                    <button class="btn btn-group btn-primary" name="update" type="submit">Modifier</button>
                    <button class="btn btn-group btn-primary" name="delete" type="submit">Supprimer</button>
                    <button class="btn btn-group btn-primary" name="cancel" type="submit">Retour</button>
                </span>
            </div>
        </div>
    </form>
</div>

