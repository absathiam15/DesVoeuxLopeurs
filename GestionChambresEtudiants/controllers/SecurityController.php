<?php
class SecurityController extends Controller{

    public function index(){
        $this->view="enregistrerEtud";
         $this->render();
    }
   public function CreerChambre(){
      $this->view="enregistrerCha";
      $this->render();
   }
   public function listeEtudiant(){
      $this->view="listeEtud";
      $this->render();
   }
   public function listeChambre(){
      $this->view="listeCha";
      $this->render();
   }

}