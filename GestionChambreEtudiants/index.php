
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Allocation de Chambre d'etudiants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <div class="container-fluid">
        <div class="row d-flex justify-content-center zone-head">BIENVENUE DANS LA PLATEFORME <br> DE GESTION DES CHAMBRES DES ETUDIANTS</div>
        <div class="row form-group zone-menu">    
            <nav class="nav nav-pills nav-fill">
                <a class="nav-link ml-5 nav-item" href="index.php?lien=enregistrer">ENREGISTRER ETUDIANT</a>
                <a class="nav-link ml-5 nav-item" href="index.php?lien=enregistrerCha">ENREGISTRER CHAMBRES</a>
                <a class="nav-link ml-5 nav-item" href="index.php?lien=listeEtudiant">LISTE ETUDIANTS</a>
                <a class="nav-link ml-5 active nav-item" href="index.php?lien=listeCha">LISTE CHAMBRES</a>
            </nav>
        </div>
        
    </div>
     

        <?php
        if(isset($_GET['lien'])){
            if($_GET['lien'] == 'enregistrer'){
                require_once ('pages/enregistrerEtud.php');
            }
            elseif($_GET['lien'] == 'listeEtudiant'){
            require_once('pages/listeEtud.php');
            }
            elseif($_GET['lien'] == 'listeCha'){
            require_once('pages/listeCha.php');
            }
            elseif($_GET['lien'] == 'enregistrerCha'){
                require_once('pages/enregistrerCha.php');
                }
        }

        ?>


       
    </body>
    </html>


    <script src="https://code.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapc/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>