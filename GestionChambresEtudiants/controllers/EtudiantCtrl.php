<?php

class EtudiantCtrl extends Controller {

    public function __construct(){
        $this->layout = "default";
        $this->folder = "etudiant";
        $this->dao = new EtudiantsDao();
    }

    public function index(){
        $this->view="enregistrerEtud";
        $this->render();
    }
     
    public function listeEtudiant(){
        $this->data_view = ["etudiant" => $this->dao->findAll()];
        $this->view = "listeEtud";
        $this->render();
    }
}