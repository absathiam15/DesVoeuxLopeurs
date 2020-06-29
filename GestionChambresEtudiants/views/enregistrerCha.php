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
                        <a class="nav-link ml-5 nav-item" href="<?=BASE_URL?>">ENREGISTRER ETUDIANT</a>
                        <a class="nav-link ml-5 active nav-item" href="<?=BASE_URL?>/CreerChambre">ENREGISTRER CHAMBRES</a>
                        <a class="nav-link ml-5 nav-item" href="<?=BASE_URL?>/listeEtudiant">LISTE ETUDIANTS</a>
                        <a class="nav-link ml-5 nav-item" href="<?=BASE_URL?>/listeChambre">LISTE CHAMBRES</a>
                    </nav>
                </div>
            </div>
            <div class="titre2">Enregistrer les Chambres pour loger les Etudiants</div>
            <form class="needs-validation" method="POST" action="" name="form-chambre" id="form">
                <div class="card-body enregistrer-chambre">
                    <div class="enreg-chambre">
                        <label class="text-label">Batiment</label>
                        <?php 
                            require_once("getNum.php");
                            $num = new getNum();
                            $num->getnumBatiment();
                        ?>
                        <!-- <select class="text-dark mdb-select md-form" name="numBatiment" id="numBatiment">
                            <option value="48">48</option>
                            <option value="001">001</option>
                            <option value="12">12</option>
                        </select><br> -->
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



        <script src="https://code.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapc/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?=BASE_URL?>/public/js/jquery.js"></script>
        <script src="<?=BASE_URL?>/public/js/script.js"></script>
    </body>
</html>