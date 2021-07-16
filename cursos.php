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
include('head.php');
?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Curso</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post">
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



<?php include('footer.php'); ?>
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