<?php
require_once dirname(__DIR__) . '/template.php';
?>


<div class="container col-lg-8 text-justify">

<?php if(!$_SESSION['idChap']){
$_SESSION ['idChap'] = $_GET['id'] ;
} ?>
    <div class="row">
        <div class="col-md-12">
            <div class="frame2">
                <h5 id=title class="text-lg-center"><?= $variables[0]['chpNumber'] ?> - <?= $variables[0]['chapterName'] ?></h5>
                <article id="content"><?= htmlspecialchars_decode($variables[0]['content']) ?></article>
            </div>
        </div>
    </div>

    <!-- formulaire de commmentaire  -->
    <div class="">
        <div id="formForComment">
            <form class="form-group" action="index.php?p=post&id=<?= $_SESSION['idChap'] ?>" method="post">
                <label for="author">Pseudo </label>
                <input class="form-control" title="inpAuthor" type="text" name="author"
                       placeholder="Saisir votre pseudo" autofocus/>
                <input class="form-inline" type="hidden" name="chapterId" value="<?= $_SESSION['idChap'] ?>">
                <label for="comment">Mon message : </label>
                <textarea id="comBox" class="form-control" title="comBox" name="comment"></textarea>
                <button class="btn-sm" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <!-- Liste des commentaires du chapitre -->
    <div class="container">
        <article class="row align-items-lg-center">
            <div class="col-lg-11 col-md-10 col-sm-10" id="contentOne">
                <?php
                if ($comments) { ?>
                    <form id="formReport" method="post">
                    <?php for ($i = 0; $i < $_SESSION['countLines']; $i++) {  ?>
                        <div class="frame">
                            <h5 id=author><?= $comments[$i]['author'] ?> le <?= $comments[$i]['commentsDate'] ?></h5>
                            <label title="commList"><?= $comments[$i]['comment'] ?></label>
                            <?php $commentId = $comments[$i]['id']; ?>
                            <div class="row flex-lg-row-reverse">
                            <button type="button" class="btn-sm float-right" data-toggle="modal"
                                    onClick="extractId('<?= $comments[$i]['id']; ?>');"
                                    data-target="#modalBox">signaler un commentaire
                            </button>
                            </div>
                        </div>
                    </form>
                    <?php }} ?>
            </div>
        </article>

        <!--  Modal -->
        <div class="modal" id="modalBox">
            <div class="modal-dialog">
                <div class="modal-content align-middle">
                    <div class="modal-header">
                        <h5 class="modal-title" id="report">Signaler le commentaire</h5>
                        <button type="button" class="close" data-dismiss="modal">x</button>
                    </div>
                    <div class="modal-body">
                        <form name="reportForm" id="reportForm" method="post"
                              >
                            <label>Sélectionner un motif de signalement :
                                <select id="reportSelected" name="reportSelected" class="list-group-item-dark">
                                    <option value="infondé">infondé</option>
                                    <option value="insulte">insulte</option>
                                    <option value="inutile">inutile</option>
                                </select>
                            </label>
                            <input type="hidden" title="idCom" name="idCom" id="idCom" class="text-sm-center"/>
                            <input type="hidden" title="idChap" name="idChap" id="idChap" value="<?= $_SESSION['idChap'] ?>"/>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id=""
                                name="report">Valider
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>

</div>



