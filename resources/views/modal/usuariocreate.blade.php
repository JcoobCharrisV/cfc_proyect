<div class="modal fade" id="usuariocreate" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="usuario-editarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usuario-editarLabel">Crear Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/usuarios/enviar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre Completo: </label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico: </label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="id">Seleccionar Rol</label>
                        <select class="form-control" name="id" id="id" required>
                            <option value="" selected disabled>-- Escoja su Tratamiento --</option>
                                <option value="" ></option>                         
                        </select>
                    </div>     

                    <div class="form-group">
                        <label for="password">Contraseña: </label>
                        <input type="text" class="form-control" name="password" id="password" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>Cancelar</button>
                <button type="submit" class="btn btn-sm btn-primary"><i
                        class="fas fa-sync-alt mr-1"></i>Actualizar</button>
            </div>
            </form>
        </div>
    </div>
</div>
