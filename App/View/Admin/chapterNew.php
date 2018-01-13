<?php require_once 'View/template.php'; ?>

<div class="container">

    <form class="form-control" method="post" action="indexAdmin.php">
        <div class="row col-lg-12">
            <p id=title>Chapitre n° <input class="col-sm-1" type="text" name="chapNumber"/>
                Titre du chapitre : <input type="text" name="chapterName"/>
            </p>
            <label id="title" class="">Texte à saisir :
                <textarea id="textAdmin" class="form-control flex-lg-column" rows="10" name="txtAdmin"></textarea>
            </label>
        </div>
            <br/>
        <div class="row">
            <button class="btn btn-group btn-primary btn-sm" name="create" type="submit">Valider</button>
            <button class="btn btn-group btn-primary btn-sm" formaction="indexAdmin.php" name="return" type="submit">Annuler</button>
        </div>

    </form>
</div>