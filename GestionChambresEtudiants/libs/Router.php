<?php

use function PHPSTORM_META\type;

class Router{
    
 private $ctrl;
 //Url => index.php?url=security/index
 //Reecrire URL =>security/index
    function route(){

        try{
            spl_autoload_register(function($class){
                $pathModels="./models/".$class.".php";
                $pathDao="./dao/".$class.".php";
                $pathLibs="./libs/".$class.".php";
                if(file_exists($pathModels)){
                    require_once( $pathModels);
                }elseif(file_exists($pathDao)){
                    require_once($pathDao); 
                }elseif(file_exists( $pathLibs)){
                 require_once( $pathLibs); 
             }     
             });


             if(isset($_GET['url'])){
                $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                  //Classe Controller
                //   $ctrl= "SecurityController";
                //   $pathCtrl="./controllers/".$Ctrl.".php";

                $ctrlFile = ucfirst(strtolower($url[0]))."Ctrl";
                $pathCtrl = "./controllers/{$ctrlFile}.php";
                    if(file_exists($pathCtrl)){
                        require_once($pathCtrl);
                        //Instancier un Objet Controller
                        $this->ctrl = new $ctrlFile();
                        $action=$url[1];
                        if(method_exists($this->ctrl, $action)){
                          //Action Existe dans le Controller
                           $this->ctrl->{$action}();
                        }else{
                         //Action n'Existe pas dans le Controller
                          $pathCtrl="./controllers/ErreurController.php";
                          require_once($pathCtrl);
                          $erreurCtrl=new ErreurController();
                          $erreurCtrl->showError("Cette Methode   n'existe Pas");
                        }
                        
                    }else{
                        $pathCtrl="./controllers/ErreurController.php";
                        require_once($pathCtrl);
                        $erreurCtrl=new ErreurController();
                        $erreurCtrl->showError("Ce controller n'existe Pas");
                    }
             }else{
                $pathCtrl="./controllers/EtudiantCtrl.php";
                require_once($pathCtrl);
                $this->ctrl=new EtudiantCtrl();
                $this->ctrl->index();
             }
             
        }catch(Exception $ex){

        }

        /*if (isset($action)) {
            if($action==="CreerChambre"){
                if (isset($_POST['creerchambre'])) {
                    $menager = new ChambresDao();
                    $data = ['numChambre'=> $_POST['numBatiment'].'-0002', 'typeChambre'=> $_POST['typeChambre'], 'numBatiment'=>$_POST['numBatiment']];
                    $chambre = new Chambres($data);
                    $menager->add($chambre);
                }
    
            }
        }else{
            if (isset($_POST['creerEtud'])) {
                $matricule = "";
                $adresse = null;
                $bourse = null;
                $numChambre = null;
                if ($_POST['type'] === 'NonBoursier') {
                    if (isset($_POST['adresse'])) {
                        $adresse = $_POST['adresse'];
                    }
                    $data = ['matricule'=> $matricule,
                             'prenom'=> $_POST['prenom'], 
                             'nom'=> $_POST['nom'], 
                             'email'=> $_POST['email'], 
                             'date'=> $_POST['date'], 
                             'tel'=> $_POST['tel'], 
                             'type'=> $_POST['type'], 
                             'bourse'=> $bourse,
                             'adresse'=> $adresse,
                             'numChambre'=> $numChambre];
                    $etudiant = new NonBoursiers($data);
                }
                else {
                    if(isset($_POST['bourse'])){
                        $bourse = $_POST['bourse'];
                        if ($_POST['type'] === 'Boursier_Logé') {
                            $numChambre = $_POST['numChambre'];
                        }
                    }
                    $data = ['matricule'=> $matricule,
                             'prenom'=> $_POST['prenom'], 
                             'nom'=> $_POST['nom'], 
                             'email'=> $_POST['email'], 
                             'date'=> $_POST['date'], 
                             'tel'=> $_POST['tel'], 
                             'type'=> $_POST['type'], 
                             'bourse'=> $bourse,
                             'adresse'=> $adresse,
                             'numChambre'=> $numChambre];
                    $etudiant = new Boursiers($data);
                }
                $menager = new EtudiantDao($etudiant);
            }
        }*/
        
       
    }
}