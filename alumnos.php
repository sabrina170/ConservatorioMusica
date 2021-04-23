<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$usuario = $_SESSION['user_id'];
$tipo_usuario = $_SESSION['tipo_user'];
$hoy = date("Y-m-d");
$id_pro = $_GET['id_pro'];
$registro = $servidor->query("SELECT * FROM alumno where profesor = '$id_pro' ");

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



    <!-- Modal -->



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Alumno</h5>
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
                    <input type="text" class="form-control" name="nombres" id="nombres" value="" required />
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
              <div class="form-outline mb-4">
                <input type="email" class="form-control" name="especialidad" id="especialidad" value="" required />
                <label class="form-label" for="form3Example3">Especialidad</label>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="curso" id="curso" value="" required />
                    <label class="form-label" for="form3Example1">Curso</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="number" class="form-control" name="edad" id="edad" value="" required />
                    <label class="form-label" for="form3Example2">Edad</label>
                  </div>
                </div>
              </div>
             
              <div class="row mb-4">
              
                <div class="col">
                 
                  <div class="form-outline">
                    <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="" required />
                    <div class="form-helper">Fecha de Inicio</div>
                  </div>
                  
                </div>

                <div class="col">
                  <div class="form-outline">
                    <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="" required />
                    <div class="form-helper">Fecha Fin</div>
                  </div>
                </div>
              </div>
              <br>
              <div class="form-outline mb-4">
                <textarea class="form-control" name="obsevaciones" id="obsevaciones" rows="4"></textarea>
                <label class="form-label" for="textAreaExample">Observaciones </label>
              </div>
              <input type="hidden" class="form-control" name="profesor" id="profesor" value="<?php echo $id_pro; ?>" required disabled>


              <!-- Submit button -->
              <button href="#" id="upd-pin" class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Agregar</button>

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
              <h6 class="h1  d-inline-block mb-0" style="color:#224a73">ALUMNOS</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <!-- <ol class="breadcrumb breadcrumb-links breadcrumb-dark"> -->
                <!-- <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> </a></li> -->
                <!-- <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="btn btn-sm btn-neutral">Nuevo + </a>
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
          <!-- Card stats -->

        </div>
      </div>
    </div>


    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"></h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id="usuarios" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nr0</th>
                    <th scope="col" class="sort" data-sort="budget">Nombres</th>
                    <th scope="col" class="sort" data-sort="status">Apellidos</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col" class="sort" data-sort="completion">Curso</th>
                    <th scope="col" class="sort" data-sort="completion">Edad</th>
                    <th scope="col" class="sort" data-sort="completion">Fecha Inicio</th>
                    <th scope="col" class="sort" data-sort="completion">Fecha Fin</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody >
                  <?php $posicion = 1;
                  foreach ($registro as $show) {
                  ?>
                    <tr>
                      <th >
                        <?php echo $posicion;
                        $posicion++ ?>
                      </th>
                      <td >
                        <?php echo $show['nombres'] ?>
                      </td>
                      <td >
                        <?php echo $show['apellidos'] ?>
                      </td>
                      <td >
                        <?php echo $show['especialidad'] ?>
                      </td>
                      <td >
                        <?php echo $show['curso'] ?>
                      </td>
                      <td >
                        <?php echo $show['edad'] ?>
                      </td>
                      <td >
                        <?php echo $show['fecha_inicio'] ?>
                      </td>
                      <td >
                        <?php echo $show['fecha_fin'] ?>
                      </td>
                      <td >
                       <a href=""  data-mdb-toggle="modal" data-mdb-target="#edit_modal<?php echo $show['id_alum'] ?>"> <i class="fas fa-edit"></i></a>
                       <a href=""  data-mdb-toggle="modal" data-mdb-target="#eliminar_modal<?php echo $show['id_alum'] ?>"><i class="fas fa-trash-alt"></i></a>
                      </td>

                    </tr>
                    <?php include('modals/ModalEditarA.php') ?>
                    <?php include('modals/ModalEliminarA.php') ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>

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
      curso = $('#curso').val();
      edad = $('#edad').val();
      fecha_inicio = $('#fecha_inicio').val();
      fecha_fin = $('#fecha_fin').val();
      obsevaciones = $('#obsevaciones').val();
      profesor = $('#profesor').val();

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
      if(curso == '' ){
        document.getElementById('cont1').innerHTML='Falta curso';
        return false;
      }
      if(edad == '' ){
        document.getElementById('cont1').innerHTML='Falta edad';
        return false;
      }
      if(fecha_inicio == '' ){
        document.getElementById('cont1').innerHTML='Falta fecha de inicio';
        return false;
      }
      if(fecha_fin == '' ){
        document.getElementById('cont1').innerHTML='Falta fecha de fin';
        return false;
      }
      else{
      $.ajax({
        method: 'POST',
        url: 'acciones.php',
        data: {
          accion: "RegistrarAlumno",
          nombres: nombres,
          apellidos: apellidos,
          especialidad: especialidad,
          curso: curso,
          edad: edad,
          fecha_inicio: fecha_inicio,
          fecha_fin: fecha_fin,
          obsevaciones: obsevaciones,
          profesor: profesor
        },

        success: function(data) {
          console.log(data);
          if (data == 1) {
            Swal.fire({
              type: 'success',
              title: 'Alumno registrado',
              timer: 1200,
              showConfirmButton: false
            }).then(function() {
              location.href = "alumnos.php?id_pro=<?php echo $id_pro; ?>";
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
        buttons: [
          //   {
          //   extend: 'excelHtml5',
          //   exportOptions: {

          //   }
          // },
          // {
          //   extend: 'pdfHtml5',
          //   orientation: 'landscape',
          //   pageSize: 'LEGAL',
          //   exportOptions: {

          //   }
          // },

          // 'print',

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