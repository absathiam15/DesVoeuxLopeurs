<?php
class Boursiers extends Etudiants{
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
        $this->bourse = $row['bourse'];
        $this->numChambre = $row['numChambre'];
        $this->adresse = "";
    }
           
}