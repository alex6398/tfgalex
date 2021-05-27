<?php

/*
    if(!isset($_SESSION['id'])){
        
    }else{
    $user_id = $_SESSION['id'];
    $user = $getFromU->userData($user_id);
    }
    */
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css' />



    <link rel="icon" type="image/png" href="./images/logo/logo2.png" />
    <link rel="stylesheet" href="./libs/css/sliderclientes.css" />
    <link rel="stylesheet" href="./libs/css/estilos.css" />
    <title>TACTICAL AIRSOFT</title>


</head>

<body>
    <header>
        <!--cabecera-->
        <div id="contenido_cabecera">
            <div id="cabecera" class="d-flex flex-wrap justify-content-around align-items-center">
                <!--logo-->
                <div>
                    <a href="./index.php"><img src="./images/logo/logo2.png" alt="logo" width="200" height="100%"></a>
                </div>
                <!--busqueda-->
                <div class="d-none d-lg-flex " id="busqueda">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" size="40" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary " type="submit">Buscar</button>
                    </form>

                </div>
                <?php
                
                
                if(!isset($_SESSION['id'])){
                ?>
                <!--registro/inicio-->
                <div class="d-none d-lg-flex">
                    <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='./registro.php'">Registro</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href='./login.php'">Inicio</button>
                </div>
                <div class="d-none d-lg-flex" id="carrito">
                    <button type="button" class="btn btn-outline-primary" href="../login.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </div>
                <?php
                }else{
                    $user_id = $_SESSION['id'];
                    $user = $usuario->userData($user_id);
                ?>
                <!--usuariologin-->
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $user->nombre; ?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="../config/logout.php">Cerrar_session</a></li>
                    </ul>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
        <!--nav-->

    </header>
    <?php

    ?>
