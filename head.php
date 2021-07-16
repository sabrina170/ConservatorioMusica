<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Conservatorio de Musica de Lima</title>
    <!-- <link rel="icon" href="img/logo2-min.jpg" type="image/x-icon" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Favicon -->
    <link rel="icon" href="img/logo2.jpg" type="image/x-icon" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<style>

</style>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical 
      fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main" style="
          background-image: linear-gradient(rgba(34, 74, 115, 0.8),
          rgba(34, 74, 115, 0.8) ), url(img/dd.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">

        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header ">
                <br><br>
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="fas fa-times-circle fa-2x text-white"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <br>
            <div class="navbar-inner">
                <img src="img/logo2-min.jpg" class="img-fluid rounded-pill" alt="" />
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="profesores.php">
                                <i class="fas fa-chalkboard-teacher text-dark"></i>
                                <span class="nav-link-text">Profesores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios.php">
                                <i class="fas fa-users" style="color: white;"></i>
                                <span class=" nav-link-text " style="color: white;">Usuarios</span>
                            </a>
                        </li>
                        <a class="nav-link" href="cerrar_sesion.php" style="color: white;">
                            <i class="fas fa-sign-out-alt"></i> Salir
                        </a>
                    </ul>
                    <hr class="my-3">

                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom" style="background-color: #414c6b;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">

                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="cerrar_sesion.php" style="color: white;">
                                <i class="fas fa-sign-out-alt"></i> Salir
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>