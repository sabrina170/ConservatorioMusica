<div class="modal fade " id="edit_modal<?php echo $show['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
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
                <input type="text" class="form-control" name="cargo2" id="cargo2" value="<?php echo $show['cargo']?>" required />
                <label class="form-label" for="form3Example3">Cargo</label>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $show['usuario']?>" required />
                    <label class="form-label" for="form3Example1">Curso</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="number" class="form-control" name="clave2" id="clave2" value="<?php echo $show['clave']?>" required />
                    <label class="form-label" for="form3Example2">Contraseña</label>
                  </div>
                </div>
              </div>

        <input type="hidden"  class="form-control" name="id2" id="id2" value="<?php echo $show['id']?>" required/>

                
        <!-- Submit button -->
        <button href="#" type="submit" class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Editar</button>

        </form>
            
            </div>
            
            </div>
        </div>
</div>
