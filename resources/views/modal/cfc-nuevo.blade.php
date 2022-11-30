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
            <label for="doc_id">Seleccionar Doctor</label>
            <a data-toggle="tooltip" data-placement="top" title="">               
            </a>
            <select multiple class="form-control" id="doc_id">
              @foreach ($doctores as $list)
              <option>{{ $list->doc_nombres }}</option> 
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="cfc-servicio">Seleccionar Servicio</label>
            <select class="form-control" id="cfc-servicio">
              <option>Tratamiento</option>
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