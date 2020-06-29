<?php
class Boursiers extends Etudiants{
    private $bourse;
    private $numChambre;
    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }
    //Redefinition
    public  function hydrate($row){
        $this->bourse = $row['bourse'];
    }
    //Methodes
        //Getters
        public function getBourse(){
            return $this->bourse;
        }
        public function getNumChambre(){
            return $this->numChambre;
        }
        //Setters
    
        public function setBourse($bourse){
            $this->bourse=$bourse;
        }

       public function setNumChambre($numChambre){
        $this->numChambre=$numChambre;
       }    
}