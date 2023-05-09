
<!-- Modal -->
<form id="frmAgregarEvento" onsubmit="return agregarEvento()">
  <div class="modal fade" id="modal_agregar_evento" tabindex="-1" aria-labelledby="modal_agregar_eventoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_agregar_eventoLabel">Agregar evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="nombre_evento">Nombre del evento</label>
          <input type="text" class="form-control" id="nombre_evento" name="nombre_evento" required>
          <label for="hora_inicio">Hora inicio</label>
          <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
          <label for="hora_fin">Hora fin</label>
          <input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
          <label for="fecha">Fecha</label>
          <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-purple">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>