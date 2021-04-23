
<div
  class="modal fade "
  id="eliminar_modal<?php echo $show['id_alum']; ?>"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"

>
  <div class="modal-dialog bg-white">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Alumno</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form action="recEliminarA.php" method="post">
      <div class="modal-body">
          <h4>¿Estas seguro que deseas elimnar a <strong>"<?php echo $show['nombres'];?>" </strong> ?</h4>
      </div>
      <div class="modal-footer">
      <input type="hidden"  class="form-control" name="id_alum2" id="id_alum2" value="<?php echo $show['id_alum']?>" required/>
      <input type="hidden"  class="form-control" name="id_pro2" id="id_pro2" value="<?php echo $show['profesor']?>" required/>
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          cerrar
        </button>
        <button type="submit"  class="btn btn-danger">Eliminar</button>
      </div>
</form>
    </div>
  </div>
</div>
