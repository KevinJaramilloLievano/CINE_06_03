<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Peliculas test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="stylecard.css" rel="stylesheet">
    <link href="icon.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" charset="utf-8"></script>

</head>

<header>
    <nav
        class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center align-items-center flex-column a">
        <ul class="nav">
            <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg> Home</a>

            <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="peliculas.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-film"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                </svg>Peliculas </a>

            <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="actores.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-person-video2" viewBox="0 0 16 16">
                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    <path
                        d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z" />
                </svg>Actores </a>

            <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="directores.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    <path
                        d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z" />
                </svg>Directores </a>

            <a class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center" href="acerca.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd"
                        d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                </svg>Acerca </a>

            <form action="" method="post"><button type="submit" name="close" id="close" class="btn btn-outline-dark m-2 d-flex justify-content-center align-items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>Exit </button></form>
        </ul>
    </nav>
</header>

<body>
    <?php  
    //echo"<script>alert('".$_SESSION['usuario']."');</script>";
    include("seguridad.php");
      if(isset($_POST['close'])){
            include("cerrarSesion.php");
    }  
  ?>
    <div class="separar d-flex justify-content-center align-items-center flex-column a mt-3">
        <h2> Calidad de Software 06_03 </h2>
    </div>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>
    <section>
        <div class="container d-flex justify-content-center align-items-center mt-3 ">
            <div class="row">
                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/KevinJaramillo.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/KevinJaramilloLievano " target="_blank"
                                        class="icon-github texto">

                                    </a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Kevin E. Jaramillo Lievano</span>
                                    <span class="rol"> Scrum Master </span>
                                    <span class="rol"> Director de proyecto. </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <div class="separar d-flex justify-content-center align-items-center flex-column a mt-3">
        <h2> ÁREA : FRONTEND </h2>
    </div>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/gustavo.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Gustavo-Angel-Guevara " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Gustavo A. Guevara Alba</span>
                                    <span class="rol"> Crear lista directores </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/KevinYoab.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/YoabUPP " target="_blank" class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Kevin Y. Lopez Dominguez</span>
                                    <span class="rol"> Página Error 404 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/JaredPerez.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/JaredPV" target="_blank" class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Jared Perez Vazquez </span>
                                    <span class="rol"> Creación formularios Actores </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/LeylaniSantillan.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Ley19 " target="_blank" class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Leylani Santillan Calvillo</span>
                                    <span class="rol"> Modificación reportes PDF </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>
    <div class="separar d-flex justify-content-center align-items-center flex-column a mt-3">
        <h2> ÁREA : BACKEND </h2>
    </div>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/JoseCanales.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/JoseckGD " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Jose E. Canales Ensastiga</span>
                                    <span class="rol"> Formulario Inicio de Sesión </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/ArathDiaz.jpg.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Arath-ops " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Gael Arath Diaz Lugo</span>
                                    <span class="rol"> Generación de reportes actores </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/KevinSantos.JPG">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/kevinsantosroldan " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Kevin M. Estrada Santos </span>
                                    <span class="rol"> Generación de boletos </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/Armando.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/MTKArmandoGP " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Jose A. Garcia Paredes</span>
                                    <span class="rol"> Funcionalidades CRUD </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/LuisLatorre.png.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/luislatorre365 " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Luis Latorre Villeda</span>
                                    <span class="rol"> Crear PDF actores</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/DanielManzano.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Daniel-a11 " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Daniel A. Manzano Tello</span>
                                    <span class="rol"> Funcionalidad apartado actores </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>
    <div class="separar d-flex justify-content-center align-items-center flex-column a mt-3">
        <h2> ÁREA : BASE DE DATOS</h2>
    </div>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/AntonioMedina.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/AntonioMedMor " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Antonio Medina Moreno</span>
                                    <span class="rol"> Fechas para carteleras </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/Rafael Monrroy Aguilar.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Rafaelmag3" target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Rafael Monrroy Aguilar</span>
                                    <span class="rol"> Editar y actualizar datos en actores</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/JustinVazquez.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/JustinAldair " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Justin Vazquez Luna </span>
                                    <span class="rol"> Modificaciones a lista de peliculas </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>
    <div class="separar d-flex justify-content-center align-items-center flex-column a mt-3">
        <h2> ÁREA : VALIDACIONES </h2>
    </div>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/UrielGranados.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Urielggsent " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Ivan U. Jimenez Granados</span>
                                    <span class="rol"> Apartado peliculas inhabilitadas </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/efren.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/EfrenOR " target="_blank" class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Efren Ortega Reyes</span>
                                    <span class="rol">Validaciones en formularios. </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/Mauricio Rios.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/mauricio-rios " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Mauricio Rios Reina</span>
                                    <span class="rol"> Apartado actores inhabilitados </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <div class="separar d-flex justify-content-center align-items-center flex-column a mt-3">
        <h2> ÁREA : DISEÑO UI/UX </h2>
    </div>
    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col mt-3">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/Luis-amador.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/LAG17-xd " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Luis Amador Guzman</span>
                                    <span class="rol"> Diseño formulario Actores </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/Omar Germán.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/OMARG-GIT " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Omar A. German Ortega</span>
                                    <span class="rol"> Diseño formularios agregar y editar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-3">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/Otli Hernandez.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/OTLI" target="_blank" class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Otli Z. Hernandez Muños</span>
                                    <span class="rol"> Diseño al formulario Login </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/EnriqueLabra.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Enriquekill " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Enrique Labra Chavez</span>
                                    <span class="rol"> Diseño interfaz en página directores </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/FabiolaLopez.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/Fabiola2k2 " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Fabiola Lopez Fragoso</span>
                                    <span class="rol"> Diseño en detalles de peliculas </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/JonathanNicolas.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/JonathanNic " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Jonathan Nicolas Aguilar</span>
                                    <span class="rol"> Diseño interfaz directores</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col d-flex justify-content-center align-items-center  mt-5">
                    <div class="seccion">
                        <div class="card glass">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/crespo.jpeg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/chems-debug " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Angel Rodriguez Crespo</span>
                                    <span class="rol"> Diseño ágina Index y "Acerca de"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col d-flex justify-content-center align-items-center  mt-5">
                    <div class="seccion">
                        <div class="card ">
                            <div class="card-content">
                                <div class="imagen">
                                    <img src="fotos/JoseSaldaña.jpg">
                                </div>
                                <div class="media-icons">
                                    <a href="https://github.com/JoseEmmaSS " target="_blank"
                                        class="icon-github texto"></a>
                                </div>
                                <div class="nombre-rol">
                                    <span class="nombre"> Jose E. Saldaña Solis</span>
                                    <span class="rol"> Diseño UX/UI </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="borde d-flex justify-content-center align-items-center flex-column a mt-3"> </div>

</body>

</html>