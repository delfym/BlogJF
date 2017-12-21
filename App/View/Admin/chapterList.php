<?php require_once 'View/template.php'; ?>

<div class="container">
    <h4 class="align-items-center">Choix du chapitre à modifier</h4>

    <br/>

    <label class="col-form-label">Liste de choix</label>

    <form method="post" action="indexAdmin.php?p=chapter">
        <select class="list-group" name="chapterSelected">
            <?php foreach ($variables as $chapter) : ?>
                <option name="id" value="<?= $chapter['id'] ?>"><?= $chapter['title'] ?></option>
            <?php endforeach; ?>
        </select>
        <br/>
        <div class="row justify-content-around col-md-4">
            <button class="btn btn-group btn-primary" type="submit">Choisir</button>
            <br/>
    </form>

    <br/>
    <button class="btn btn-group btn-primary " href="indexAdmin.php?p=create" type="submit">Ajouter un nouveau chapitre>
    </button>
    <br/>
        </div>
</div>
<br/><br/>


