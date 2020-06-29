<?php
class Etudiants implements IGestion {
    //Attributs
       //Encapsulation
        protected  $matricule;
        protected  $nom;
        protected  $prenom;
        protected  $email;
        protected  $tel;
        protected  $date_naiss;
        protected  $adresse;
        protected  $type;
        protected  $num_chambre;
        protected  $bourse;

    public function  __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }
   //Redefinir la methode hydrate
   public function hydrate($row){
       $this->matricule=$row['matricule'];
       $this->prenom=$row['prenom'];
       $this->nom=$row['nom'];
       $this->email=$row['email'];
       $this->tel=$row['tel'];
       $this->date_naiss=$row['date_naiss'];
       $this->adresse=$row['adresse'];
       $this->type=$row['type'];
       $this->num_chambre=$row['num_chambre'];
       $this->bourse=$row['bourse'];
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
            return $this->num_chambre;
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

        public function setBourse(){
            $this->bourse=$bourse;
        }

        public function setNumChambre(){
            $this->num_chambre=$num_chambre;
        }

}