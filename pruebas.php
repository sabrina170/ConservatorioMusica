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
<html lang="en">
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
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body>
   

    <div class="container-fluid">
  <div class="col-lg-8">
    <h4>USUARIO <strong class="color-blue"></strong></h4>
  </div>
  <div class="col-lg-4 mb-12"><a class="button alert radius right" href="reporte_pinesLibros.php"><i class="fa fa-arrow-left fa-1x"></i>&nbsp; Volver</a></div>
  <hr />
  <div class="row">
    <div class="col-lg-2">
      <h5><strong class="color-blue">DATOS BÁSICOS</span></strong></h5>
    </div>
    <div class="col-lg-10 columns">
      <form  method="get">
        <label>Nombres
          <input type="text" class="form-control" name="nombres" id="nombres" value="" required >
        </label>
        <br>
        <label>Apellidos
          <input type="text" class="form-control" name="apellidos" id="apellidos" value="" required >
        </label>
        <br>
        <label>Edad
          <input type="number" class="form-control" name="edad" id="edad" value="" required >
        </label>
        <br>
        <label>Curso
          <input type="text" class="form-control" name="curso" id="curso" value="" required >
        </label>
        <br>
        <label>Especialidad
          <input type="text" class="form-control" name="especialidad" id="especialidad" value="" required >
        </label>
        <br>
        <label>Fecha Inicio
          <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="" required >
        </label>
        <br>
        <label>Fecha Fin
          <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="" required >
        </label>
        <br>
        <label>obsevaciones
          <input type="text" class="form-control" name="obsevaciones" id="obsevaciones" value="" required >
        </label>
        <br>
        <input type="hidden" class="form-control" name="profesor" id="profesor" value="<?php echo $id_pro;?>" required disabled>
       

        <div class="form-check">
        <a href=""  id="upd-pin" class="btn btn-success radius mt-24 text-center">Registrar</a>
        </div>
 
        </form>
      <br>
    </div>
    
  </div>
</div>

<hr>
<table id="usuarios" class="table-responsive" >
    <thead>
      <tr style="height:40px">  
    
          <th style="width:20px">Nro.</th>
        <th style="width:20px">Nombres</th>
        <th style="width:20px">Apellidos </th>
        <th style="width:20px">Especialidad</th>
        <th style="width:20px">Curso</th>
        <th style="width:20px">Edad</th>
        <th style="width:20px">Fecha Inicio</th>
        <th style="width:20px">Fecha Fin</th>
        <th style="width:20px">Observaciones</th>


                    </tr>
                </thead>
                <tbody>
                <?php $posicion=1; foreach ($registro as $show){
              ?>
                  <tr>
                
                    <td><?php echo $posicion; $posicion++?></td>
                    <td><?php echo $show['nombres']?></td>
                    <td><?php echo $show['apellidos']?></td>
                    <td><?php echo $show['especialidad']?></td>
                    <td><?php echo $show['curso']?></td>
                    <td><?php echo $show['edad']?></td>
                    <td><?php echo $show['fecha_inicio']?></td>
                    <td><?php echo $show['fecha_fin']?></td>
                    <td><?php echo $show['obsevaciones']?></td>
                  
      </tr>
      <?php }?>
    </tbody>
    </table>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>



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

<script>
        $('#upd-pin').on('click', function() {

        nombres = $('#nombres').val();
        apellidos = $('#apellidos').val();
        especialidad = $('#especialidad').val();
        curso = $('#curso').val();
        edad = $('#edad').val();
        fecha_inicio =$('#fecha_inicio').val();
        fecha_fin = $('#fecha_fin').val();
        obsevaciones = $('#obsevaciones').val();
        profesor = $('#profesor').val();

        console.log(especialidad);

        $.ajax({
            method: 'POST',
            url: 'acciones.php',
            data: {
            accion: "RegistrarAlumno",
            nombres: nombres,
            apellidos :apellidos,
            especialidad : especialidad,
            curso : curso,
            edad : edad,
            fecha_inicio : fecha_inicio,
            fecha_fin : fecha_fin,
            obsevaciones : obsevaciones,
            profesor : profesor
            },

            success: function(data) {
            console.log(data);
            if (data == 1) {
                Swal.fire({
                type: 'success',
                title: 'Alumnos registrado',
                timer: 1200,
                showConfirmButton: false
                }).then(function() {
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



});

</script>
<script>
$(document).ready(function(){

  $('#usuarios').DataTable( {
    "searching": true,
          "lengthChange": true,
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
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
        
    } );
});

</script>
</body>
</html>