<?php require_once 'View/template.php'; ?>

<div class="container">
    <?php foreach ($variables as $chapter) : ?>
        <div class="frame2 container col-lg-8 text-justify">
            <a href="index.php?p=chapter&id=<?= $chapter['id'] ?>">
                <h5 id=title class="text-center"><?= $chapter['chpNumber'] ?> - <?= $chapter['chapterName'] ?></h5>
            </a>
            <span id="content"><?= htmlspecialchars_decode(substr($chapter['content'], 0, 500)) ?></span>
            <a id="points" href="index.php?p=chapter&id= <?= $chapter['id'] ?>"> (...)</a>
        </div>
    <?php endforeach; ?>

    <div class="row" id="btnPages">
        <?php
        if (empty($_GET['numPage'])) {
            $_GET['numPage'] = 1;
        }
        if ($_GET['numPage'] > 1) { ?>
            <a type="button" id="pageNumber" class="btn-sm btn-link" href="?p=list&numPage=<?= $_GET['numPage'] - 1 ?>"><</a>
        <?php }
        if ($_GET['numPage'] <= $nbOfPages[0]) { ?>
            <?php for ($i = 1; $i <= $nbOfPages[0]; $i++) { ?>
                <a type="button" id="pageNumber" class="btn-sm btn-link" href="?p=list&numPage=<?= $i ?>"><?= $i ?></a>
            <?php }
            if ($_GET['numPage'] < $nbOfPages[0]) { ?>
                <a type="button" id="pageNumber" class="btn-sm btn-link"
                   href="?p=list&numPage=<?= $_GET['numPage'] + 1 ?>">></a>
            <?php }
        } ?>
    </div>
</div>