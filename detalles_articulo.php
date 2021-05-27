<?php
include_once './init.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $articulos= new Articulos($pdo);
    $detalles= $articulos->getdatos($id);
    
}else{
    header("Location: ./index.php");
}

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
    <link rel="stylesheet" href="./libs/css/estilos.css" />
    <title>TACTICAL AIRSOFT</title>
    <style>
        .altura_texto {
            height: 48px !important;
        }

    </style>

</head>

<body>
    <header>
        <!--cabecera-->
        <div id="contenido_cabecera">
            <div id="cabecera" class="d-flex flex-wrap justify-content-around align-items-center">
                <!--logo-->
                <div>
                    <a href="../../index.php"><img src="./images/logo/logo2.png" alt="logo" width="200" height="100%"></a>
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
                    <button type="button" class="btn btn-outline-primary" href="./login.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
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
                        <li><a class="dropdown-item" href="../../config/logout.php">Cerrar_session</a></li>
                    </ul>
                </div>
                <div class="d-none d-lg-flex" id="carrito">
                    <button type="button" class="btn btn-outline-primary" href="./login.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
        <!--nav-->

    </header>
    <div class="sticky-top" style="background: linear-gradient(#007bff, #004982); ">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button type="button" class="btn btn-outline-primary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#busqueda" aria-controls="busqueda"><i class="fa fa-search" aria-hidden="true"></i></button>

                <button type="button" class="btn btn-outline-primary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#registro" aria-controls="registro"><i class="fa fa-user" aria-hidden="true"></i></button>

                <button type="button" class="btn btn-outline-primary navbar-toggler" onclick="location.href='./php/inicio_sesion.php'"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
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
                <!--REGISTRO toggle-->
                <div class="collapse navbar-collapse" id="registro">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown d-md-none">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                usuario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="d-flex justify-content-center">
                                    <?php
                                        if(!isset($_SESSION['id'])){
                                    ?>
                                    <button type="button" class="btn btn-outline-primary" onclick="location.href='./registro.php'">Registro</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="location.href='./login.php'">Inicio</button>
                                    <?php
                                    }else{
                                        $user_id = $_SESSION['id'];
                                        $user = $usuario->userData($user_id);
                                    ?>
                                    <!--usuariologin-->
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo $user->nombre; ?>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="./config/logout.php">Cerrar_session</a></li>
                                        </ul>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div id="contenido" class="container">
        <div class="row">
            <?php foreach($detalles as $detalle){?>
            
            <div class="col-md-6">
                <img src="./images/assets/<?php echo $detalle['imagen'].".jpg";?>" alt="<?php echo $detalle['imagen'].".jpg";?>" class="img-fluid">
            </div>
            <div class="col-md-6 ">
                 <form method="post" action="./carrito.php?id=<?php echo $detalle['id_articulo']; ?>">
                <h2 class="text-black text-center"><?php echo $detalle['nombre'];?></h2>
                <p style="text-align: justify;"><b>Peso:</b> <?php echo $detalle['peso']." kg";?></p>
                <p style="text-align: justify;"><b>Material:</b> <?php echo $detalle['material'];?></p>
                <p style="text-align: justify;"><b>Descripcion:</b> <?php echo $detalle['descripcion'];?></p>
                <p><strong class="text-primary h4"><?php echo $detalle['precio']; ?>€</strong></p>
                <input type="hidden" name="nombre" value="<?php echo $detalle['nombre']; ?>"/>
                <input type="hidden" name="precio" value="<?php echo $detalle['precio']; ?>"/>
                <input type="hidden" name="imagen" value="<?php echo $detalle['imagen']; ?>"/>
                <input type="hidden" name="limite_cantidad" value="<?php echo $detalle['cantidad']; ?>"/>
                <?php if($detalle['cantidad'] <=10){
                    echo "<p style='color:red;'><b>Quedan ".$detalle['cantidad']." articulos</b></p>";
                }?>
                <input type="number" name="cantidad" value="1" class="form-control text-center" min="0" max="<?php echo $detalle['cantidad']; ?>"/>
                <br>
                <input type="submit" name="add_cart" class="buy-now btn btn-sm btn-primary" value="Añadir al carro"/>
                </form>
            </div>
            
            <?php 
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class=" text-center text-white" style="background-color: #121212;">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row justify-content-center">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
                        <h5 class="text-uppercase">Productos</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Armas</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Accesorios</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">equipamiento</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">consumibles</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Su cuenta</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contacto</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <p class="text-white">Tactical Airsoft</p>
                            </li>
                            <li>
                                <p class="text-white">Telefono: <b>635730289</b></p>
                            </li>
                            <li>
                                <p class="text-white">Email <b>tacticalairsoft@hotmail.es</b></p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright

        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
