<?php require_once 'View/template.php'; ?>

<div class="container">
    <h4 class="align-items-center">Choix du chapitre à modifier</h4>
    <br/>
    <label class="col-form-label">Liste de choix</label>

    <form method="post" action="indexAdmin.php">
        <select class="list-group" name="chapterSelected">
            <?php foreach ($variables as $chapter) : ?>
                <option name="id" value="<?= $chapter['id'] ?>"><?= $chapter['title'] ?>
                    - <?= $chapter['chapterName'] ?></option>
            <?php endforeach; ?>
        </select>
        <br/>
        <span class="row">
            <button class="btn btn-group btn-primary btn-sm" name="chapter" href="indexAdmin.php?p=chapter"
                    type="submit">Choisir</button>
        <a class="btn btn-group btn-primary btn-sm mr-2" name="new" href="indexAdmin.php?p=chapterNew">Ajouter un nouveau chapitre</a>
        </span>
    </form>
    <br/>
    <section>
        <?php if (!empty($_POST['reportSelected'])) { ?>

            <p>Le commentaire a été signalé : </p>
        <?php } ?>
    </section>
    <table class="table">
        <tbody>
        <tr>
            <td>Nom d'un report</td>
            <td>Action</td>
            <td>Motif du signalement</td>
        </tr>
        <tr>
            <td>Commentaire reporté</td>
            <td>Motif du signalement</td>
            <td>
                <?= $_POST['$commentReported'] ?>
            </td>
            <td>
                <button class="btn btn-group-sm btn-primary btn-sm mr-2">Valider</button>
                <button class="btn btn-group-sm btn-primary btn-sm">Supprimer</button>
            </td>
        </tr>
        </tbody>
    </table>

</div>
<br/><br/>



