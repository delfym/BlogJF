
<?php require_once 'View/template.php'; ?>
<?php foreach ($variables as $chapter) : ?>

    <div class ="frame2">
        <a href="index.php?p=chapter&id=<?= $chapter['id'] ?>">
            <h5 id = title ><?= $chapter['title'] ?></h5>
        </a>
        <article id = "content" ><?= substr($chapter['content'], 0, 500 )?>
            <a href="index.php?p=chapter&id= <?= $chapter['id'] ?> ">(...)</a>
            <br/><br/>
        </article>
    </div>
    <?php endforeach; ?>
