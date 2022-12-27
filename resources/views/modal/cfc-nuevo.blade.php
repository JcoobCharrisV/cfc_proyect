<div class="modal fade" id="cfc-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="cfc-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cfc-nuevoLabel">Agrupar Doctor & Especialidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/cfc/enviar') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="doc_id">Seleccionar Doctor</label>
                        <a data-toggle="tooltip" data-placement="top" title="">
                        </a>
                        <select multiple class="form-control" id="doc_id" name="doc_id[]" required>                       
                            @foreach ($doctores as $list)
                                <option value="{{ $list->doc_id }}">{{ $list->doc_nombres }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="stt_id">Seleccionar Tratamiento</label>
                        <select class="form-control" name="stt_id" id="stt_id" required>
                            <option value="" selected disabled>-- Escoja su Tratamiento --</option>
                            @foreach ($tratamiento as $list)
                                <option value="{{ $list->tra_id }}" >{{ $list->tra_nombre }}</option>
                            @endforeach
                        </select>
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
