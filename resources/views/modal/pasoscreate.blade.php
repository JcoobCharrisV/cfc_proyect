<div class="modal fade" id="pasoscreate" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicio-nuevoLabel">Nuevos Pasos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/pasos/enviar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tra_id">Seleccionar Tratamiento</label>
                        <select class="form-control" name="tra_id" id="tra_id" required>
                            <option value="" selected disabled>-- Escoja Su Tratamiento --</option>
                            @foreach ($tratamientos as $list)
                                <option value="{{ $list->tra_id }}">{{ $list->tra_nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pas_descripcion">Pasos:</label>
                        <textarea type="text" class="form-control" id="pas_descripcion" name="pas_descripcion" rows="3" required></textarea>
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
