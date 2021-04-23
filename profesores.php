<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$usuario = $_SESSION['user_id'];
$tipo_usuario = $_SESSION['tipo_user'];
$hoy = date("Y-m-d");

$registro = $servidor->query("SELECT * FROM profesor");

?>
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
            <i class="fas fa-sign-out-alt"></i>  Salir
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
    <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom"  style="
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
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
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
              <i class="fas fa-sign-out-alt"></i>  Salir
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <!-- Header -->



    <!-- Modal -->



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Profesor</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
        
            <form method="get">
            <div class="text-center">
            <span class="badge rounded-pill text-center" style="background-color: #fed6dd;color:#af152e;" id="cont1"></span>
            </div>
            <br>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
              
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="nombres" id="nombres" value="" required/>
                    <label class="form-label" for="form3Example1">Nombres</label>
                    
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="" required />
                    <label class="form-label" for="form3Example2">Apellidos</label>
                    
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="especialidad" id="especialidad" value="" required />
                    <label class="form-label" for="form3Example1">Especialidad</label>
                    
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="number" class="form-control" name="horas" id="horas" value="" required />
                    <label class="form-label" for="form3Example2">Horas trabajadas</label>
                    
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="number" class="form-control" name="telefono" id="telefono" value="" required />
                    <label class="form-label" for="form3Example1">Telefono</label>
                    
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="number" class="form-control" name="dni" id="dni" value="" maxlength="8" required />
                    <label class="form-label" for="form3Example2">Dni</label>
                    
                  </div>
                </div>
              </div>

              <!-- Submit button -->
              <button href="#" id="upd-pin" class="btn btn-block mb-4" type="submit" style="background-color: #3578ba; color: white;">Agregar</button>

            </form>

          </div>

        </div>
      </div>
    </div>





    <!-- Header -->
    <div class="header  pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h1  d-inline-block mb-0" style="color: #224a73;">PROFESORES</h6>
              
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <!-- <ol class="breadcrumb breadcrumb-links breadcrumb-dark"> 
                   <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> </a></li> 
                   <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>  -->
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="btn btn-sm btn-neutral">Nuevo + </a>
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <?php $posicion = 1;
            foreach ($registro as $show) {
            ?>

              <div class="col-xl-6 col-md-6">

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
                    <span class="h5 text-nowrap"><i class="far fa-clock"></i> <?php echo $show['horas'] ?>  hrs.</span>

                    <p class="mt-3 mb-0 text-sm">
                      
                      
                      <?php
                      $pro =  $show['id_pro'];
                      $registro3 = $servidor->query("SELECT COUNT(*) total FROM alumno where profesor = '$pro';");
                      $alumnos = $registro3->fetch_assoc();
                        
                        ?>
                      <span class="text-success mr-2 "><i class="fa fa-arrow-up fs-2x"></i> <strong><?php echo $alumnos['total'] ;?></strong></span>

                      <!-- <i class="fas fa-user-friends"></i> <a class="h4 text-primary" href="sd">Ver Alumnos</a> -->
                      <strong> <i class="fas fa-user-friends"></i>
                        <a class="h4 text-dark" href="alumnos.php?id_pro=<?php echo $show['id_pro']; ?>">Ver alumnos</a></strong>

                    </p>
                  </div>
                </div>
              </div>
              <?php include('modals/ModalEditar.php') ?>
              <?php include('modals/ModalEliminar.php') ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Argon Scripts -->
  <!-- Core -->

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


  <script>
    $('#upd-pin').on('click', function() {

      nombres = $('#nombres').val();
      apellidos = $('#apellidos').val();
      especialidad = $('#especialidad').val();
      horas = $('#horas').val();
      telefono = $('#telefono').val();
      dni = $('#dni').val();

      if(nombres == '' ){
        document.getElementById('cont1').innerHTML='Falta nombres ';
        return false;
      }
      if(apellidos == ''  ){
        document.getElementById('cont1').innerHTML='Falta apellidos';
        return false;
      }
      
      if(especialidad == '' ){
        document.getElementById('cont1').innerHTML='Falta especialidad';
        return false;
      }
      if(horas == '' ){
        document.getElementById('cont1').innerHTML='Falta horas';
        return false;
      }
      if(telefono == '' ){
        document.getElementById('cont1').innerHTML='Falta telefono';
        return false;
      }
      if(dni == '' ){
        document.getElementById('cont1').innerHTML='Falta dni';
        return false;
      }

      else{
  $.ajax({
        method: 'POST',
        url: 'acciones.php',
        data: {
          accion: "RegistrarProfesor",
          nombres: nombres,
          apellidos: apellidos,
          especialidad: especialidad,
          horas:horas,
          telefono: telefono,
          dni: dni
        },
        success: function(data) {
          console.log(data);
          if (data == 1) {
            Swal.fire({
              type: 'success',
              title: 'Profesor Registrado',
              timer: 1200,
              showConfirmButton: false
            }).then(function() {
              location.href = "profesores.php";
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'No se pudo registrar',
              text: data
            }).then(function() {

            });
          }
        }
      })


}

    });
  </script>
  <script>
    $(document).ready(function() {

      $('#usuarios').DataTable({
        "searching": true,
        "lengthChange": true,
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "Todo"]
        ],
        dom: 'Blfrtip',
        buttons: [{
            extend: 'excelHtml5',
            exportOptions: {

            }
          },
          {
            extend: 'pdfHtml5',
            orientation: 'landscape',
            pageSize: 'LEGAL',
            exportOptions: {

            }
          },

          'print',

        ],
        exportOptions: {
          modifier: {
            // DataTables core
            order: 'index', // 'current', 'applied',
            //'index', 'original'
            page: 'all', // 'all', 'current'
            search: 'none' // 'none', 'applied', 'removed'
          }
        }

      });
    });
  </script>
</body>

</html>
</body>

</html>