<div class="modal fade" id="notificacion-editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="notificacion-editarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificacion-editarLabel">Actualizar Notificaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="alert alert-warning" role="alert">
          Tipo de Notificación: Recordatorio de Mantenimiento (Correo Electrónico)
        </div>
        
        <form>

          <label for="notificacion-periodicidad">Periodicidad</label>
          <div class="input-group mb-2">
            <input type="number" aria-label="Numero" id="notificacion-periodicidad-1" class="form-control">
            <select class="form-control" id="notificacion-periodicidad-2">
              <option>Días</option>
              <option>Semanas</option>
              <option>Meses</option>
              <option>Años</option>
            </select>
          </div>

          <div class="form-group">
            <label for="notificacion-estado">Estado</label>
            <select class="form-control" id="notificacion-estado">
              <option>Activo</option>
              <option>Inactivo</option>
            </select>
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