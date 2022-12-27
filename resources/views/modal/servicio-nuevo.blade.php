<div class="modal fade" id="servicio-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicio-nuevoLabel">Nuevo Tratamiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tratamiento.enviar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ser_id">Seleccionar Especialidad</label>
                        <select class="form-control" id="ser_id" name="ser_id" required>
                            <option value="" selected disabled>-- Escoja su Especialidad--</option>
                            @foreach ($servicio as $list)
                                <option value="{{ $list->ser_id }}">{{ $list->ser_nombres }}</option>
                            @endforeach
                        </select>
                    </div>

                     {{-- <div class="form-group">
                        <label for="tit_id">Seleccionar Tipo</label>
                        <select class="form-control" id="tit_id" name="tit_id" required>
                            <option value="" selected disabled>-- Escoja su tipo de tratamiento--</option>
                            @foreach ($tipos_tratamientos as $list)
                                <option value="{{ $list->tit_id }}">{{ $list->tit_nombres }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="tra_nombres">Tratamiento:</label>
                        <input type="text" class="form-control" id="tra_nombres" name="tra_nombres" rows="3"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="stt_precio">Precio Del Tratamiento:</label>
                        <input type="number" name="stt_precio" class="form-control" id="stt_precio" required>
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
