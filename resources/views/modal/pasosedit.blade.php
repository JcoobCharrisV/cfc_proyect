<div class="modal fade" id="pasosedit{{$list->pat_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicio-nuevoLabel">Actualizar Pasos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pasos.update', $list->pat_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tra_id">Seleccionar Tratamiento</label>
                        <select class="form-control" id="tra_id" name="tra_id">
                            <option value="" disabled>-- Escoja Su Tratamiento --</option>
                            @foreach ($tratamientos as $list2)
                                <option value="{{ $list2->tra_id }}">{{ $list2->tra_nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pas_descripcion">Pasos:</label>
                        <input type="text" class="form-control" id="pas_descripcion" value="{{ $list->pas_descripcion }}" name="pas_descripcion" rows="3" required>
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
</div>
