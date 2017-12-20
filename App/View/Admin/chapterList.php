<?php require_once 'View/template.php'; ?>


<h4 class="align-items-center">Choix du chapitre à modifier</h4>
<br/>
<label class="col-form-label">Liste de choix</label>


<select class="list-group" name="">

    <?php foreach ($variables as $chapter) : ?>
        <option value=""><?= $chapter['title'] ?></option>
    <?php endforeach; ?>

</select>
