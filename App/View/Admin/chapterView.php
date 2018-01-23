<?php require_once 'View/template.php'; ?>
<div class="container-fluid">
    <form class="form-control" method="post" action="indexAdmin.php">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="id" value="<?= $variables[0]['id'] ?>">
                <input type="hidden" name="chpNumber" value="<?= $variables[0]['chpNumber'] ?>">
                <input title="chapter Number" id="chpNumber" name="chpNumber" type="text"
                           class="input-group-lg font-weight-bold text-center col-lg-12"
                           value="<?= $variables[0]['chpNumber'] ?>"/>
                <br/>
                <input title="chapterName" id="chapterName" name="chapterName" type="text"
                       class="input-group-lg font-weight-bold text-center col-lg-12"
                       value="<?= $variables[0]['chapterName'] ;?>"/>
                <br/><br/>
                <textarea title="chapterContent" id="textAdmin" class="form-control" rows="10" cols="555"
                          name="textAdmin"><?= $variables[0]['content'] ?></textarea>
                <span class="row justify-content-center">
                    <button class="btn btn-group btn-primary btn-sm" name="update" type="submit">Modifier</button>
                    <button class="btn btn-group btn-primary btn-sm" name="delete" type="submit">Supprimer</button>
                    <button class="btn btn-group btn-primary btn-sm" name="cancel" type="submit">Retour</button>
                </span>
            </div>
        </div>
    </form>
</div>

