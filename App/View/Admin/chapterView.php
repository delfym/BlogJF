<?php require_once 'View/template.php'; ?>

<form class="form-control" method="post" action="indexAdmin.php?p=update">

    <div class="row">
        <div class="col-md-12">
            <div class ="">
                <label id = title ><?= $variables['title'] ?></label>
                <p>
                <textarea class="form-control" rows="10"><?= $variables['content'] ?></textarea>
                </p>
            </div>
        </div>
    </div>
</form>

