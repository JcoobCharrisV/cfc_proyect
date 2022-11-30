<div class="modal fade" id="tipoedit{{ $list->tit_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctor-nuevoLabel">Actualizar Tipo de Tratamiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tipo.update', $list->tit_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tit_nombres">Nombre:</label>
                        <input type="text" name="tit_nombres" value="{{ $list->tit_nombres }}" class="form-control" required
                            id="tit_nombres">
                    </div>
                    <div class="form-group">
                        <label for="tit_descripcion">Descripcion:</label>
                        <input class="form-control" value="{{ $list->tit_descripcion }}" name="tit_descripcion" required
                            id="tit_descripcion" rows="3">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>Cancelar</button>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i>Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>
