<?php  
include_once './init.php';



if(isset($_GET['action'])){
    if($_GET['action'] == "limpiar"){
        unset($_SESSION['carrito']);
        header ('Location: ./index.php');
    }
    if($_GET['action'] == "remove"){
        foreach($_SESSION['carrito'] as $key => $value){
            if($value['id'] == $_GET['id']){
                unset($_SESSION['carrito'][$key]);
                header ('Location: ./index.php');
            }
        }
    }
}


?>