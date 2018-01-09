<?php require_once 'View/template.php'; ?>

<div class="container">
    <br/>
    <h4 class="text-lg-center jumbotron">Votre espace administrateur</h4>

            <br/>

    <section class="table-responsive">
        <table class="table table-hover table-bordered">
            <caption>
                <h4>Que voulez-vous faire aujourd'hui?</h4>
            </caption>
            <thead class="text-lg-center">
            <tr>
                <th>Modifier un chapitre</th>
                <th>Ajouter un nouveau chapitre</th>
                <th>Ajouter un administrateur</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="align-items-center justify-content-center">
                    <form class="form-inline" method="post" action="indexAdmin.php">
                        <label>
                            <select class="list-group list-group-item-dark" name="chapterSelected">
                                <?php foreach ($variables as $chapter) : ?>
                                    <option name="id" value="<?= $chapter['id'] ?>"><?= $chapter['title'] ?>
                                        - <?= $chapter['chapterName'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <button class="btn-group btn-primary btn-sm" name="chapter" href="indexAdmin.php?p=chapter"
                                type="submit">Choisir
                        </button>
                    </form>
                <td><a class="btn btn-group btn-primary btn-sm" name="new"
                       href="indexAdmin.php?p=chapterNew">Ajouter un nouveau chapitre</a></td>
                <td><a class="btn btn-group btn-primary btn-sm" name="new" href="indexAdmin.php?p=loginNew">Ajouter un administrateur</a></button></td>
            </tr>
            </tbody>
        </table>

        <?php if (!empty($reports)) { ?>

    <section class="table-responsive col-lg-10 col-md-8">
    <table class="table table-hover table-bordered">
        <caption>
            <h4>Les commentaires à traiter</h4>
        </caption>
        <thead class="align-items-center justify-content-center">
            <tr>
                <th>Commentaire</th>
                <th>Motif du signalement</th>
                <th>Boutons d'action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($reports as $report){ ?>
            <tr>
                <td><?= $report['comment']  ?></td>
                <td><?= $report['cause']  ?></td>
                <td>
                    <div class="btn-group-justified">
                        <button class="btn btn-sm" href="indexAdmin.php?p=report&id=<?= $report['id'] ?>&action=ok">Valider le commentaire</button>
                        <button class="btn btn-sm" href="indexAdmin.php?p=report&id=<?= $report['id'] ?>&action=delete">Supprimer le commentaire</button>
                    </div>
                </td>
            </tr>
        <?php   }  ?>
        </tbody>
    </table>

    </section>
    <?php } ?>

</div>
<br/><br/>



