<div class="modal fade " id="edit_modal<?php echo $show['id_curso'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog bg-white">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="recEditarA.php">
          <div class="text-center">
            <span class="badge rounded-pill text-center" style="background-color: #fed6dd;color:#af152e;" id="cont1"></span>
          </div>
          <br>

          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form3Example1">Categoria</label>
              <select class="form-select" name="categoria2" id="categoria2" aria-label="Default select example" disabled>
                <option selected>Seleciona una categoria</option>
                <?php

                $nom = $show['categoria'];
                foreach ($consulta_categoria as $categoria) {

                  $nombre = $categoria['nombre'];
                ?>
                  <option value="<?php echo  $categoria['id_cat'] ?>" <?php
                                                                      if ($nom == $nombre) {
                                                                        echo "selected";
                                                                      } ?>>
                    <?php echo  $categoria['nombre'] ?></option>

                <?php
                }
                $idcat = $categoria['id_cat'];
                ?>
              </select>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form3Example1">Tipo</label>
              <select class="form-select" name="tipo2" id="tipo2" aria-label="Default select example">
                <!-- <option selected>Selecciona un tipo</option> -->

                <?php
                if ($show['categoria'] == 'Curso Libre') {
                  if ($show['tipo'] == 'Instrumento Individual') {
                ?>
                    <option value="Instrumento Individual" selected>Instrumento Individual</option>
                    <option value="Teoría Grupal">Teoría Grupal</option>
                  <?php
                  } else {
                  ?>
                    <option value="Teoría Grupal" selected>Teoría Grupal</option>
                    <option value="Instrumento Individual">Instrumento Individual</option>
                  <?php
                  }
                  ?>

                <?php
                } else if ($show['tipo'] == 'Instrumental') {
                ?>
                  <option value="Instrumental" selected>Instrumental</option>
                  <option value="Teorico">Teorico</option>
                <?php
                } else if ($show['tipo'] == 'Teorico') {
                ?>
                  <option value="Teorico" selected>Teorico</option>
                  <option value="Instrumental">Instrumental</option>
                <?php
                } else {
                ?>
                  <option value="-" selected>-</option>
                <?php
                }

                ?>



              </select>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form3Example1">Cantidad</label>
              <div class="form-outline">
                <input type="number" class="form-control" name="cantidad2" id="cantidad2" value="<?php echo $show['cantidad'] ?>" required />
                <label class="form-label" for="form3Example1">Cantidad</label>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempo2" id="tiempo2" value=45 <?php if ($show['tiempo'] == 45) {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                <label class="form-check-label" for="inlineRadio1">45</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempo2" id="tiempo2" value=60 <?php if ($show['tiempo'] == 60) {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                <label class="form-check-label" for="inlineRadio2">60</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tiempo2" id="tiempo2" value=90 <?php if ($show['tiempo'] == 90) {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                <label class="form-check-label" for="inlineRadio2">90</label>
              </div>

            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="date" class="form-control" name="fecha2" id="fecha2" value="<?php echo $show['fecha'] ?>" required />
                <div class="form-helper">Fecha</div>
              </div>
            </div>
          </div>
          <br>

          <input type="hidden" class="form-control" name="id_pro2" id="id_pro2" value="<?php echo $show['id_pro']; ?>">
          <input type="hidden" class="form-control" name="id_mes2" id="id_mes2" value="<?php echo $show['id_mes']; ?>">
          <input type="hidden" class="form-control" name="id_curso2" id="id_curso2" value="<?php echo $show['id_curso']; ?>">


          <!-- Submit button -->
          <button href="#" type="submit" class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Editar</button>

        </form>

      </div>

    </div>
  </div>
</div>