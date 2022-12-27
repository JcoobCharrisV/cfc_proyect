<div class="modal fade" id="tipificacionedit{{ $list->tip_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctor-nuevoLabel">Actualizar Tipificación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('tipificacion.update', $list->tip_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tip_nombres"><i
                            class="fas fa-edit p-1"></i>Nombre:</label>
                        <input type="text" name="tip_nombres" value="{{ $list->tip_nombres }}" class="form-control"
                            id="tip_nombres" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                            class="fas fa-times mr-1"></i>Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i
                            class="fas fa-save mr-1"></i>Guardar</button>
                </div>
            </form>
        </div>

    </div>
</div>
