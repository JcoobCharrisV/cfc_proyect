<div class="modal fade" id="agendarcitaprox" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicio-nuevoLabel">Agendar Proxima Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="stt_id">Seleccionar Tratamiento</label>
                        <select class="form-control" name="stt_id" id="stt_id" required>
                            <option value="" selected disabled>-- Escoja su Tratamiento --</option>
                            @foreach ($tratamiento as $list)
                                <option value="{{ $list->tra_id }}">{{ $list->tra_nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="doc_id">Seleccionar Doctor</label>
                        <select class="form-control" name="doc_id" id="doc_id" required>
                            <option value="" selected disabled>-- Escoja su Doctor --</option>
                            @foreach ($doctores as $list)
                                <option value="{{ $list->doc_id }}">{{ $list->doc_nombres }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="pro_fecha">Proxima fecha:</label>
                        <input type="datetime-local" class="form-control" name="pro_fecha" id="pro_fecha" required>
                    </div>

                    <div class="form-group">
                        <label for="pro_observacion">Observación:</label>
                        <textarea class="form-control" id="pro_observacion" rows="3" name="pro_observacion" required></textarea>
                    </div>


                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>Cancelar</button>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i>Guardar</button>
            </div>

        </div>
    </div>
</div>