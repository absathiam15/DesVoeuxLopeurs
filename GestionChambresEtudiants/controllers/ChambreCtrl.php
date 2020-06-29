<?php

class ChambreCtrl extends Controller {

    public function __construct(){
        $this->layout = "default";
        $this->folder = "chambre";
        $this->dao = new ChambresDao();
    }
    
    public function creerChambre(){
        $this->view="enregistrerCha";
        $this->render();
    }
    
    public function listeChambre(){
        $this->data_view = ["chambres" => $this->dao->findAll()];
        $this->view="listeCha";
        $this->render();
    }

    public function saveChambre(){

        if (isset($_POST['creerchambre'])){
            extract($_POST);
            // var_dump($_POST);
            $nombre=rand(1000,9999);
            if (strlen($numBatiment)==1) {
                $numBatiment="00".$numBatiment;
            }elseif (strlen($numBatiment)==2) {
                $numBatiment="0".$numBatiment;
            }else{
                $numBatiment=$numBatiment;
            }
            $numChambre=$numBatiment."-".$nombre;
            $this->dao=new ChambresDao();
            $this->dao->add($numChambre,$numBatiment,$type);
            $this->view="enregistrer_chambre";
            $this->render();
        }
        $this->view="enregistrer_chambre";
        $this->render();

    }

}
