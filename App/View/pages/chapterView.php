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
    <!-- formulaire de commmentaire  -->
    <div class="">
        <div id="formForComment">
            <form class="form-group" action="../../blogJF/App/index.php?p=post&id=<?= $_GET['id'] ?>" method="post">
                <div class="form-group">
                    <label class="control-label">Pseudo </label>
                    <input type="text" name="author" class="form-control" value=" "/>
                </div>
                <input class="form-inline" type="hidden" name="chapterId" value="<?= $_GET['id'] ?>">
                <div class="form-group">
                    <label class="control-label" for="comment">Mon message : </label>
                    <textarea id="comBox" class="" name="comment" rows="2"></textarea>
                </div>
                <button class="pull-right btn btn-default mr-2" type="submit">Envoyer</button>
                <br/>
            </form>
        </div>
    </div>
    <!-- Liste des commentaires du chapitres -->
    <article class="row align-items-lg-center">
        <div class="col-lg-10" id="contentOne">
            <div class="">
                <?php
                $i = 0;
                if (true == $comments) {
                    if ($_SESSION['countLines'] <= 1) {
                        ?>
                        <div class="frame">
                            <h5 id=author><?= $comments['author'] ?> le <?= $comments['commentDate'] ?></h5>
                            <p id="comment"><?= $comments['comment'] ?></p>
                        </div>
                        <?php
                    } else {
                        foreach ($comments as $comment) :
                            ?>
                            <div class="frame">
                                <form id="formReport" method="post" action="#">
                                    <h5 id=author><?= $comment['author'] ?> le <?= $comment['commentsDate'] ?></h5>
                                    <p id="comment_<?= $i++ ?>"
                                       class=""><?= htmlspecialchars_decode($comment['comment']) ?></p>
                                    <input title="idCo" class="text-sm-center" value="<?php $_POST['idCo'] =  $comment['id'] ?>">
                                    <button type="submit" id="modalBtn" formaction="">signaler un commentaire</button>
                                    <!-- data-toggle="modal"
                                           href="#modalBox" -->
                                </form>
                            </div>
                        <?php
                        endforeach;
                    }
                } ?>
            </div>


    </article>

    <p>idComm : <?php var_dump($comment['id']) ?></p>
    <p>idComm : <?php var_dump($_POST) ?></p>
</div>



