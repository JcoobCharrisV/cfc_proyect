<div class="modal fade" id="contactabilidadver{{ $list2->rec_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctor-nuevoLabel">Ver Contactabilidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row shadow m-2 p-2">
                    <div class="form-group col-12">
                        <label for="rec_fecha">Fecha Gestion:</label>
                        <input type="datetime-local" value="{{ $list2->rec_fecha }}" name="rec_fecha" disabled
                            class="form-control" id="rec_fecha">
                    </div>
                    <div class="form-group col-12">
                        <label for="tip_id">Tipificación:</label>
                        <input type="text" value="{{ $list2->tip_nombres }}" name="tip_id" disabled
                            class="form-control" id="tip_id">
                    </div>
                    <div class="form-group col-12">
                        <label for="rec_comentario">Observacion:</label>
                        <textarea type="text" name="rec_comentario" disabled 
                            class="form-control" id="rec_comentario">{{ $list2->rec_comentario }}</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>Cancelar</button>
            </div>
        </div>
    </div>
</div>

