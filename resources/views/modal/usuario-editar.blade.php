<div class="modal fade" id="usuario-editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="usuario-editarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuario-editarLabel">Actualizar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="form-group">
            <label for="perfil-nombre">Nombre Completo</label>
            <input type="text" class="form-control" id="perfil-nombre">
          </div>
          <div class="form-group">
            <label for="perfil-correo">Correo Electrónico</label>
            <input type="email" class="form-control" id="perfil-correo">
          </div>
          <div class="form-group">
            <label for="perfil-celular">Teléfono Celular</label>
            <input type="number" class="form-control" id="perfil-celular">
          </div>
          <div class="form-group">
            <label for="perfil-rol">Rol del Sistema</label>
            <select class="form-control" id="perfil-rol">
              <option>Administrador</option>
              <option>Auxiliar</option>
              <option>Auditor</option>
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