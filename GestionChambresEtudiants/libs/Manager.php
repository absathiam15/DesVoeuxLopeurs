<?php
abstract class Manager implements IDao{
    //Connexion est Fermée
    private $pdo=null;
    protected $tableName;
    protected $className;

  public function getConnexion(){
      //Connexion est fermée
      if($this->pdo==null){
          try{
            $this->pdo = new PDO("mysql:host=localhost; dbname=chambresetudiants","root","");
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
          }catch(PDOException $ex){
             die("Erreur de Connexion");
          }
        
      }
      
  }

 public function closeConnexion(){
      
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function addChambre($sql,$numChambre,$numBatiment,$type){
    $this->getConnexion();
        $req= $this->pdo->prepare($sql);
        $req->execute(array($numChambre,$numBatiment,$type));
        $this->closeConnexion();
  }

  public function addEtudiant($sql,$matricule,$prenom,$nom,$email,$date,$adresse,$tel,$type,$numChambre,$bourse){
        $this->getConnexion();
        $req= $this->pdo->prepare($sql);
        $req->execute(array($matricule,$prenom,$nom,$email,$tel,$date,$adresse,$type,$numChambre,$bourse));
        $this->closeConnexion();
  }
  
  public function executeUpdate($sql){
          $this->getConnexion();
           $nbreLigne= $this->pdo->exec($sql);
          $this->closeConnexion();
          return $nbreLigne;
   }

  public function executeSelect($sql){    
      $this->getConnexion();
      //Traitement
      $result=$this->pdo->query($sql);
      $data=[];
      foreach( $result as $rowBD){
        //ORM=> tuple BD transformer en Objet
        $data[]=new $this->className($rowBD);//new User($rowBD)     
      }
      $this->closeConnexion();
      return $data;

    }

  public function findAll(){
    $sql="select * from $this->tableName";
    return $this->executeSelect($sql);
  }
  public function findByMatricule($matricule){
    $sql="select * from $this->tableName where matricule=$matricule ";
    $data=$this->executeSelect($sql);
    return count($data)==1?$data[0]:$data;
  }

  public function delete($num){
    $sql="delete from $this->tableName where num_chambre=$num";
    return $this->executeUpdate($sql)!=0;
  }

}