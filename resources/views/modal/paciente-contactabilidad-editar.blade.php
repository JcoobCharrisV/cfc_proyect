<div class="modal fade" id="paciente-contactabilidad-editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="paciente-contactabilidad-editarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paciente-contactabilidad-editarLabel">Editar Contactabilidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="contactabilidad-fecha">Fecha Gestión</label>
            <input type="datetime-local" class="form-control" id="contactabilidad-fecha" value="2022-10-23 15:15" disabled>
          </div>
          <div class="form-group">
            <label for="contactabilidad-tipificacion">Tipificación</label>
            <select class="form-control" id="contactabilidad-tipificacion">
              <option>Contactado</option>
              <option>No Contactado</option>
              <option>Buzón de Voz</option>
              <option>Número Equivocado</option>
            </select>
          </div>
          <div class="form-group">
            <label for="contactabilidad-observacion">Observación</label>
            <textarea class="form-control" id="contactabilidad-observacion" rows="3"></textarea>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Cancelar</button>
        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-sync-alt mr-1"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>