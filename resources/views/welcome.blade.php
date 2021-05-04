<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo2.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Start up digital con nucleo en Barcelona, España especializado en la programación, desarrollo y diseño web y en el posicionamiento SEO de estas">
    <title>Diagonal Team - Programadores y Desarrolladores Web</title>
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('animation/animacion.css') }}">
    <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164092250-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164092250-1');

    </script>

</head>

<body>
    <section class="menu cid-rWvvouNZiy" once="menu" id="menu1-q">
        <nav
            class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="/">
                            <img src="{{ asset('assets/images/diagonalteam.png') }}" alt="" style="height: 5.8rem">
                        </a>
                    </span>
                </div>

            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="index.html#header2-h">
                            <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" data-target-id="team1-k" href="#team1-k"><span
                                class="socicon socicon-teamspeak mbr-iconfont mbr-iconfont-btn"></span>
                            Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" data-target-id="counters6-i"
                            href="#counters6-i"><span
                                class="socicon socicon-storehouse mbr-iconfont mbr-iconfont-btn"></span>
                            Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" data-target-id="clients-j" href="#clients-j"><span
                                class="mbri-users  mbr-iconfont mbr-iconfont-btn"></span>
                            Nuestros Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" data-target-id="tutorias-i"
                            href="#tutorias-i"><span
                                class="socicon mbri-edit mbr-iconfont mbr-iconfont-btn mbri-edit"></span>
                            Tutorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" data-target-id="form1-l" href="#form1-l"><span
                                class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>
                            Contactanos</a>
                    </li>
                    @if (Auth::guest())
                    @else
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="/login"><span
                                    class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span>
                                Administrador</a>
                        </li>
                    @endif
                </ul>

            </div>
        </nav>
    </section>

    <section class="engine"></section>
    <section class="cid-rWvqrrxSsu mbr-fullscreen mbr-parallax-background " id="header2-h">



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">

        </div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                        DIAGONAL TEAM
                    </h1>

                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                        Programadores y Desarrolladores Web profesionales
                    </p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-md btn-info display-4" data-target-id="counters6-i"
                            href="#counters6-i">NOSOTROS</a>
                        <a class="btn btn-md btn-white-outline display-4" data-target-id="form1-l"
                            href="#form1-l">CONTACTANOS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a data-target-id="team1-k" href="#team1-k">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="team1 cid-rWvrBdJ2KR" id="team1-k">


        <div class="container align-center">
            <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2 font-weight-bold">
                NUESTRO EQUIPO
            </h2>
            <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">
                Contamos con un equipo joven y experto en las diferentes tecnologias web y con hambre de aprender mas
            </h3>
            <div class="row media-row">

                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="{{ asset('assets/images/face1.png') }}" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Daniel Perez</p>
                        </div>
                        <div class="item-role px-2">
                            <p>Full Stack Dev</p>
                        </div>
                        <!--
                                <div class="item-social pt-2">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                        <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                        <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/mobirise" target="_blank">
                                        <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.instagram.com/mobirise/" target="_blank">
                                        
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">    
                                        
                                    </a>
                                </div>-->
                    </div>
                </div>
                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="{{ asset('assets/images/face2.png') }}" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Leo Hernandez</p>
                        </div>
                        <div class="item-role px-2">
                            <p>Front-End Stack</p>
                        </div>
                        <!--
                                <div class="item-social pt-2">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                        <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                        <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/mobirise" target="_blank">
                                        <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.instagram.com/mobirise/" target="_blank">
                                        
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">    
                                        
                                    </a>
                                </div>-->
                    </div>
                </div>
                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="{{ asset('assets/images/face3.png') }}" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Joshua Cruz</p>
                        </div>
                        <div class="item-role px-2">
                            <p>Back-End Stack</p>
                        </div>
                        <!--
                                <div class="item-social pt-2">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                        <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                        <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/mobirise" target="_blank">
                                        <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.instagram.com/mobirise/" target="_blank">
                                        
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">    
                                        
                                    </a>
                                </div>-->
                    </div>

                </div>
                <div class="team-item col-lg-3 col-md-6">
                    <div class="item-image">
                        <img src="{{ asset('assets/images/face4.png') }}" alt="" title="">
                    </div>
                    <div class="item-caption py-3">
                        <div class="item-name px-2">
                            <p class="mbr-fonts-style display-5">
                                Ana M&deg; Fernandez</p>
                        </div>
                        <div class="item-role px-2">
                            <p>Relacionista</p>
                        </div>
                        <!--
                                <div class="item-social pt-2">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                        <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                        <span class="p-1 socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/mobirise" target="_blank">
                                        <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                    <a href="https://www.instagram.com/mobirise/" target="_blank">
                                        
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw" target="_blank">    
                                        
                                    </a>
                                </div>-->
                    </div>
                </div>
            </div>
    </section>
    <section class="counters6 counters cid-rWvqNkXVwr animadoDerecha" id="counters6-i">
        <div class="container pt-4 mt-2">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2 font-weight-bold">NOSOTROS</h2>
            <h3 class="mbr-section-subtitle pb-5 align-center mbr-fonts-style display-5">
                Un start-up joven, dinamico especializado en las diferentes tecnologias actuales enfocados en el
                sacar del anonimato digital a las PYMES brindando soluciones web y de correo a muy bajo costo y de
                calidad
                profesional.
            </h3>
            <div>
                <div class="cards-container">
                    <div class="card col-12 col-md-6 col-lg-4 pb-md-4">
                        <div class="panel-item align-center">
                            <div class="card-img pb-3">
                                <h3 class="img-text mbr-fonts-style display-1">01.</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Honestos y Confiables
                                </h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Ningun cobro excesivo, siempre entregamos todos con recibos oficiales de las
                                    plataformas con las que trabajamos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4 pb-md-4">
                        <div class="panel-item align-center">
                            <div class="card-img pb-3">
                                <h3 class="img-text mbr-fonts-style display-1">02.</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Siempre Innovamos</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Ninguna persona es igual, pues asi mismo, ninguna web es igual. Todas deben
                                    ajustarse a su due&ntilde;o y no viceversa
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4 last-child">
                        <div class="panel-item align-center">
                            <div class="card-img pb-3">
                                <h3 class="img-text mbr-fonts-style display-1">03.</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Somos Apasionados</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Nos encanta la tecnologia y siempre estamos estudiandola y haciendo
                                    <em>improvement</em> para ver como ofrecer solo lo
                                    mejor a nuestros clientes
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="clients cid-rWvr1IwP37 mbr-parallax-background" data-interval="false" id="clients-j">


        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);">
        </div>
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2 font-weight-bold">
                        NUESTROS CLIENTES
                    </h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                        Las empresas que confiaron en nosotros para salir de su anonimato digital.
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel"
                data-interval="5000">
                <div class="carousel-inner" data-visible="5">
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="{{ asset('assets/images/1.png') }}" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="{{ asset('assets/images/2.png') }}" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="{{ asset('assets/images/3.png') }}" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="{{ asset('assets/images/4.png') }}" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="{{ asset('assets/images/5.png') }}" class="img-responsive clients-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button"
                        data-slide="prev">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button"
                        data-slide="next">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="tutorias-i counters cid-rWvqNkXVwr animadoDerecha" id="tutorias-i">

        <div class="container pt-4 mt-2">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2 font-weight-bold">TUTORÍAS</h2>
            <h3 class="mbr-section-subtitle pb-5 align-center mbr-fonts-style display-5">
                Adaptados a tiempos actuales ofrecemos lo que son <strong>tutorías plenamente virtuales con metodologías
                    <i> Face-To-Face</i></strong> a través de Skype, Zoom, Google. Tutorías
                individualizadas para sacar el mayor provecho y enfocarnos en un estudiante a la vez y así tener un
                alumnado mas preparado.
                <br /><br />

                Contamos con experiencia comprobable en los siguientes stacks tecnológicos para impartir docencia:
            </h3>
            <div>
                <div class="cards-container">
                    <div class="card col-12 col-md-6 col-lg-4 pb-md-4">
                        <div class="panel-item align-center">
                            <div class="card-img pb-3">
                                <h3 class="img-text mbr-fonts-style display-1">DATOS</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">SQL SYNTAX
                                    (T-SQL/MySQL...)</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Lenguaje para la gestion de datos desde una base de datos relacional (RDBMS).
                                    Tecnología actualmente en auge por el uso de la inteligencia artificial.
                                    Preparamos a nuestro alumnado para la <strong> certificación MICROSOFT MTA 98-364</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4 pb-md-4">
                        <div class="panel-item align-center">
                            <div class="card-img pb-3">
                                <h3 class="img-text mbr-fonts-style display-1">BÁSICO</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">HTML/CSS/JS</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Las 3 principales tecnologías para la creación desde el más complicado hasta el más
                                    sencillo sitio web. Enfocandonos principalmente en las bases del correcto diseño y las técnicas
                                    <i>pixel perfect</i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4 last-child">
                        <div class="panel-item align-center">
                            <div class="card-img pb-3">
                                <h3 class="img-text mbr-fonts-style display-1">EXPERTO</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">M.E.R.N. STACK</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Enfocado a personas con conocimientos básicos de HTML/CSS/JS.
                                    Donde se aprenderá a crear aplicaciones web robustas, seguras y confiables, además
                                    de, dinámicas.

                                    
                                    {{-- Se pretende alcanzar que el alumno comprenda como conectar
                                               diferentes tecnologias, dominar conceptos de Front-End y Back-end asi como unir bases de datos y configurar servidores
                                               basados en linux. --}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                        Contacta con nosotros para información sobre precios y horarios.


                    </h4>
                </div>
            </div>

        </div>

    </section>

    <section class="mbr-section form1 cid-rWvrFZMn8H animadoDerecha" id="form1-l">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2 font-weight-bold">
                        CONTACTANOS
                    </h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                        No tengas miedo de contactarnos, cualquier duda que tengas, la respondemos.
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="media-container-column col-lg-12" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="https://mobirise.com/" method="POST" id="Formulario"
                            class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                            <input type="hidden" name="email" data-form-email="true"
                                value="e672C/dZoHRH27BNAqrmINxLkSQiRRO0kOMtuJzGIMxGk1D4pamHgxHjnE2jHzEOg+cuVM2Ccrsm/0ZbD8MdAqrUqmvPZlZs8boqewrZL9dV5t1GdkpZQnnXds226yI1">
                            <div class="row">
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-md-6  form-group" data-for="name">
                                    <label for="name-form1-l"
                                        class="form-control-label mbr-fonts-style display-7">Nombre</label>
                                    <input type="text" name="name" data-form-field="Name" required="required"
                                        class="form-control display-7" id="name-form1-l">
                                </div>
                                <div data-for="phone" class="col-md-6  form-group">
                                    <label for="phone-form1-l"
                                        class="form-control-label mbr-fonts-style display-7">Telefono</label>
                                    <input type="tel" name="phone" data-form-field="Phone"
                                        class="form-control display-7" id="phone-form1-l">
                                </div>
                                <div class="col-md-12  form-group" data-for="email">
                                    <label for="email-form1-l"
                                        class="form-control-label mbr-fonts-style display-7">Correo</label>
                                    <input type="email" name="email" data-form-field="Email" required="required"
                                        class="form-control display-7" id="email-form1-l">
                                </div>
                                <div data-for="phone" class="col-md-12  form-group">
                                    <label for="phone-form1-l" class="form-control-label mbr-fonts-style"></label>
                                    <select class="custom-select" data-form-field="Contacteme Por:" name="Asunto"
                                        id="Asunto" required>
                                        <option selected>Como Prefiere ser contactado</option>
                                        <option value="Correo">Correo</option>
                                        <option value="Telefono">Telefono</option>
                                        <option value="Otros">Otros- Especificar en Mensaje</option>
                                    </select>
                                </div>
                                <div data-for="message" class="col-md-12 form-group">
                                    <label for="message-form1-l"
                                        class="form-control-label mbr-fonts-style display-7">Mensaje</label>
                                    <textarea name="message" data-form-field="Message" class="form-control display-7"
                                        id="message-form1-l"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn align-center">
                                    <button type="submit" class="btn btn-primary btn-form display-4">Enviar
                                        Mensaje</button>
                                </div>
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                                    Mensaje enviado Correctamente
                                </div>
                            </div>
                        </form>
                        <!---Formbuilder Form--->
                    </div>
                </div>
                <div class="col-sm-4 col-md-4  mt-2 ">
                    <!--editar-->


                    <div class="col-12">
                        <div class="col-12 ">
                            <h2 class="text-black font-weight-bold">
                                <span class="mbri-letter  mbr-iconfont mbr-iconfont-btn"></span>
                                Correo
                            </h2>
                        </div>
                        <div class="col-12"><a href="mailto:info@diagonalteam.com">
                                <p class="text-left pl-5">info@diagonalteam.com</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <!--    <div class="col-12">      
                           <h2 class="text-black font-weight-bold">
                            <span class="mbri-mobile  mbr-iconfont mbr-iconfont-btn"></span>    
                            Telefono</h2>
                      </div>
                         <div class="col-12"><p class="text-left pl-5">+34 652 61 35 33</p></div>
                       </div>-->

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!--  <section class="mbr-section contacts1 cid-rWvrIyrazy" id="contacts1-m">
             
                
                <!-Overlay->
                
                <!-Container->
                <div class="container">
                    <div class="row">
                        <!-Titles->
                        <div class="title col-12">
                            <h2 class="align-left mbr-fonts-style display-1">
                                Our Contacts
                            </h2>
                            
                        </div>
                        <!-Left->
                        <div class="col-12 col-md-6">
                            <div class="left-block wrapper">
                                <div class="b b-adress">
                                    <h5 class="align-left mbr-fonts-style m-0 display-5">
                                        Address:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        350 5th Ave, New York, NY 10118, USA
                                    </p>
                                </div>
                                <div class="b b-phone">
                                    <h5 class="align-left mbr-fonts-style m-0 display-5">
                                        Phone:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        +1 (0) 000 0000 001
                                    </p>
                                </div>
                                <div class="b b-mail">
                                    <h5 class="align-left mbr-fonts-style m-0 display-5">
                                        E-mail:
                                    </h5>
                                    <p class="mbr-text align-left mbr-fonts-style display-7">
                                        youremail@mail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-Right->
                        <div class="col-12 col-md-6">
                            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
                        </div>
                    </div>
                </div>
            </section>  -->

    <section once="footers" class="cid-rWvskB30IT" id="footer7-o">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-links">
                    <ul class="foot-menu">


                        <!--
                                
                                
                            <li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white mbr-bold" href="#" target="_blank">Get In Touch</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white mbr-bold" href="#" target="_blank">Careers</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white mbr-bold" href="#" target="_blank">Work</a>
                                </li></ul>-->
                </div>
                <div class="row social-row">
                    <div class="social-list align-right pb-2">






                        <div class="soc-item">
                            <a href="https://twitter.com/diagonalteamdev" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/Diagonal-Team-102943871398092" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/diagonalteamdev" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright {{ date('Y') }} <a
                            href="https://diagonalteam.com">diagonalteam.com</a> - Todos los Derechos
                        Reservados
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/nav-dropdown.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
    <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
    <script src="{{ asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
    <script src="{{ asset('assets/mbr-clients-slider/mbr-clients-slider.js') }}"></script>
    <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>
    <script src="{{ asset('animation/animacion.js') }}"></script>

</body>

</html>
