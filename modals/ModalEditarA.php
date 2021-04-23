
<div class="modal fade " id="edit_modal<?php echo $show['id_alum']?>" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog bg-white">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Alumno</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">

    <form method="post" action="recEditarA.php">
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="nombres2" id="nombres2" value="<?php echo $show['nombres']?>" required />
                    <label class="form-label" for="form3Example1">Nombres</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="apellidos2" id="apellidos2" value="<?php echo $show['apellidos']?>" required />
                    <label class="form-label" for="form3Example2">Apellidos</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" class="form-control" name="especialidad2" id="especialidad2" value="<?php echo $show['especialidad']?>" required />
                <label class="form-label" for="form3Example3">Especialidad</label>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="curso2" id="curso2" value="<?php echo $show['curso']?>" required />
                    <label class="form-label" for="form3Example1">Curso</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="number" class="form-control" name="edad2" id="edad2" value="<?php echo $show['edad']?>" required />
                    <label class="form-label" for="form3Example2">Edad</label>
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="date" class="form-control" name="fecha_inicio2" id="fecha_inicio2" value="<?php echo $show['fecha_inicio']?>" required />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="date" class="form-control" name="fecha_fin2" id="fecha_fin2" value="<?php echo $show['fecha_fin']?>" required />
                  </div>
                </div>
              </div>
              <div class="form-outline mb-4">
                <textarea class="form-control" name="obsevaciones2" id="obsevaciones2" rows="4" ><?php echo $show['obsevaciones']?></textarea>
                <label class="form-label" for="textAreaExample" >Observaciones </label>
              </div>
      
        <input type="hidden"  class="form-control" name="id_pro2" id="id_pro2" value="<?php echo $show['profesor']?>" required/>
        <input type="hidden"  class="form-control" name="id_alum2" id="id_alum2" value="<?php echo $show['id_alum']?>" required/>

                
        <!-- Submit button -->
        <button href="#" type="submit" class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Editar</button>

        </form>
            
            </div>
            
            </div>
        </div>
</div>

   