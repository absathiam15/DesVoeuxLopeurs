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
                  $ctrl= "SecurityController";
                  $pathCtrl="./controllers/".$ctrl.".php";
                    if(file_exists($pathCtrl)){
                        require_once($pathCtrl);
                        //Instancier un Objet Controller
                        $this->ctrl=new $ctrl();
                        $action=$url[0];
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
                $pathCtrl="./controllers/SecurityController.php";
                require_once($pathCtrl);
                $this->ctrl=new SecurityController();
                $this->ctrl->index();
             }
             
        }catch(Exception $ex){

        }

        if (isset($action)) {
            if($action==="CreerChambre"){
                if (isset($_POST['creerchambre'])) {
                    $menager = new ChambresDao();
                    $count = $menager->count();
                    if(($count+1) <10){
                        $num = "000".($count+1);
                    }else{
                        if (($count+1) < 100) {
                            $num = "00".($count+1);
                        }
                        else {
                            if (($count+1) < 1000) {
                                $num = "0".($count+1);
                            }
                            else {
                                $num = ($count+1);
                            }
                        }
                    }
                    $data = ['numChambre'=> $_POST['numBatiment']."-".$num, 'typeChambre'=> $_POST['typeChambre'], 'numBatiment'=>$_POST['numBatiment']];
                    $chambre = new Chambres($data);
                    $menager->add($chambre);
                }
    
            }
        }else{
            if (isset($_POST['creerEtud'])) {
                $menager = new EtudiantsDao("EtudiantsDao");
                    $count = $menager->count();
                    if(($count+1) <10){
                        $num = "000".($count+1);
                    }else{
                        if (($count+1) < 100) {
                            $num = "00".($count+1);
                        }
                        else {
                            if (($count+1) < 1000) {
                                $num = "0".($count+1);
                            }
                            else {
                                $num = ($count+1);
                            }
                        }
                    }
                $matricule = "2020".$_POST['nom'][0].$_POST['nom'][1].$_POST['prenom'][strlen($_POST['prenom'])-3].$_POST['prenom'][strlen($_POST['prenom'])-2].$num;
                $matricule = strtoupper($matricule);
                $adresse = "";
                $bourse = "";
                $numChambre = "";
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
                    $table = "NonBoursiers";
                }
                else {
                    if(isset($_POST['bourse'])){
                        $bourse = $_POST['bourse'];
                        if ($_POST['type'] === 'Boursier_Logé') {
                            if (isset($_POST['numChambre'])) {
                                $numChambre = $_POST['numChambre'];
                            }
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
                    $table = "Boursiers";
                }
                $Etud = new EtudiantsDao($table);
                $Etud->add($etudiant);
            }
        }
        
       
    }
}