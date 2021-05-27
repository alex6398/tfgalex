<?php
class pedidos{
    
    protected $pdo;
    protected $id;
    protected $datos=array();
    
    function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function registro($nombre,$apellidos,$correo,$contrasena,$direccion,$dni,$pais,$ciudad,$telefono, $codigo_postal){
            $stmt = $this->pdo->prepare("INSERT INTO `usuario`( `nombre`, `apellidos`, `correo`, `contrasena`, `conf_contrasena`, `direccion`, `dni`, `pais`, `ciudad`, `telefono`, `codigo_postal`) VALUES (:nombre,  :apellidos, :correo, :contrasena, :direccion, :dni, :pais, :ciudad, :telefono, :codigo_postal)");
            
            $stmt->bindParam(":nombre",$nombre, PDO::PARAM_STR);
            $stmt->bindParam(":apellidos",$apellidos, PDO::PARAM_STR);
            $stmt->bindParam(":correo",$correo, PDO::PARAM_STR);
            $stmt->bindParam(":contrasena",md5($contrasena), PDO::PARAM_STR);
            $stmt->bindParam(":direccion",$direccion, PDO::PARAM_STR);
            $stmt->bindParam(":dni",$dni, PDO::PARAM_STR);
            $stmt->bindParam(":pais",$pais, PDO::PARAM_STR);
            $stmt->bindParam(":ciudad",$ciudad, PDO::PARAM_STR);
            $stmt->bindParam(":telefono",$telefono, PDO::PARAM_STR);
            $stmt->bindParam(":codigo_postal",$codigo_postal, PDO::PARAM_STR);
            
            $stmt->execute();

            $user_id = $this->pdo->lastInsertId();
            $_SESSION['id'] = $user_id;
        }
}