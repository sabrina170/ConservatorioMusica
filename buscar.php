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
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
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

<body>
  <?php
  require "conexion.php";

  $busqueda = $_POST["busqueda"];

  // $sql = "SELECT * FROM alumnos
  // 		WHERE nombre LIKE '%$busqueda%'";

  // $consulta = mysqli_query($sql);



  $registro = $servidor->query("SELECT * FROM profesor
WHERE nombres LIKE '%$busqueda%'");

  $salida = "";

  while ($show = mysqli_fetch_array($registro)) {


  ?>


    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $show['especialidad'] ?></h5>
            <span class="h2 font-weight-bold mb-0"><?php echo $show['nombres'] ?></span>
            <span class="h2 font-weight-bold mb-0"><?php echo $show['apellidos'] ?></span>

          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-dark text-white rounded-circle shadow">

              <a href="" style="color: white;" data-mdb-toggle="modal" data-mdb-target="#edit_modal<?php echo $show['id_pro'] ?>"><i class="fas fa-pen"></i></a>
            </div>
            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">

              <a href="" style="color: white;" data-mdb-toggle="modal" data-mdb-target="#eliminar_modal<?php echo $show['id_pro'] ?>"> <i class="fas fa-trash-alt"></i></a>

            </div>

          </div>
        </div>
        <span class="h5 text-nowrap"><i class="fas fa-phone-volume"></i> <?php echo $show['telefono'] ?></span>
        <br>

        <span class="h5 text-nowrap"><i class="fas fa-user-shield"></i> <?php echo $show['dni'] ?></span>
        <br>


        <p class="mt-3 mb-0 text-sm">
          <!-- <i class="fas fa-user-friends"></i> <a class="h4 text-primary" href="sd">Ver Alumnos</a> -->
          <strong> <i class="fas fa-user-friends"></i>
            <a href="meses.php?id_pro=<?php echo $show['id_pro']; ?>">Ver meses</a>
        </p>
      </div>
    </div>
    <?php include('modals/ModalEditar.php') ?>
    <?php include('modals/ModalEliminar.php') ?>

  <?php
  }


  ?>
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