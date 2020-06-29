<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Allocation de Chambre d'etudiants</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?=BASE_URL?>/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center zone-head">BIENVENUE DANS LA PLATEFORME <br> DE GESTION DES CHAMBRES DES ETUDIANTS</div>
                <div class="row form-group zone-menu">    
                    <nav class="nav nav-pills nav-fill">
                        <a class="nav-link ml-5 active nav-item" href="<?=BASE_URL?>">ENREGISTRER ETUDIANT</a>
                        <a class="nav-link ml-5 nav-item" href="<?=BASE_URL?>/CreerChambre">ENREGISTRER CHAMBRES</a>
                        <a class="nav-link ml-5 nav-item" href="<?=BASE_URL?>/listeEtudiant">LISTE ETUDIANTS</a>
                        <a class="nav-link ml-5 nav-item" href="<?=BASE_URL?>/listeChambre">LISTE CHAMBRES</a>
                    </nav>
                </div>
            </div>   
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
                            <label class="text-label">Type</label>
                            <select name="type" id="type" class="text-dark">
                                <option value="">Choisissez un type</option>
                                <option value="Boursier_Logé">Boursier Logé</option>
                                <option value="Boursier_NonLogé">Boursier NonLogé</option>
                                <option value="NonBoursier">NonBoursier</option>
                            </select>
                            <button id="ajout" name="ajout" type="button">OK</button><br>
                            <small class="text-info " id="error-type"></small>
                        </div>
                        <div class="form-group text-right input-inscript" id="formulaire" >
                        </div>
                        <div class="form-group text-right input-inscript-bourse">
                            <?php 
                                require_once("getNum.php");
                                $num = new getNum();
                                $num->getnumChambre();
                            ?>
                        </div>
                        <button class="boutton" name="creerEtud" type="submit">ENREGISTRER</button>
                    </div>  
                </form>
            </div>
                

        <script src="https://code.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapc/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?=BASE_URL?>/public/js/jquery.js"></script>
        <script src="<?=BASE_URL?>/public/js/script.js"></script>
    </body>
</html>
