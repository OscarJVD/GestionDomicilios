<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_TIME, 'spanish.UTF-8');
// date_default_timezone_set("America/Bogota");
// setlocale(LC_TIME, "es_CO");
// // Unix
// setlocale(LC_TIME, 'es_ES.UTF-8');
// // En windows
// setlocale(LC_TIME, 'spanish');
// setlocale(LC_TIME, 'es_ES', 'esp_esp');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" lang="es" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="Author" lang="es" content="Óscar Javier Vargas Diaz, oscarjaviervargas@hotmail.com">
    <meta name="DC.identifier" lang="es" content="">
    <!--Aqui va la pagina SOLUMOBIL.............................-->
    <META http-equiv="Expires" lang="es" content="0">
    <!--ESTA NOSE PARA QUE ES.-->
    <meta name="Keywords" lang="es" content="Engativa,Colombia, Bogota,
	servicio tecnico, localidad, Quitar Cuenta Google,
	reparacion, celulares, pantalla, dañada, puerto de carga, tablets, baratos,
	flasheo de celulares o tablets, cambio de pantalla, cambio de repuestos.">
    <META http-equiv="PICS-Label" content='
	(PICS-1.1 "http://www.gcf.org/v2.5"
	labels on "1994.11.05T08:15-0500"
	until "1995.12.31T23:59-0000"
	for "http://w3.org/PICS/Overview.html"
	ratings (suds 0.5 density 0 color/hue 1)) 
 '>
    <!--Esto es para ayudar a los padres y a las escuelas a controlar los lugares a los
   que pueden acceder los niños en Internet, también facilita otros usos para las etiquetas, 
  incluyendo firmas de código, privacidad, y gestión de los derechos de la propiedad
  intelectual.-->
    <META name="copyright" content="&copy; 2020 Solumobil Company.">
    <meta name="Description" lang="es" content="Pagina de servicio profesional
  enfocada en el mantenimiento y reparacion de celulares en la ciudad de Bogota-Colombia.
  Servicio tecnico de moviles.">
    <META name="date" content="19:05:09, sábado 29, febrero 2020 -05">
    <meta name="generator" content="HTML-KIT 2.9" />
    <meta name="language" content="es" />
    <meta name="revisit-after" content="1 month" />
    <meta name="robots" content="index, follow" />
    <meta name="application-name" content="servicio tecnico web de reparacion de celulares" />
    <meta name="encoding" charset="utf-8" />
    <meta http-equiv="refresh" content="300" />
    <meta http-equiv=»X-UA-Compatible». />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="organization" content="Solumobil Company" />
    <meta name="revisit" content="7" />
    <noscript>
        <meta http-equiv="refresh" content="60; url=https://www.youtube.com/watch?v=XyW1XiNBsaQ">
    </noscript>

    <!----------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------->
    <!--TERMINA AQUI --------------------------------------------------------------META-->
    <!----------------------------------------------------------------------------------->

    <!-- Favicon -->
    <link rel="Shortcut Icon" href="assets/img/1.ico" />

    <!-- HOJAS DE ESTILOS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashStyles.css">

    <!-- FRAMEWORKS -->
    <link rel="stylesheet" href="assets/css/bootstrapSand.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css.map"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <!-- SASS -->
    <link rel="stylesheet" href="css/sass.css.map">
    <link rel="stylesheet" href="css/sass.css">

    <!-- SWAL -->
    <link rel="stylesheet" href="assets\plugins\swal\dist\sweetalert2.min.css">

    <!-- Stacktable -->
    <!-- <link rel="stylesheet" href="assets/plugins/stacktable/css/stacktable.css"> -->

    <!-- SELECT CON BUSCADOR -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.min.css">

    <!-- DATATABLE -->
    <link rel="stylesheet" href="assets/plugins/datatable/css/bootstrap.css">
    <link rel="stylesheet" href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="assets/font/css/all.css">

    <!-- WaitMe -->
    <link rel="stylesheet" href="assets/plugins/waitMe/waitMe.min.css">

    <!-- ANIMATE.CSS -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate/animate.compat.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate/animate.min.css">

    <title>Soluboard</title>

