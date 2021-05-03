
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
    <?php
      $pro =  $show['id_pro'];
      $registro2 = $servidor->query("SELECT * FROM alumno where profesor = '$pro';");
      $alumnos = $registro2->fetch_assoc();
      
      foreach ($registro2 as $alumnos){
      
        // $horas = $horas + $alumnos['hora'] ;
        // $minutos = $minutos + $alumnos['minuto'];
        
      }

        ?>
    <!-- <span class="h5 text-nowrap"><i class="far fa-clock"></i>  <?php echo $horas;?> hrs.  <?php echo $minutos;?> min. </span> -->

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
<?php include('modals/ModalEditar.php') ?>
<?php include('modals/ModalEliminar.php') ?>

    <?php
    ;}


?>