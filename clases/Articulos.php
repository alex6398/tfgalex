<?php
class Articulos{
    
    protected $pdo;
    protected $id;
    protected $datos=array();
    
    function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function checkInput($var){
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripcslashes($var);
        return $var;
    }
    public function getdatos($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE id_articulo = ".$id."");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    
    public function getfusiles(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod1'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getescopetas(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod2'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getametralladoras(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod3'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getpistolas(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod4'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getculatas(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod5'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getsilenciadores(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod6'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getvisores(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod7'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getcascos(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod8'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getchalecos(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod9'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getmochilas(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod10'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getbaterias(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod11'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    public function getbolas(){
        $stmt = $this->pdo->prepare("SELECT * FROM `articulos` WHERE cod_subcat = 'subcod12'");

        $stmt->execute();    
        while($row=$stmt->fetch()){
            $this->datos[]=$row;
        }
        return $this->datos;
    }
    
        
}
?>