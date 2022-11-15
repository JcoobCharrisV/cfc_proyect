<div class="modal fade" id="servicio-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="servicio-nuevoLabel">Nuevo Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="form-group">
            <label for="cfc-servicio">Seleccionar Servicio</label>
            <select class="form-control" id="cfc-servicio">
              <option>Servicio 1</option>
              <option>Servicio 2</option>
              <option>Servicio 3</option>
              <option>Servicio 4</option>
              <option>Servicio 5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="cfc-tratamiento">Seleccionar Tratamiento</label>
            <select class="form-control" id="cfc-tratamiento">
              <option>Tratamiento 1</option>
              <option>Tratamiento 2</option>
              <option>Tratamiento 3</option>
              <option>Tratamiento 4</option>
              <option>Tratamiento 5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="cfc-tipo">Seleccionar Tipo</label>
            <select class="form-control" id="cfc-tipo">
              <option>Tipo 1</option>
              <option>Tipo 2</option>
              <option>Tipo 3</option>
              <option>Tipo 4</option>
              <option>Tipo 5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="servicio-descripcion">Descripcion</label>
            <textarea class="form-control" id="servicio-descripcion" rows="3"></textarea>
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