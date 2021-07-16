<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$usuario = $_SESSION['user_id'];
$tipo_usuario = $_SESSION['tipo_user'];
$hoy = date("Y-m-d");


include('head.php');
?>

<style>
  .dt-button {
    padding: 0;
    border: none;
    margin-bottom: 16px;
  }
</style>
<!-- Modal de insertar -->
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
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" class="form-control" name="especialidad" id="especialidad" value="" required />
                <label class="form-label" for="form3Example1">Especialidad</label>

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


        </div>
        <div class="col-lg-6 col-5 text-right">
          <a type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="btn btn-sm btn-neutral">Nuevo + </a>
          <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
        </div>
      </div>
    </div>



    <!-- empieza el table -->



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
              <th scope="col" class="sort" data-sort="budget">Nombres</th>
              <th scope="col" class="sort" data-sort="status">Apellidos</th>
              <th scope="col">Especialidad</th>
              <th scope="col" class="sort" data-sort="completion">Celular</th>
              <th scope="col" class="sort" data-sort="completion">Dni</th>
              <th scope="col" class="sort" data-sort="completion">Meses</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $registro = $servidor->query("SELECT * FROM profesor");
            $posicion = 1;
            foreach ($registro as $show) {
            ?>
              <tr>
                <th>
                  <?php echo $posicion;
                  $posicion++ ?>
                </th>
                <td>
                  <?php echo $show['nombres'] ?>
                </td>
                <td>
                  <?php echo $show['apellidos'] ?>
                </td>
                <td>
                  <?php echo $show['especialidad'] ?>
                </td>
                <td>
                  <?php echo $show['telefono'] ?>
                </td>
                <td>
                  <?php echo $show['dni'] ?>
                </td>
                <td>
                  <i class="fas fa-user-friends"></i>
                  <a href="meses.php?id_pro=<?php echo $show['id_pro']; ?>">Ver meses</a>
                </td>
                <td>
                  <a href="" data-mdb-toggle="modal" data-mdb-target="#edit_modal<?php echo $show['id_pro'] ?>"> <i class="fas fa-edit"></i></a>
                  <a href="" data-mdb-toggle="modal" data-mdb-target="#eliminar_modal<?php echo $show['id_pro'] ?>"><i class="fas fa-trash-alt"></i></a>
                </td>

              </tr>
              <?php include('modals/ModalEditar.php') ?>
              <?php include('modals/ModalEliminar.php') ?>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>




    <!-- termina el -->
  </div>
</div>
<?php include('footer.php'); ?>

<script>
  $(function() {
    $("#buscar").on("keyup", function() {
      var buscar = $("#buscar").val();

      $.ajax({
        type: "post",
        url: "buscar.php",
        data: {
          busqueda: buscar
        },
        success: function(respuesta) {
          $("#resultados").html(respuesta);
        }
      })

    })
  })
</script>
<script>
  $('#upd-pin').on('click', function() {

    nombres = $('#nombres').val();
    apellidos = $('#apellidos').val();
    especialidad = $('#especialidad').val();
    // horas = $('#horas').val();
    telefono = $('#telefono').val();
    dni = $('#dni').val();

    if (nombres == '') {
      document.getElementById('cont1').innerHTML = 'Falta nombres ';
      return false;
    }
    if (apellidos == '') {
      document.getElementById('cont1').innerHTML = 'Falta apellidos';
      return false;
    }

    if (especialidad == '') {
      document.getElementById('cont1').innerHTML = 'Falta especialidad';
      return false;
    }

    if (telefono == '') {
      document.getElementById('cont1').innerHTML = 'Falta telefono';
      return false;
    }
    if (dni == '') {
      document.getElementById('cont1').innerHTML = 'Falta dni';
      return false;
    } else {
      $.ajax({
        method: 'POST',
        url: 'acciones.php',
        data: {
          accion: "RegistrarProfesor",
          nombres: nombres,
          apellidos: apellidos,
          especialidad: especialidad,
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

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
      dom: 'Blftipr',
      buttons: [{
          //Botón para Excel
          extend: 'excel',
          footer: true,
          title: 'Archivo',
          filename: 'Export_File',

          //Aquí es donde generas el botón personalizado
          text: '<button class="btn btn-success"><i class="fas fa-file-excel"></i> Excel </button>'
        },
        //Botón para PDF
        {
          extend: 'pdf',
          footer: true,
          title: 'Archivo PDF',
          filename: 'Export_File_pdf',
          text: '<button class="btn btn-danger"><i class="far fa-file-pdf"></i> PDF </button>'
        },
        {
          extend: 'print',
          footer: true,
          title: 'Archivo PDF',
          filename: 'Export_File_pdf',
          text: '<button class="btn btn-info"><i class="fas fa-print"></i> Imprimir </button>'
        }
      ]

    });
  });
</script>
</body>

</html>
</body>

</html>