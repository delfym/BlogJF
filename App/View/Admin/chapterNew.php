<?php require_once 'View/template.php'; ?>

<form class="form-control" method="post" action="indexAdmin.php">

    <div class="row">
        <div class="col-md-12">
            <div class ="">
                <label id = title >Chapitre
                    <input type="text" name="title"/>
                </label>

                <textarea class="form-control" rows="10" name="content"></textarea>
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