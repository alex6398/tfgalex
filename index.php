<?php
 include_once 'init.php';

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
        <div id="contenido_cabecera" >
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
                <?php
                }else{
                    $user_id = $_SESSION['id'];
                    $user = $usuario->userData($user_id);
                ?>
                <!--usuariologin-->
                <div class="d-none d-lg-flex" style="position:relative; z-index:1;">
                    <div class="dropdown" >
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" >
                            <?php echo $user->nombre; ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                            <li><a class="dropdown-item" href="./pedidos.php">Mis pedidos</a></li>
                            <li><a class="dropdown-item" href="./config/logout.php">Cerrar_session</a></li>
                        </ul>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="d-none d-lg-flex" id="carrito">
                    <button type="button" class="btn btn-outline-primary" onclick="location.href='./carrito.php'"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="count">
                            <?php 
                          if(isset($_SESSION['carrito'])){
                            echo count($_SESSION['carrito']);
                          }else{ 
                            echo 0;
                          }
                        ?>
                        </span></button>
                </div>
            </div>
        </div>
        <!--nav-->

    </header>
    <div class="sticky-top" style="background: linear-gradient(#007bff, #004982);">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button type="button" class="btn btn-outline-primary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#busqueda" aria-controls="busqueda"><i class="fa fa-search" aria-hidden="true"></i></button>

                <button type="button" class="btn btn-outline-primary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#usuario" aria-controls="usuario"><i class="fa fa-user" aria-hidden="true"></i></button>

                <button type="button" class="btn btn-outline-primary navbar-toggler" onclick="location.href='./carrito.php'"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="count">
                            <?php 
                          if(isset($_SESSION['carrito'])){
                            echo count($_SESSION['carrito']);
                          }else{ 
                            echo 0;
                          }
                        ?>
                        </span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Armas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./libs/php/fusiles.php">Fusiles</a></li>
                                <li><a class="dropdown-item" href="./libs/php/escopetas.php">Escopetas</a></li>
                                <li><a class="dropdown-item" href="./libs/php/ametralladoras.php">Ametralladoras</a></li>
                                <li><a class="dropdown-item" href="./libs/php/pistolas.php">Pistolas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Accesorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./libs/php/culatas.php">Culatas</a></li>
                                <li><a class="dropdown-item" href="./libs/php/silenciadores.php">Silenciadores</a></li>
                                <li><a class="dropdown-item" href="./libs/php/visores.php">Visores</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Equipamiento
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./libs/php/cascos.php">Cascos</a></li>
                                <li><a class="dropdown-item" href="./libs/php/chalecos.php">Chalecos</a></li>
                                <li><a class="dropdown-item" href="./libs/php/mochilas.php">Mochilas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Consumibles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./libs/php/baterias.php">Baterias</a></li>
                                <li><a class="dropdown-item" href="./libs/php/bolas.php">Bolas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--BUSQUEDA toggle-->
                <div class="collapse navbar-collapse" id="busqueda">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-md-none">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                busqueda
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="d-flex justify-content-center">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" size="40" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                                    </form>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--Usuario toggle-->
                <div class="collapse navbar-collapse" id="usuario">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-md-none">
                            <?php
                                if(!isset($_SESSION['id'])){
                            ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./registro.php">Registro</a></li>
                                <li><a class="dropdown-item" href="./login.php">Iniciar sesión</a></li>
                            </ul>
                            <?php
                            }else{
                                $user_id = $_SESSION['id'];
                                $user = $usuario->userData($user_id);
                            ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $user->nombre; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./pedidos.php">Mis Pedidos</a></li>
                                <li><a class="dropdown-item" href="./config/logout.php">Cerrar sesion</a></li>
                            </ul>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                
                
                
            </div>
        </nav>

    </div>
    <div id="contenido" class="container">
        <!--CARRUSEL-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/carrusel/cartel1.jpg" alt="cartel1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/carrusel/cartel2.jpg" alt="cartel2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/carrusel/cartel3.jpg" alt="cartel3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--SLIDER CLIENTES-->
        <h2>Distribuidoras</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="./images/marcas/classic_army.jpg"></div>
            <div class="slide"><img src="./images/marcas/duel_code.jpg"></div>
            <div class="slide"><img src="./images/marcas/krytac.jpg"></div>
            <div class="slide"><img src="./images/marcas/secutor.jpg"></div>
            <div class="slide"><img src="./images/marcas/specna_arms.jpg"></div>
            <div class="slide"><img src="./images/marcas/tokyo_marui.jpg"></div>
            <div class="slide"><img src="./images/marcas/vega_force.jpg"></div>

        </section>

    </div>
    <?php
// footer HTML and JavaScript codes
include 'layout/layout_footer.php';
?>
