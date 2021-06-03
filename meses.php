<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$id_pro = $_GET['id_pro'];
// $tipo_usuario = $_SESSION['tipo_user'];
$hoy = date("Y-m-d");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Conservatorio de Musica de Lima</title>
    <link rel="icon" href="img/logo2.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

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
                <img src="img/logo2.jpg" class="img-fluid rounded-pill" alt="" />
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

                    <!-- Divider -->
                    <hr class="my-3">

                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom" style="
            background-image: linear-gradient(rgba(34, 74, 115, 0.8),
            rgba(34, 74, 115, 0.8) ), url(img/fondo2.jpg);
          background-position: center center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <!-- <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text" id="buscar">

                            </div> -->
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

        <!-- Header -->
        <div class="header  pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <div class="col-lg-6 col-5 text-left">
                                <a type="button" href="profesores.php" class="btn btn-sm btn-neutral">
                                    < Volver </a>

                                        <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
                            </div>
                            <br>
                            <h6 class="h1  d-inline-block mb-0 text-center" style="color: #224a73;">MESES</h6>
                            <?php
                            $consultapro = $servidor->query("SELECT * FROM profesor where id_pro='$id_pro'");
                            // $posicion = 1;
                            foreach ($consultapro as $show) {
                            ?>
                                <h6 class="h1  d-inline-block mb-0 text-center" style="color: #224a73;">
                                    <?php
                                    echo $show['nombres'];
                                    echo ' ';
                                    echo $show['apellidos'];  ?>
                                </h6>
                            <?php } ?>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">

                            </nav>
                        </div>

                    </div>

                    <br><br>
                    <!-- Card stats -->
                    <div class="row">


                        <?php
                        $registro = $servidor->query("SELECT * FROM mes");
                        $posicion = 1;
                        foreach ($registro as $show) {
                        ?>
                            <div class="col-xl-4 col-md-6">
                                <a href="cursos.php?id_pro=<?php echo $id_pro; ?>&id_mes=<?php echo $show['id_mes'] ?>">
                                    <div class="card card-stats">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                                                    <span class="h1 font-weight-bold mb-0"><?php echo utf8_encode($show['nombre']) ?></span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-blue text-white rounded-circle shadow">
                                                        <i class="far fa-calendar-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $idm = $show['id_mes'];
                                            $registro2 = $servidor->query("SELECT categoria,tipo, sum(cantidad) AS suma, tiempo
                                             FROM curso where
                                             id_mes = '$idm' and id_pro = '$id_pro' GROUP BY categoria, tipo,tiempo");

                                            if (mysqli_num_rows($registro2) == 0) {
                                            ?>
                                                <span class="text-primary mr-2">Ninguna categoria</span>

                                            <?php
                                            } else {
                                            ?>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <?php
                                                        foreach ($registro2 as $show) {
                                                        ?> <tbody>
                                                                <tr>
                                                                    <td> <span class="text-primary mr-2"><?php echo $show['categoria']; ?></span> </td>
                                                                    <td> <span class="text-primary mr-2"><?php echo $show['tipo']; ?></span> </td>
                                                                    <td> <span class="text-primary mr-2"><?php echo $show['suma']; ?></span> </td>
                                                                    <td> <span class="text-primary mr-2"><?php echo $show['tiempo']; ?> " </span> </td>
                                                                </tr>
                                                            <?php

                                                        }
                                                            ?>
                                                    </table>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js?v=1.2.0"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
    </script>
    <script type="text/javascript" src="js/mdb.min.js"></script>



</body>

</html>
</body>

</html>