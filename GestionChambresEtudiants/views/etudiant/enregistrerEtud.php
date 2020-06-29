<div class="titre">Enregistrer les Etudiants</div>
<div class="card-body enregistrer-etudiant">
<form class="needs-validation" method="POST" action="" name="form-etudiant" id="form">
    <div class="form-row d-block inscrire w-75">
        <div class="form-group text-right input-inscript"> 
            <label class="text-label">Prenom</label>
            <input type="text" name="prenom" id="prenom"><br>
            <small class="text-info" id="error-prenom"></small>
        </div>
        <div class="form-group text-right input-inscript">
            <label class="text-label">Nom</label>
            <input type="text" name="nom" id="nom"><br>
            <small class="text-info" id="error-nom"></small>
        </div>
        <div class="form-group text-right input-inscript">
            <label class="text-label">Email</label>
            <input type="email" name="email" id="email"><br>
            <small class="text-info" id="error-email"></small>
        </div>
        <div class="form-group text-right input-inscript">
            <label class="text-label ">Téléphone</label>
            <input type="number" name="tel" id="tel"><br>
            <small class="text-info" id="error-tel"></small>
        </div>
        <div class="form-group text-right input-inscript">
            <label class="text-label ">Date de Naissance</label>
            <input type="date" name="date" id="date"><br>
            <small class="text-info" id="error-date"></small>
        </div>
        <div class="form-group text-right input-inscript-bourse">
            <label class="text-label ">Type</label>
            <select name="type" id="type" class="text-dark">
                <option value="">Choisissez un type</option>
                <option value="Boursier_Logé">Boursier Logé</option>
                <option value="Boursier_NonLogé">Boursier NonLogé</option>
                <option value="NonBoursier">NonBoursier</option>
            </select><br>
            <small class="text-info " id="error-type"></small>
        </div>
        <button class="boutton" name="creerEtud" type="submit">ENREGISTRER</button>
    </div>  
</form>
</div>


