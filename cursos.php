<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$usuario = $_SESSION['user_id'];
$tipo_usuario = $_SESSION['tipo_user'];
$hoy = date("Y-m-d");
$id_pro = $_GET['id_pro'];
$id_mes = $_GET['id_mes'];
$registro = $servidor->query("SELECT * FROM curso where id_pro = '$id_pro' and id_mes= '$id_mes' ");
$registro2 = $servidor->query("SELECT * FROM mes where id_mes = '$id_mes' ");
foreach ($registro2 as $show) {
    $nombre_mes = $show['nombre'];
}

$consulta_categoria = $servidor->query("SELECT * FROM categoria");
// $resultado_categoria = mysqli_query($cn, $consulta_categoria);

?>
<?php
header('Content-Type: text/html; charset=UTF-8');
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
                <input class="form-control" placeholder="Search" type="text">
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

        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Curso</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form method="get">
                            <div class="text-center">
                                <span class="badge rounded-pill text-center" style="background-color: #fed6dd;color:#af152e;" id="cont1"></span>
                            </div>
                            <br>

                            <div class="row mb-4">
                                <div class="col">
                                    <label class="form-label" for="form3Example1">Categoria</label>
                                    <select class="form-select" name="categoria" id="categoria" aria-label="Default select example">
                                        <option selected>Seleciona una categoria</option>
                                        <?php
                                        foreach ($consulta_categoria as $categoria) {
                                            echo '<option  value="' . $categoria['id_cat'] . '">' . $categoria['nombre'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label class="form-label" for="form3Example1">Tipo</label>
                                    <select class="form-select" name="tipo" id="tipo" aria-label="Default select example" disabled="disabled">
                                        <!-- <option selected>Selecciona un tipo</option> -->
                                        <option value="" disabled selected>Selecciona un tipo</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <select class="colegio" id="colegio_distrito" name="colegio_distrito" class="oc" required>
                                <option value="RT" disabled selected>Seleccione distrito del colegio...</option>
                                <?php
                                while ($categoria = mysqli_fetch_assoc($resultado_categoria)) {
                                    echo '<option  value="' . $categoria['id_cat'] . '">' . $categoria['nombre'] . '</option>';
                                }
                                ?>
                                <option value="ninguno">Ninguno</option>

                            </select>
                            <select class="oc" id="tipo" name="tipo" onchange="ShowSelected();" disabled="disabled" required>
                                <option value="" disabled selected>Selecciona un colegio</option>
                            </select> -->

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <label class="form-label" for="form3Example1">Cantidad</label>
                                    <div class="form-outline">
                                        <input type="number" class="form-control" name="cantidad" id="cantidad" value="" required />
                                        <label class="form-label" for="form3Example1">Cantidad</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label class="form-label" for="form3Example1">Tiempo</label><br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo2" value=45 checked>
                                        <label class="form-check-label" for="inlineRadio1">45</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo2" value=60>
                                        <label class="form-check-label" for="inlineRadio2">60</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo2" value=90>
                                        <label class="form-check-label" for="inlineRadio2">90</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="date" class="form-control" name="fecha" id="fecha" value="" required />
                                        <div class="form-helper">Fecha</div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <input type="hidden" class="form-control" name="id_pro" id="id_pro" value="<?php echo $id_pro; ?>">
                            <input type="hidden" class="form-control" name="id_mes" id="id_mes" value="<?php echo $id_mes; ?>">


                            <!-- Submit button -->
                            <button id="upd-pin2" class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Agregar</button>

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
                            <div class="col-lg-6 col-5 text-left">
                                <a type="button" href="meses.php?id_pro=<?php echo $id_pro; ?>" class="btn btn-sm btn-neutral">
                                    < Volver </a>

                                        <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
                            </div>
                            <br>
                            <h6 class="h1  d-inline-block mb-0" style="color:#224a73">Cursos de <strong> <?php echo $nombre_mes; ?></strong></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
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
                            <table id="usuarios">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Nr0</th>
                                        <th scope="col" class="sort" data-sort="budget">Categoria</th>
                                        <th scope="col" class="sort" data-sort="status">Tipo</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col" class="sort" data-sort="completion">Tiempo</th>
                                        <th scope="col" class="sort" data-sort="completion">Fecha</th>
                                        <th scope="col" class="sort" data-sort="completion">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $posicion = 1;
                                    foreach ($registro as $show) {
                                    ?>
                                        <tr>
                                            <th>
                                                <?php echo $posicion;
                                                $posicion++ ?>
                                            </th>
                                            <td>
                                                <?php echo $show['categoria'] ?>
                                            </td>
                                            <td>
                                                <?php echo $show['tipo'] ?>
                                            </td>
                                            <td>
                                                <?php echo $show['cantidad'] ?>
                                            </td>
                                            <td>
                                                <?php echo $show['tiempo'] ?>
                                            </td>
                                            <td>
                                                <?php echo $show['fecha'] ?>
                                            </td>
                                            <td>
                                                <a href="" data-mdb-toggle="modal" data-mdb-target="#edit_modal<?php echo $show['id_curso'] ?>"> <i class="fas fa-edit"></i></a>
                                                <a href="" data-mdb-toggle="modal" data-mdb-target="#eliminar_modal<?php echo $show['id_curso'] ?>"><i class="fas fa-trash-alt"></i></a>
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
        $(document).ready(function() {
            $('#categoria').on('change', function() {


                var categoria = $(this).val();

                if ($('#categoria').val() == "") {
                    $('#tipo').empty();
                    // $('<option value = "">Selecciona un tipo</option>').appendTo('#tipo');
                    $('#tipo').attr('disabled', 'disabled');
                } else {
                    $('#tipo').removeAttr('disabled', 'disabled');

                    $.ajax({
                        type: "POST",
                        url: "acciones.php",
                        data: {
                            accion: "BuscarColegio",
                            idcategoria: categoria
                        },
                        success: function(data) {
                            console.log(data);
                            $('#tipo').html(data);
                        }
                    });

                    //$('#tipo').load('colegios_get.php?colegio_distrito=' + $('#colegio_distrito').val());
                }
            });

            $('#categoria2').on('change', function() {


                var categoria = $(this).val();

                if ($('#categoria2').val() == "") {
                    $('#tipo2').empty();
                    // $('<option value = "">Selecciona un tipo</option>').appendTo('#tipo');
                    $('#tipo2').attr('disabled', 'disabled');
                } else {
                    $('#tipo2').removeAttr('disabled', 'disabled');

                    $.ajax({
                        type: "POST",
                        url: "acciones.php",
                        data: {
                            accion: "BuscarColegio",
                            idcategoria: categoria
                        },
                        success: function(data) {
                            console.log(data);
                            $('#tipo2').html(data);
                        }
                    });

                    //$('#tipo').load('colegios_get.php?colegio_distrito=' + $('#colegio_distrito').val());
                }
            });
        });
    </script>

    </script>

    <script>
        $('#upd-pin2').on('click', function() {

            categoria = $('#categoria').find('option:selected').text();
            tipo = $('#tipo').find('option:selected').text();
            cantidad = $('#cantidad').val();
            tiempo = $('input:radio[name="tiempo"]:checked').val();
            fecha = $('#fecha').val();
            id_pro = $('#id_pro').val();
            id_mes = $('#id_mes').val();


            if (categoria == '') {
                document.getElementById('cont1').innerHTML = 'Falta categoria ';
                return false;
            }
            if (tipo == '') {
                document.getElementById('cont1').innerHTML = 'Falta tipo';
                return false;
            }

            if (cantidad == '') {
                document.getElementById('cont1').innerHTML = 'Falta cantidad';
                return false;
            }
            if (tiempo == '') {
                document.getElementById('cont1').innerHTML = 'Falta tiempo';
                return false;
            }

            if (fecha == '') {
                document.getElementById('cont1').innerHTML = 'Faltan fecha';
                return false;
            } else {
                $.ajax({
                    method: 'POST',
                    url: 'acciones.php',
                    data: {
                        accion: "RegistrarCurso",
                        categoria: categoria,
                        tipo: tipo,
                        cantidad: cantidad,
                        tiempo: tiempo,
                        fecha: fecha,
                        id_pro: id_pro,
                        id_mes: id_mes
                    },

                    success: function(data) {
                        console.log(data);
                        if (data == 1) {

                            location.href = "cursos.php?id_pro=<?php echo $id_pro; ?>&id_mes=<?php echo $id_mes; ?>";

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