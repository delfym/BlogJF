
<?= var_dump($_POST) ?>
<div class="row">
    <div class="col-md-10">
        <div class ="frame">
            <h5 id = report >Signaler un commentaire</h5>
            <form name = "reportSelected" class="form-control" method="post" action="../../index.php?p=report">
                <label >Sélectionner un motif de signalement :
                    <select id= "reportSelected" name = "reportSelected" class="list-group-item-action">
                        <option value="infonde">infondé</option>
                        <option value="insulte">insulte / non constructif</option>
                    </select>
                </label>
                <input type="button" class="form-control" name="report" onclick="submit(); window.close()">Envoyer</input>
                <button class="form-control" type="reset" name="report" onclick="closePopup()">Annuler</button>
            </form>
        </div>
    </div>
</div>

