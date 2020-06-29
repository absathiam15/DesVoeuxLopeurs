<?php
class EtudiantsDao extends Manager {


    public function __construct($obj){
        $this->tableName="etudiant";
        $this->className=$obj;
    }

    public function add($obj){
        $matricule = $obj->getMatricule();
        $prenom = $obj->getPrenom();
        $nom = $obj->getNom();
        $type = $obj->getType();
        $email = $obj->getEmail();
        $tel = $obj->getTel();
        $date = $obj->getDate();
        $bourse = $obj->getBourse();
        $numChambre = $obj->getNumChambre();
        $adresse = $obj->getAdresse();
        $sql="INSERT INTO $this->tableName (`matricule`,`prenom`,`nom`, `email`,`tel`,`date_naiss`,`adresse`,`type`,`num_chambre`,`bourse`) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $this->addEtudiant($sql,$matricule,$prenom,$nom,$email,$date,$adresse,$tel,$type,$numChambre,$bourse);
    }
    public function update($obj){

    }
    public function findByMatricule($matricule){
        $sql="select * from $this->tableName where matricule=$matricule ";
        $data=$this->executeSelect($sql);
        return count($data)==1?$data[0]:$data;
    
    }
    public function delete($num){
        $sql="delete from $this->tableName where matricule=$num";
        return $this->executeUpdate($sql)!=0;
    }

}