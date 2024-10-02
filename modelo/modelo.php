<?php

class TaskModel {
    private $db;

    public function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=autosss;charset=utf8', 'root', '');
    }
 
    public function getTasks() {
      
        $query = $this->db->prepare('SELECT * FROM autos');
        $query->execute();
    
        
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); 
    
        return $tasks;
    }
    /*
    public function getAutosConMarcas() {
       
        $query = $this->db->prepare('SELECT autos.*, marcas.id AS marca_id, marcas.marca AS marca 
                                       FROM autos 
                                       JOIN marcas ON autos.marca_id = marcas.id');
        $query->execute();
    
       
        $Marcas = $query->fetchAll(PDO::FETCH_OBJ);
    
       
        var_dump($Marcas); 
    
        return $Marcas;
    }
    */
    
    
}


?>