<?php require_once 'View/template.php'; ?>


<h4 class="align-items-center">Choix du chapitre à modifier</h4>
<br/>
<label class="col-form-label">Liste de choix</label>

<form method="post" action="indexAdmin.php?p=chapter">
<select class="list-group" name="chapterSelected">
    <?php foreach ($variables as $chapter) : ?>
        <option value="<?= $chapter['id'] ?>"><?= $chapter['title'] ?></option>
    <?php endforeach; ?>
</select>
    <br/>
    <button class="btn btn-group btn-primary" type="submit">Choisir</button><br/>
</form>

<?php if (isset($chapter) && !empty($chapter)){ ?>
    <div class="row">
        <div class="col-md-12">
            <div class ="frame2">
                <h5 id = title ><?= $variables['title'] ?></h5>
                <article id = "content" ><?= $variables['content'] ?><br/><br/></article>
            </div>
        </div>
    </div>

<?php
}
?>
