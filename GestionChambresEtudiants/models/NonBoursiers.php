<?php
class NonBoursiers extends Etudiants{
   private $adresse;
   //Propriete de Navigation
   //OneTomany

   public function __construct($row=null){
       if($row!=null){
           $this->hydrate($row);
       }
   }
   //Redefinition
   public  function hydrate($row){
        $this->matricule=$row['matricule']; 
        $this->nom=$row['nom']; 
        $this->prenom=$row['prenom']; 
        $this->email = $row['email'];
        $this->type = $row['type'];
        $this->tel = $row['tel'];
        $this->date_naiss = $row['date'];
        $this->adresse = $row['adresse'];
   }
   public function getAdresse(){
       return $this->adresse;
   }

   public function setAdresse($adresse){
       $this->adresse=$adresse;
   }

}