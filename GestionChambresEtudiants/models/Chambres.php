<?php
class Chambres implements IGestion{
    //Attributs
       //Encapsulation
       protected  $numChambre; 
       protected  $numBatiment;
       protected  $typeChambre;

// public abstract  function hydrate($row);
    public function  __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }
   //Redefinir la methode hydrate
   public function hydrate($row){
       $this->numChambre=$row['num_chambre'];
       $this->numBatiment=$row['num_batiment'];
       $this->typeChambre=$row['type'];
   }
   //Methodes
        //Getters
        public function getNumChambre(){
            return $this->numChambre;
        }
        public function getNumBatiment(){
            return $this->numBatiment;
        }
        public function getTypeChambre(){
            return $this->typeChambre;
        }
        //Setters
    
        public function setNumChambre($numChambre){

        }
        public function setNumBatiment($numBatiment){

        }
        public function setTypeChambre($typeChambre){
            $this->typeChambre=$typeChambre;
        }

}