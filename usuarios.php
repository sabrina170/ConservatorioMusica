<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$usuario = $_SESSION['user_id'];
$tipo_usuario = $_SESSION['tipo_user'];
$user_name = $_SESSION['user_name'];
$usuario = $_SESSION['usuario'];
$contraseña = $_SESSION['contraseña'];
$hoy = date("Y-m-d");

$registro = $servidor->query("SELECT COUNT(*) total FROM adminuser;");
$usuarios = $registro->fetch_assoc();
$registro2 = $servidor->query("SELECT COUNT(*) total FROM profesor;");
$profesores = $registro2->fetch_assoc();
$registro3 = $servidor->query("SELECT COUNT(*) total FROM alumno;");
$alumnos = $registro3->fetch_assoc();


$lista = $servidor->query("SELECT * FROM adminuser;");


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
    <link rel="icon" href="img/logo2.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
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
              <a class="nav-link " href="profesores.php">
                <i class="fas fa-chalkboard-teacher " style="color: white;"></i>
                <span class="nav-link-text" style="color: white;">Profesores</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="usuarios.php">
                <i class="fas fa-users" text-dark></i>
                <span class=" nav-link-text " >Usuarios</span>
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
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" >
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
         <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Datos Personales</a>
                <a href="#" class="btn btn-sm btn-default float-right">Administrador</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading"><?php echo $usuarios['total'] ;?></span>
                      <span class="description">Usuarios</span>
                    </div>
                    <div>
                      <span class="heading"><?php echo $profesores['total'] ;?></span>
                      <span class="description">Profesores</span>
                    </div>
                    <div>
                      <span class="heading"><?php echo $alumnos['total'] ;?></span>
                      <span class="description">Alumnos</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  <?php echo $user_name ; ?>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Lima, Perú
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Usuario :  <?php echo $usuario?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Contraseña : <?php echo $contraseña ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Crear nuevo usuario</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form method="get">
                <h6 class="heading-small text-muted mb-4">Informacion Usuario</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="text-center">
            <span class="badge rounded-pill text-center" style="background-color: #fed6dd;color:#af152e;" id="cont1"></span>
            </div>
            <br>
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Cargo</label>
                        <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Contraseña</label>
                        <input type="text" id="clave" name="clave" class="form-control" placeholder="Contraseña">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nombres</label>
                        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos">
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="tipo" id="tipo" value="1">
                <button href="#"  id="upd-pin"  class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Agregar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Usuarios Registrados</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table  id="usuarios" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col"  data-sort="name">Nr0</th>
                    <th scope="col" data-sort="budget">Nombres</th>
                    <th scope="col" data-sort="status">Apellidos</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Usuario</th>
                    <th scope="col" data-sort="completion">Constraseña</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php $posicion=1; foreach ($lista as $show){
              ?> 
                  <tr>
                    <th >
                    <?php echo $posicion; $posicion++?>
                    </th>
                    <td >
                    <?php echo $show['nombres']?>
                    </td>
                    <td >
                    <?php echo $show['apellidos']?>
                    </td>
                    <td >
                    <?php echo $show['cargo']?>
                    </td>
                    <td >
                    <?php echo $show['usuario']?>
                    </td>
                    <td >
                    <?php echo $show['clave']?>
                    </td>
    
                    <td>
                    <a href=""  data-mdb-toggle="modal" data-mdb-target="#edit_modal<?php echo $show['id'] ?>"> <i class="fas fa-edit"></i></a>
                       <a href=""  data-mdb-toggle="modal" data-mdb-target="#eliminar_modal<?php echo $show['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    
                  </tr>
                  <?php include('modals/ModalEditarU.php') ?>
              <?php include('modals/ModalEliminarU.php') ?>

                  <?php }?>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>


      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a class="font-weight-bold ml-1" target="_blank">Convervatorio de música de Lima</a>
            </div>
          </div>
          
        </div>
      </footer>
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
          usuario = $('#usuario').val();
          clave = $('#clave').val();
          tipo = $('#tipo').val();
          cargo = $('#cargo').val();
  
          if(cargo == '' ){
        document.getElementById('cont1').innerHTML='Falta cargo';
        return false;
      }
      if(usuario == '' ){
        document.getElementById('cont1').innerHTML='Falta usuario';
        return false;
      }
      if(clave == '' ){
        document.getElementById('cont1').innerHTML='Falta contraseña';
        return false;
      }
          if(nombres == '' ){
        document.getElementById('cont1').innerHTML='Falta nombres ';
        return false;
      }
      if(apellidos == ''  ){
        document.getElementById('cont1').innerHTML='Falta apellidos';
        return false;
      }
      
      else{
  
          $.ajax({
              method: 'POST',
              url: 'acciones.php',
              data: {
              accion: "RegistrarUsuario",
              nombres: nombres,
              apellidos: apellidos,
              usuario:usuario,
              clave: clave,
              cargo: cargo,
              tipo:tipo
              },
              success: function(data) {
              console.log(data);
              if (data == 1) {
                  Swal.fire({
                  type: 'success',
                  title: 'Usuario Registrado',
                  timer: 1200,
                  showConfirmButton: false
                  }).then(function() {
                      location.href ="usuarios.php";
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
  

  $(document).ready(function(){
  
    $('#usuarios').DataTable( {
      "searching": true,
            "lengthChange": true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
            dom: 'Blfrtip',
        buttons: [
        //     {
        //     extend: 'excelHtml5',
        //     exportOptions: {
  
        //     }
        //   },
        //   {
        //     extend: 'pdfHtml5',
        //     orientation: 'landscape',
        //     pageSize: 'LEGAL',
        //     exportOptions: {
  
        //     }
        //   },
          
        //   'print',
       
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
          
      } );
  });
  
  </script>
  </body>
  </html>
</body>

</html>
