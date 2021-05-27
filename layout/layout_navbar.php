<div class="sticky-top" style="background: linear-gradient(#007bff, #004982); ">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <button type="button" class="btn btn-outline-primary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#busqueda" aria-controls="busqueda"><i class="fa fa-search" aria-hidden="true"></i></button>
                
                <button type="button" class="btn btn-outline-primary navbar-toggler" data-bs-toggle="collapse" data-bs-target="#registro" aria-controls="registro" ><i class="fa fa-user" aria-hidden="true"></i></button>
                
                <button type="button" class="btn btn-outline-primary navbar-toggler" onclick="location.href='./php/inicio_sesion.php'"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                
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
                                <li><a class="dropdown-item" href="#">Fusiles</a></li>
                                <li><a class="dropdown-item" href="#">Escopetas</a></li>
                                <li><a class="dropdown-item" href="#">Ametralladoras</a></li>
                                <li><a class="dropdown-item" href="#">Pistolas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Accesorios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Culatas</a></li>
                                <li><a class="dropdown-item" href="#">Silenciadores</a></li>
                                <li><a class="dropdown-item" href="#">Visores</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Equipamiento
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cascos</a></li>
                                <li><a class="dropdown-item" href="#">Chalecos</a></li>
                                <li><a class="dropdown-item" href="#">Mochilas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Consumibles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Baterias</a></li>
                                <li><a class="dropdown-item" href="#">Bolas</a></li>
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
                                    <button type="button" class="btn btn-outline-primary" onclick="location.href='../registro.php'">Registro</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="location.href='../login.php'">Inicio</button>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>