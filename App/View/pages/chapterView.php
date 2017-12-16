
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
    <?php
    if(true == $comments){
    if ($_SESSION['countLines'] <= 1) {
    ?>
    <div class="row">
        <div class="col-lg-12">
            <a href="../../index.php?p=chapter&id=<?= $_GET['id'] ?>">
                <h5 id=author><?= $comments['author'] ?> le <?= $comments['commentDate'] ?></h5>
            </a>
            <article id="comment" class="col-sm-12"><?= $comments['comment'] ?><br/><br/></article>
        </div>
    <?php
    } else {
        foreach ($comments as $comment) :
    ?>
        <div class="col-lg-12">
            <a href="../../index.php?p=chapter&id=<?= $_GET['id'] ?>">
                <h5 id=author><?= $comment['author'] ?> le <?= $comment['commentDate'] ?></h5>
            </a>
            <article id="comment" class="col-sm-12"><?= $comment['comment'] ?><br/><br/></article>
        </div>
<?php   endforeach; }}?>
</div>
