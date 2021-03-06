<?php require_once 'View/template.php'; ?>

<div class="container">
    <br/>
    <div class="row jumbotron">
        <div class="col">
            <h4 class="text-md-center">Votre espace administrateur</h4>
            <div class="row" id="jumbo"></div>
            <h5 class="text-md-center">Bonjour <?= $_SESSION['username'] ?>!</h5>
            <a class="btn btn-group btn-primary btn-sm float-right" id="deco"
               href="indexAdmin.php?p=reset">Déconnexion</a>
        </div>
    </div>

    <section class="col-lg table-responsive">
        <table class="table table-hover table-bordered">
            <caption>
                <h4>Que voulez-vous faire aujourd'hui?</h4>
            </caption>
            <thead class="text-lg-center">
            <tr>
                <th>Modifier un chapitre</th>
                <th>Ajouter un nouveau chapitre</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="adminArray">
                    <form class="form-inline" method="post" action="indexAdmin.php">
                        <label>
                            <select class="list-group list-group-item-dark" name="chapterSelected">
                                <?php foreach ($variables as $chapter) : ?>
                                    <option name="id" value="<?= $chapter['id'] ?>"><?= $chapter['chpNumber'] ?>
                                        - <?= $chapter['chapterName'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <button class="btn-group btn-primary btn-sm" name="chapter" href="indexAdmin.php?p=chapter"
                                type="submit">Choisir
                        </button>
                    </form>
                </td>
                <td class="adminArray">
                    <a class="btn btn-group btn-primary btn-sm" name="new"
                       href="indexAdmin.php?p=chapterNew">Ajouter un nouveau chapitre</a>
                </td>
            </tr>
            </tbody>
        </table>
    </section>

        <section class="col-lg table-responsive">
            <table class="table table-hover table-bordered">
                <caption>
                    <h4>Gestion des administrateurs</h4>
                </caption>
                <thead class="text-lg-center">
                <tr>
                    <th>Modifier un administrateur</th>
                    <th>Ajouter un administrateur</th>
                </tr>
                </thead>
                <tbody class="adminArray">
                <tr class="">
                    <td class="">
                        <form class="form-inline centerAction" method="post" action="indexAdmin.php">
                            <label>
                                <select class="list-group list-group-item-dark" name="userSelected">
                                    <?php foreach ($users as $user) : ?>
                                        <option name="id" value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </label>
                            <button class="btn-group btn-primary btn-sm" name="updateUser"
                                    formaction="indexAdmin.php?p=updateUser"
                                    type="submit">Choisir
                            </button>
                            <button class="btn-group btn-primary btn-sm" name="deleteUser"
                                    type="submit">Supprimer
                            </button>
                        </form>
                    <td>
                        <a class="btn btn-group btn-primary btn-sm" name="new"
                           href="indexAdmin.php?p=loginNew">Ajouter un adminstrateur</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>

    <?php if (!empty($reports)) { ?>

        <section class="table-responsive offset-1 col-lg-10 col-md-8">
            <div class="">
                <table class="table table-hover table-bordered align-middle">
                    <caption class="text-md-center">
                        <h4>Les commentaires à traiter</h4>
                    </caption>
                    <thead class="text-md-center">
                    <tr>
                        <th>Commentaire</th>
                        <th>Motif du signalement</th>
                        <th>Boutons d'action</th>
                    </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php foreach ($reports as $report) { ?>
                        <tr>
                            <td><?= $report['comment'] ?></td>
                            <td><?= $report['cause'] ?></td>
                            <td>
                                <div class="btn-group-justified centerAction">
                                    <a class="btn btn-sm"
                                       href="indexAdmin.php?p=report&id=<?= $report['id'] ?>&action=ok">Valider le
                                        commentaire
                                    </a>
                                    <a class="btn btn-group btn-primary btn-sm"
                                       href="indexAdmin.php?p=report&id=<?= $report['id'] ?>&action=delete">Supprimer le
                                        commentaire</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    <?php } ?>

</div>
<br/><br/>



