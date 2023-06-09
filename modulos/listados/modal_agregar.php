<?php  
  $select = $Invitados->selectEventos($_SESSION['id_usuario']);
?>

<form id="frmAgregarInvitado" onsubmit="return agregarInvitado()">
  <div class="modal fade" id="modal_agregar_invitado" tabindex="-1" aria-labelledby="modal_agregar_invitadoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_agregar_invitadoLabel">Agregar invitado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <?php echo $select; ?>
            <label for="nombre_invitado">Nombre del invitado</label>
            <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" required>
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-purple">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>