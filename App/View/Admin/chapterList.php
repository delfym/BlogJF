
<?php require_once 'View/template.php'; ?>
<?php foreach ($chapters as $chapter) : ?>

<h2>Choix du chapitre à modifier</h2>
<br/>
<label class="col-form-label">Liste de choix</label>
<select class="list-group" name=<?= $chapter['title'] ?>>
    <option value="<?= $chapter['title'] ?>">Choix 1</option>
    <option value="<?= $chapter['title'] ?>">Choix 2</option>
</select>



<?php endforeach; ?>