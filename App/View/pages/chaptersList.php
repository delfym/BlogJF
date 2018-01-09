
<?php require_once 'View/template.php'; ?>
<?php foreach ($variables as $chapter) : ?>
    <div class ="frame2 container col-lg-8 text-justify">
        <a href="index.php?p=chapter&id=<?= $chapter['id'] ?>">
            <h5 id = title class="text-center"><?= $chapter['title'] ?> - <?= $chapter['chapterName'] ?></h5>
        </a>
        <span id = "content" ><?= htmlspecialchars_decode(substr($chapter['content'], 0, 500 ))?></span>
        <a id="points" href="index.php?p=chapter&id= <?= $chapter['id'] ?>"> (...)</a>
    </div>
<?php endforeach; ?>




