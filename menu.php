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
<html lang="en">
<meta charset="UTF-8" />
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
<body>
    sdfasdasda  <?php  echo $tipo_usuario; ?>

<!-- Button trigger modal -->
<button
  type="button"
  class="btn btn-success"
  data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
>
  Nuevo
</button>

<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Profesor</h5>
                <button
                type="button"
                class="btn-close"
                data-mdb-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">

            <form method="get">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="nombres" id="nombres" value="" required />
                <label class="form-label" for="form3Example1">Nombres</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="apellidos" id="apellidos" value="" required/>
                <label class="form-label" for="form3Example2">Apellidos</label>
            </div>
            </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email"  class="form-control" name="especialidad" id="especialidad" value="" required/>
            <label class="form-label" for="form3Example3">Especialidad</label>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="telefono" id="telefono" value="" required/>
                <label class="form-label" for="form3Example1">Telefono</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="dni" id="dni" value="" required/>
                <label class="form-label" for="form3Example2">Dni</label>
            </div>
            </div>
        </div>

        

        <!-- Submit button -->
        <button href="#"  id="upd-pin"  class="btn btn-primary btn-block mb-4">Sign up</button>

        </form>
            
            </div>
            
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
        <th style="width:20px">Celular</th>
        <th style="width:20px">Dni</th>
        <th style="width:20px">Acciones</th>

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
                    <td><?php echo $show['telefono']?></td>
                    <td><?php echo $show['dni']?></td>
                    <td class='td-center'>
                      <a href="alumnos.php?id_pro=<?php echo $show['id_pro']; ?>" class="button tiny warning radius"><i class="fas fa-edit"></i>Ver alumnos</a>
                     </td>
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
<script type="text/javascript">
    </script>
      <script type="text/javascript" src="js/mdb.min.js"></script>
<script>
        $('#upd-pin').on('click', function() {

        nombres = $('#nombres').val();
        apellidos = $('#apellidos').val();
        especialidad = $('#especialidad').val();
        telefono = $('#telefono').val();
        dni = $('#dni').val();

        console.log(especialidad);

        $.ajax({
            method: 'POST',
            url: 'acciones.php',
            data: {
            accion: "RegistrarProfesor",
            nombres: nombres,
            apellidos: apellidos,
            especialidad:especialidad,
            telefono: telefono,
            dni:dni
            },
            success: function(data) {
            console.log(data);
            if (data == 1) {
                Swal.fire({
                type: 'success',
                title: 'Registrado',
                timer: 1200,
                showConfirmButton: false
                }).then(function() {
                    location.href ="menu.php";
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