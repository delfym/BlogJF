<?php
require_once dirname(__DIR__) . '/template.php';
?>
<div class="container col-lg-8 text-justify">


    <div class="row">
        <div class="col-md-12">
            <div class="frame2">
                <h5 id=title class="text-lg-center"><?= $variables['title'] ?> - <?= $variables['chapterName'] ?></h5>
                <article id="content"><?= htmlspecialchars_decode($variables['content']) ?></article>
            </div>
        </div>
    </div>

    <p>JE SUIS UN TEST DE PAGE REF</p>
    <!-- formulaire de commmentaire  -->
    <div class="">
        <div id="formForComment">
            <form class="form-group" action="../../blogJF/App/index.php?p=post&id=<?= $_GET['id'] ?>" method="post">
                <label for="author">Pseudo </label>
                <input class="form-control" title="inpAuthor" type="text" name="author"  placeholder="Saisir votre pseudo "/>
                <input class="form-inline" type="hidden" name="chapterId" value="<?= $_GET['id'] ?>">
                <label for="comment">Mon message : </label>
                    <textarea id="comBox" class="form-control" name="comment" ></textarea>
                <button class="btn-sm" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <!-- Liste des commentaires du chapitres -->
<div class="container">
    <article class="row align-items-lg-center">
        <div class="col-lg-10" id="contentOne">
            <div class="">
                <?php
                $i = 0;
                if (true == $comments) {
                    if ($_SESSION['countLines'] <= 1) {
                        ?>
                        <div class="frame">
                            <h5 id=author><?= $comments['author'] ?> le <?= $comments['commentsDate'] ?></h5>
                            <p id="comment"><?= $comments['comment'] ?></p>
                            <input title="idCo" class="text-sm-center" name="idCo" value="<?=  $_SESSION['idCo'] = $comments['id'] ?>">
                            <button id="modalBtn"
                                    class="btn-sm"
                                    data-toggle="modal"
                                    data-target="#modalBox">signaler un commentaire
                            </button>
                        </div>
                        <?php
                    } else {
                        foreach ($comments as $comment) :
                            ?>
                            <div class="frame">
                                <form id="formReport" method="post">
                                    <h5 id=author><?= $comment['author'] ?> le <?= $comment['commentsDate'] ?></h5>
                                    <input title="commList" readonly id="commentInp" name="comment_select"
                                           value="<?= $comment['comment'] ?>"/>
                                    <input title="inpCom" class="text-sm-center" name="inpCom" id="inpCom" value="<?= $_SESSION['id'] = $comment['id'] ?>">
                                    <button id="modalBtn" type="button" class="btn-sm"  data-toggle="modal" data-target ="#modalBox" data-whatever= "<?= $_SESSION['id'] ?>" >signaler un commentaire</button>
                                </form>
                            </div>
                        <?php
                        endforeach;
                    }
                } ?>
            </div>
    </article>

    <!--  Modal -->
    <div class="modal" id="modalBox">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="report">Signaler le commentaire <?= $_SESSION['id']  ?></h5>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <form name="reportForm" id="reportForm" class="" method="post"
                          action="../../blogJF/App/indexAdmin.php?p=report&id=<?= $_SESSION['id'] ?>">
                        <label>Sélectionner un motif de signalement :
                            <select id="reportSelected" name="reportSelected" class="list-group-item-dark">
                                <option value="infondé">infondé</option>
                                <option value="insulte">insulte</option>
                                <option value="inutile">inutile</option>
                            </select>
                        </label>
                        <textarea name="idCom" id="idCom" class="text-sm-center"><?= $_SESSION['id'] ?></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="modal-button"
                            name="report" >Valider
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
</div>
    <?php var_dump($_POST);
    $i = 0; ?>
</div>



