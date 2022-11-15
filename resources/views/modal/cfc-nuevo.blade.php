<div class="modal fade" id="cfc-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="cfc-nuevoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cfc-nuevoLabel">Agrupar Doctor & Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="form-group">
            <label for="cfc-doctor">Seleccionar Doctor</label>
            <a data-toggle="tooltip" data-placement="top" title="Selección multiple permitida">
                <i class="fas fa-info-circle fa-sm"></i>
            </a>
            <select multiple class="form-control" id="cfc-doctor">
              <option>Doctor 1</option>
              <option>Doctor 2</option>
              <option>Doctor 3</option>
              <option>Doctor 4</option>
              <option>Doctor 5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="cfc-servicio">Seleccionar Servicio</label>
            <select class="form-control" id="cfc-servicio">
              <option>Servicio 1 - Tratamiento 1 - Tipo 1</option>
              <option>Servicio 2 - Tratamiento 2 - Tipo 2</option>
              <option>Servicio 3 - Tratamiento 3 - Tipo 3</option>
              <option>Servicio 4 - Tratamiento 4 - Tipo 4</option>
            </select>
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