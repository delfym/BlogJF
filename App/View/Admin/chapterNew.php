<?php require_once 'View/template.php'; ?>

<div class="container newChap">

    <form class="form-control" method="post" action="indexAdmin.php">
        <div class="row col-lg-12  id="newChap">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="font-weight-bold ">Chapitre n° <input class="form-control text-center" type="text" name="chapNumber" placeholder="n'indiquer que le numéro de chapitre"/></p>
            <p class="font-weight-bold"> Titre du chapitre : <input class="form-control text-center" type="text" name="chapterName"/></p>
            </div>
            <label class="col-lg-12 col-sm-12 col-sm-12 font-weight-bold">Texte à saisir :
                <textarea id="textAdmin" class="form-control flex-lg-column" rows="10" name="textAdmin"></textarea>
            </label>
        </div>
        <div class="row justify-content-center">
            <button class="btn btn-group btn-primary btn-sm" name="create" type="submit">Valider</button>
            <button class="btn btn-group btn-primary btn-sm" formaction="indexAdmin.php" name="return" type="submit">Annuler</button>
        </div>
    </form>
</div>