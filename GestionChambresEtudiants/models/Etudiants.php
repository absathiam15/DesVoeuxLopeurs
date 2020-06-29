<?php
class Etudiants implements IGestion {
    //Attributs
       //Encapsulation
        protected  $matricule;
        protected  $nom;
        protected  $prenom;
        protected  $type;
        protected  $email;
        protected  $tel;
        protected  $date_naiss;
        protected $bourse;
        protected $numChambre;
        protected $adresse;
// public abstract  function hydrate($row);
  
     public   function __construct($row=null){
         if($row!=null){
             $this->hydrate($row);
         }

     }
    
     public  function hydrate($row){
        $this->matricule=$row['matricule']; 
        $this->nom=$row['nom']; 
        $this->prenom=$row['prenom']; 
        $this->email = $row['email'];
        $this->type = $row['type'];
        $this->tel = $row['tel'];
        $this->date_naiss = $row['date'];
     }
      //Methodes
        //Getters
        public function getMatricule(){
            return $this->matricule;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }

        public function getType(){
            return $this->type;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTel(){
            return $this->tel;
        }

        public function getDate(){
            return $this->date_naiss;
        }

        public function getBourse(){
            return $this->bourse;
        }
        public function getNumChambre(){
            return $this->numChambre;
        }
        public function getAdresse(){
            return $this->adresse;
        }

        //Setters
    
        public function setMatricule($matricule){

        }
        public function setNom($nom){
             $this->nom=$nom;
        }
        public function setPrenom($prenom){
            $this->prenom=$prenom;
        }

        public function setType($type){
            $this->type=$type;
        }

        public function setEmail($email){
             $this->email=$email;
        }

        public function setTel($tel){
           $this->tel=$tel;
        }

        public function setDate($date_naiss){
            $this->date_naiss=$date_naiss;
        }
        public function setAdresse($adresse){
            $this->adresse=$adresse;
        }
        public function setBourse($bourse){
            $this->bourse=$bourse;
        }

       public function setNumChambre($numChambre){
        $this->numChambre=$numChambre;
       } 
}