</head>

<body>
    <!-- START DASHBOARD -->
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="board blanco border-right">
            <div class="logo">
                <h4 class="font-weight-bold mb-0 animated animate__rubberBand title-h4"> <i class="fas fa-lightbulb"></i> Panel
                    de control
                </h4>
            </div>
            <div class="menu list-group-flush">
                <a href="#" class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-cubes lead mr-2"></i>Estadísticas
                </a>
                <a href="?controller=service&method=index" class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-concierge-bell lead mr-2"></i>Solicitudes de Servicio
                </a>
                <!-- <a href="?controller=assigneds&method=index"
                    class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-thumbtack lead mr-2"></i>Servicios Asignados
                </a> -->
                <a href="?controller=technical&method=index" class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-users lead mr-2"></i>Técnicos
                </a>
                <a href="?controller=client&method=index" class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-user-friends lead mr-2"></i>Clientes
                </a>
                <a href="?controller=profile&method=index" class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-trash-restore-alt lead mr-2"></i>Papelera de reciclaje
                </a>
                <a href="?controller=setting&method=index" class="list-group-item list-group-item-action blanco p-3 border-0">
                    <i class="fas fa-cogs lead mr-2"></i> Configuración
                </a>
            </div>
        </div>
        <!-- Fin sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100 bg-light-blue">

            <nav class="navbar navbar-center navbar-light bg-light border-bottom barra-nav">
                <div class="container">
                    <button class="btn btn-light text-dark border-secondary barras" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>

                    <button class="navbar-toggler btn btn-light border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon btn btn-light rounded-top"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item row justify-content-center my-2">
                                <a class="nav-link dropdown-toggle negro" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Óscar Vargas
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="?controller=profile&method=index">Mi perfil</a>
                                    <a class="dropdown-item" href="#">Suscripciones</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="?controller=home&method=index">Cerrar sesión</a>
                                </div>
                            </li>

                            <!-- RELOJ -->
                            <li class="nav-item mt-1 d-flex row justify-content-center my-2">
                                <h4 class="main_time reloj-font" id="time"></h4>
                                <h5 class="mt-1 reloj-font" id="format"></h5>
                            </li>

                            <!-- MODO OSCURO -->
                            <li class="nav-item mt-1 row justify-content-center my-2">
                                <button class="switch" id="switch">
                                    <span>
                            <li class="fas fa-sun"></li>
                            </span>
                            <span>
                                <li class="fas fa-moon"></li>
                            </span>
                            </button>
                            </li>
                            <!-- Gestion perfil -->
                            <!-- <li class="nav-item d-none">
                                <a class="nav-link text-dark" href="#">Solumobil</a>
                            </li> -->
                            <!-- <li class="nav-item active d-none">
                                <a class="nav-link text-dark" href="#">Inicio</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>

            <noscript>
                <div class="position-fixed col-4 justify-content-md-start bg-danger rounded ml-3">
                    <p class="text-light h6">Bienvenido al portal Solumobil</p>
                    <p class="text-light h6">La página que estás
                        viendo requiere para su funcionamiento el uso de JavaScript.
                        Si lo has deshabilitado intencionalmente, por favor vuelve a activarlo.</p>
                    <p class="text-light">Se te redigira a un tutorial en 60 segundos</p>
                </div>
            </noscript>

            <!-- STACKTABLE -->
            <!-- <script src="assets/plugins/stacktable/js/jquery-3.0.0.min"></script>
            <script src=”assets/plugins/stacktable/js/stacktable.js”></script> -->

            <script src="assets/js/localStorage.js"></script>


            <!-- SELECT CON BUSCADOR -->
            <script src="assets/plugins/datatable/js/jquery-3.5.1.js"></script>
            <script src="assets/plugins/select2/select2.min.js"></script>

            <!-- JQUERY -->
            <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

            <!-- SWEETALERT -->
            <script src="assets/plugins/swal/dist/sweetalert2.all.min.js"></script>

            <!-- DATATABLE -->
            <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="assets/plugins/datatable/js/dataTables.bootstrap4.min.js"></script>

            <!-- POPPER, JS Y BOOTSTRAP 4 -->
            <!-- <script src="assets/js/jquery.min.css"></script> -->
            <script src="assets/js/dashBootstrap.min.js"></script>
            <!-- <script src="assets/js/dashJquery.js"></script> -->
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/bootstrap.bundle.min.js"></script>

            <script>
                // AUTOFOCUS EN MODAL
                $(function() {
                    $('#myModalLeft').on('shown.bs.modal', function(e) {
                        $('.focus').focus();
                    })
                });

                // BUSCADOR DE EMERGENCIA EN SELECT
                var digitos = 10 //cantidad de digitos buscados
                var puntero = 0
                var buffer = new Array(digitos) //declaración del array Buffer
                var cadena = ""

                function buscar_op(obj, objfoco) {
                    var letra = String.fromCharCode(event.keyCode)
                    if (puntero >= digitos) {
                        cadena = "";
                        puntero = 0;
                    }
                    //si se presiona la tecla ENTER, borro el array de teclas presionadas y salto a otro objeto...
                    if (event.keyCode == 13) {
                        borrar_buffer();
                        if (objfoco != 0) objfoco.focus(); //evita foco a otro objeto si objfoco=0
                    }
                    //sino busco la cadena tipeada dentro del combo...
                    else {
                        buffer[puntero] = letra;
                        //guardo en la posicion puntero la letra tipeada
                        cadena = cadena + buffer[puntero]; //armo una cadena con los datos que van ingresando al array
                        puntero++;

                        //barro todas las opciones que contiene el combo y las comparo la cadena...
                        for (var opcombo = 0; opcombo < obj.length; opcombo++) {
                            if (obj[opcombo].text.substr(0, puntero).toLowerCase() == cadena.toLowerCase()) {
                                obj.selectedIndex = opcombo;
                            }
                        }
                    }
                    event.returnValue = false; //invalida la acción de pulsado de tecla para evitar busqueda del primer caracter
                }

                function borrar_buffer() {
                    //inicializa la cadena buscada
                    cadena = "";
                    puntero = 0;
                }


                //RELOJ
                function genTime() {
                    // Capturar hora actual con el obj Date
                    let timeNow = new Date();

                    // Ponerle dos digitos a la hora
                    // Usamos el ternario para saber si el numero de digitos es menor a 2
                    let hours = timeNow.getHours().toString().length < 2 ? "0" + timeNow.getHours() : timeNow.getHours();

                    hours = hours % 12;

                    let minutes = timeNow.getMinutes().toString().length < 2 ? "0" + timeNow.getMinutes() : timeNow.getMinutes();
                    // let seconds = timeNow.getSeconds().toString().length < 2 ? "0" + timeNow.getSeconds() : timeNow.getSeconds();

                    // Interpolacion template string ES6 -> CONCATENACION DE VARS   
                    let mainTime = `${hours}:${minutes}`;

                    let format = hours <= 12 ? "PM" : "AM";

                    document.getElementById("time").innerHTML = mainTime;
                    document.getElementById("format").innerHTML = format;
                }

                setInterval(() => {
                    genTime();
                }, 1000);

                // MODAL DENTRO DE MODAL
                // $(document).on('click', '#Crear', function() {
                //     $('#ModalCrear').modal('show');
                // });

                $(document).on('click', '#modalA', function() {
                    $('#modArtifact').modal('show');
                });

                // $(document).on('click', '#modalC', function() {
                //     $('#modCita').modal('show');
                // });

                // $(document).on('click', '#modalCa', function() {
                //     $('#modCategory').modal('show');
                // });

                // $(document).on('click', '#modalT', function() {
                //     $('#modTec').modal('show');
                // });

                /*SELECT CON BUSCADOR*/
                $(document).ready(function() {
                    $('.controlBuscador').select2();
                });

                /*EFECTO DEL FOOTER OCULTO*/
                function ocultar() {
                    document.getElementById('foot').style.display = 'none';
                }

                /*EFECTO HOVER DEL DROPDOWN*/
                $(function() {
                    $(".dropdown").hover(
                        function() {
                            $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        },
                        function() {
                            $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                            $(this).toggleClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        });
                });

                // EFECTO CLIC DEL DROPDOWN NO FUNCIONA
                // $('.dropdown-toggle').click(function () {
                // $(this).next('.dropdown-menu').slideToggle(300);
                // });

                // $('.dropdown-toggle').focusout(function () {
                // $(this).next('.dropdown-menu').slideUp(600);
                // });

                // DATATABLE EN ESPAÑOL: PRESENTABA ERROR CON EL COLSPAN DE LA TABLA
                $(document).ready(function() {
                    $('.datatable').DataTable({
                        "language": {
                            "url": "assets/plugins/datatable/js/Spanish.json",
                            "order": [
                                [0, "desc"]
                            ],
                            "paging": false
                        }
                    }).order([0, "desc"]);
                });

                // EFECTO DE MOSTRAR Y OCULTAR DASH
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#content-wrapper").toggleClass("toggled");
                });

                /*STACKTABLE*/

                // $(document).ready(function() {
                //     $('.stackeame').cardtable();
                // });

                // TRUNCAR TEXTO
                // function ocultar(id) {
                //     let elemento = document.getElementById('mostrarOcultar'+id);
                //     elemento.style.overflow = 'hidden';
                //     elemento.style.whiteSpace = 'nowrap';
                //     // elemento.style.display = 'none';
                //     let ocultar = document.getElementById('ocultar');
                //     ocultar.style.display = 'none';
                //     let mostrar = document.getElementById('mostrar');
                //     mostrar.style.display = 'block';
                // }

                // function mostrar(id) {
                //     let elemento = document.getElementById('mostrarOcultar'+id);
                //     elemento.style.overflow = 'visible';
                //     elemento.style.whiteSpace = 'normal';
                //     elemento.style.textOverflow = 'ellipsis';
                //     // elemento.style.display = 'none';
                //     let mostrar = document.getElementById('mostrar');
                //     mostrar.style.display = 'none';
                //     let ocultar = document.getElementById('ocultar');
                //     ocultar.style.display = 'block';
                // }
                window.addEventListener('load', (e) => {

                    document.querySelector("#hab").addEventListener("click", (e) => {
                        if (localStorage.getItem("mms")) {
                            localStorage.removeItem("mms")
                        } else {
                            localStorage.setItem("mms", "true")
                        }
                        window.location.reload();
                    })
                    const opcion = document.querySelectorAll(".opcion");

                    opcion.forEach((param, i) => {
                        if (localStorage.getItem("mms")) {
                            document.getElementsByClassName("elemento")[i].classList.remove(
                                "mostrarOcultar");
                        }
                        param.addEventListener("click", (e) => {

                            if (e.target.value == "Mostrar") {
                                e.target.classList.remove("btn-outline-success");
                                e.target.classList.add("btn-outline-danger");
                                e.target.value = "Ocultar";
                                document.getElementsByClassName("elemento")[i].classList.remove(
                                    "mostrarOcultar");
                            } else {
                                e.target.classList.remove("btn-outline-danger");
                                e.target.classList.add("btn-outline-success");
                                e.target.value = "Mostrar";
                                document.getElementsByClassName("elemento")[i].classList.add(
                                    "mostrarOcultar");
                            }

                        })
                    });
                });
            </script>