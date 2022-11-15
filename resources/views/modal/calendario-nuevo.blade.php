<div class="modal fade" id="calendario-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="calendario-nuevoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="calendario-nuevoLabel">Inhabilitadar Nueva Fecha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="calendario-fechainicio">Fecha Inicio</label>
                <input type="datetime-local" class="form-control" id="calendario-fechainicio">
              </div>
              <div class="col-md-6">
                <label for="calendario-fechafin">Fecha Fin</label>
                <input type="datetime-local" class="form-control" id="calendario-fechafin">
              </div>
            </div>
          </div>
          <div class="form-group">
              <label for="calendario-observacion">Motivo</label>
              <textarea class="form-control" id="calendario-observacion" rows="3"></textarea>
            </div>
          
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Cancelar</button>
        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>