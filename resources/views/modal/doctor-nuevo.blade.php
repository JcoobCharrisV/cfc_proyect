<div class="modal fade" id="doctor-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="doctor-nuevoLabel">Nuevo Doctor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="form-group">
            <label for="doctor-nombre">Nombre</label>
            <input type="text" class="form-control" id="doctor-nombre">
          </div>
          <div class="form-group">
            <label for="doctor-tipoid">Tipo de Identificación</label>
            <select class="form-control" id="doctor-tipoid">
              <option>CC - Cédula de Ciudadanía</option>
              <option>PP - Pasaporte</option>
              <option>RC - Registro Civil</option>
            </select>
          </div>
          <div class="form-group">
            <label for="doctor-id">Número de Identificación</label>
            <input type="number" class="form-control" id="doctor-id">
          </div>
          <div class="form-group">
            <label for="doctor-correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="doctor-correo">
          </div>
          <div class="form-group">
            <label for="doctor-celular">Teléfono Celular</label>
            <input type="number" class="form-control" id="doctor-celular">
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