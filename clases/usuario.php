<?php
class usuario{
    
    protected $pdo;

        function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function checkInput($var){
            $var = htmlspecialchars($var);
            $var = trim($var);
            $var = stripcslashes($var);
            return $var;
        }
    
        public function login($correo, $contrasena){
            $contrasena = md5($contrasena);
            $stmt = $this->pdo->prepare("SELECT `id` FROM `usuario` WHERE `correo` = :correo AND `contrasena` = :contrasena ");
            $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
            $stmt->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            $count = $stmt->rowCount();

            if($count > 0){
                $_SESSION['id'] = $user->id;
                header('Location: ./index.php');
            }else{
                return false;
            }
        }

        public function userData($user_id){
            $stmt = $this->pdo->prepare("SELECT * FROM `usuario` WHERE `id` = :user_id");
            $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function logout(){
            $_SESSION = array();
            session_destroy();
            header('Location: ../index.php');
        }

        public function checkCorreo($correo){
            $stmt = $this->pdo->prepare("SELECT correo FROM usuario WHERE correo = :correo");
            $stmt->bindParam(":correo",$correo, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();
            if($count > 0){
                return true;
            }else{
                return false;
            }
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
        }
    
		

}
?>