<?php
class ChambresDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambres";
    }
    public function add($obj){
        $numChambre = $obj->getNumChambre();
        $numBatiment = $obj->getNumBatiment();
        $type = $obj->getTypeChambre();
        $sql="INSERT INTO $this->tableName(`num_chambre`,`num_batiment`,`type`) VALUES(?,?,?)";
        $this->addChambre($sql,$numChambre,$numBatiment,$type);
    }
    public function update($obj){

    }
    
    public function findByNum($num){
        $sql="select * from $this->tableName where num_chambre='$num'";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }
    public function findNum(){
        $sql="select num_chambre from $this->tableName";
        $data=$this->executeSelectNum($sql);
        return $data;
    }
    public function findNumBatiment(){
        $sql="select num_batiment from batiment";
        $data=$this->executeSelectNum($sql);
        return $data;
    }
    public function delete($num){
        $sql="delete from $this->tableName where num_chambre=$num";
        return $this->executeUpdate($sql)!=0;
    }
   





}