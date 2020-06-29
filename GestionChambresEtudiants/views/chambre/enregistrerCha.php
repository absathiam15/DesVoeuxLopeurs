<div class="titre2">Enregistrer les Chambres pour loger les Etudiants</div>
<form class="needs-validation" method="POST" action="" name="form-chambre" id="form">
        <div class="card-body enregistrer-chambre">
            <div class="enreg-chambre">
                <label class="text-label">Batiment</label>
                <select class="text-dark mdb-select md-form" name="numBatiment" id="numBatiment">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br> 
                <small class="text-info" id="error-numBatiment"></small>
            </div>
            <div class="enreg-chambre">
                <label class="text-label">Type</label>
                <select name="typeChambre" class="mdb-select md-form text-dark" id="typeChambre">
                    <option value="">Choisissez un type</option>
                    <option value="individuel">individuel</option>
                    <option value="a_deux">à_deux</option>
                </select><br>
                <small class="text-info" id="error-typeChambre"></small>
            </div>
            <button class="bout" type="submit" name="creerchambre">ENREGISTRER</button>

        </div>
    </form>
</div>