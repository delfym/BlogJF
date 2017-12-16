
<?php
require_once dirname(__DIR__).'/template.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class ="frame2">
            <h5 id = title ><?= $variables['title'] ?></h5>
            <article id = "content" ><?= $variables['content'] ?><br/><br/></article>
        </div>
    </div>
</div>
<div class="">
    <div class="">
        <form class="form-group" action="../../blogJF/App/index.php?p=post&id=<?= $_GET['id'] ?>" method="post">
            <div class="form-group">
                <label class="control-label">Pseudo : </label>
                <input type="text" name="author" class="form-control" value=" "/>
            </div>
                <input class="form-inline" type="hidden" name="chapterId" value="<?= $_GET['id'] ?>">
            <div class="form-group">
                <label class="control-label" for="comment">Mon message : </label>
                <textarea class="form-control" name="comment" rows="5" cols=""></textarea>
            </div>
            <button class="pull-right btn btn-default" type="submit">Envoyer</button><br/>
        </form>
    </div>
</div>


<?php
if(true == $comments){
if ($_SESSION['countLines'] <= 1) {
?>
<div class="">
    <div class="">
        <a href="../../index.php?p=chapter&id=<?= $_GET['id'] ?>">
            <h5 id=author><?= $comments['author'] ?> le <?= $comments['commentDate'] ?></h5>
        </a>
        <article id="comment" class=""><?= $comments['comment'] ?><br/><br/></article>
    </div>
<?php
} else {
    foreach ($comments as $comment) :
?>
    <div class="">
        <a href="../../index.php?p=chapter&id=<?= $_GET['id'] ?>">
            <h5 id=author><?= $comment['author'] ?> le <?= $comment['commentDate'] ?></h5>
        </a>
        <article id="comment" class=""><?= $comment['comment'] ?><br/><br/></article>
    </div>
<?php
    endforeach; }}?>
</div>
