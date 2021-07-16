<?php
// require_once("base/restrict.php");
require_once('conexion.php');
session_start();
$id_pro = $_GET['id_pro'];
// $tipo_usuario = $_SESSION['tipo_user'];
$hoy = date("Y-m-d");

include('head.php');
?>

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

<?php
include('footer.php');
?>