<?php require_once 'View/template.php'; ?>

<form class="form-control" method="post" action="indexAdmin.php">

    <div class="row">
        <div class="col-lg-12">
            <div class ="">
                <p id = title >Chapitre n° <input class="col-sm-1" type="text" name="title"/>
                 Titre du chapitre :  <input type="text" name="chapterName"/>
                </p>
                <label id="title" class="flex-column">Texte à saisir :
                    <textarea class="form-control col-lg-12" rows="10" name="content"></textarea>
                </label>
            </div>
            <br/>
            <div class="row justify-content-around col-md-3">
                <button class="btn-group btn-primary" name="create" href="" type="submit">Valider</button>
                <button class="btn-primary btn-primary" name="cancel"  href="" type="reset">Annuler</button>
            </div>
        </div>
    </div>
    </div>
</form>