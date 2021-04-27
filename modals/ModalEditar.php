<div class="modal fade" id="edit_modal<?php echo $show['id_pro']?>" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Profesor</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">

    <form method="post" action="recEditar.php">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="nombres2" id="nombres2" value="<?php echo $show['nombres']?>" required />
                <label class="form-label" for="form3Example1">Nombres</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="apellidos2" id="apellidos2" value="<?php echo $show['apellidos']?>" required/>
                <label class="form-label" for="form3Example2">Apellidos</label>
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="text"  class="form-control" name="especialidad2" id="especialidad2" value="<?php echo $show['especialidad']?>" required/>
                <label class="form-label" for="form3Example1">Especialidad</label>
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="number"  class="form-control" name="telefono2" id="telefono2" value="<?php echo $show['telefono']?>" required/>
                <label class="form-label" for="form3Example1">Telefono</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="number"  class="form-control" name="dni2" id="dni2" value="<?php echo $show['dni']?>" required/>
                <label class="form-label" for="form3Example2">Dni</label>
            </div>
            </div>
        </div>
        <input type="hidden"  class="form-control" name="id_pro2" id="id_pro2" value="<?php echo $show['id_pro']?>" required/>
                
        <!-- Submit button -->
        <button href="#" type="submit" class="btn btn-block mb-4" style="background-color: #3578ba; color: white;">Editar</button>

        </form>
            
            </div>
            
            </div>
        </div>
</div>

   