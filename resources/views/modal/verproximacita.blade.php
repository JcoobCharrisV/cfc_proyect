<div class="modal fade" id="verproximacita{{ $list2->pro_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicio-nuevoLabel">Ver Proxima Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tra_id">Tratamiento:</label>
                        <input class="form-control" id="tra_id" value="{{ $list2->tra_nombres }}" rows="3" name="tra_id" disabled>
                    </div>

                    <div class="form-group">
                        <label for="pac_id">Paciente:</label>
                        <input class="form-control" id="pac_id" value="{{ $list2->pac_nombres }}" rows="3" name="pac_id" disabled>
                    </div>

                    <div class="form-group">
                        <label for="doc_id">Doctor:</label>
                            <input class="form-control" id="doc_id" value="{{ $list2->doc_nombres }}" rows="3" name="doc_id" disabled>
                    </div>

                    <div class="form-group">
                        <label for="pro_fecha">Proxima fecha:</label>
                        <input type="datetime-local" value="{{ $list2->pro_fecha }}" class="form-control"  name="pro_fecha" id="pro_fecha"
                            disabled>
                    </div>

                    <div class="form-group">
                        <label for="pro_observacion">Observación:</label>
                        <input class="form-control" id="pro_observacion" value="{{ $list2->pro_observacion }}" rows="3" name="pro_observacion" disabled>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                            class="fas fa-times mr-1"></i>Cancelar</button>
                </div>
            </form>

        </div>
    </div>
</div>
