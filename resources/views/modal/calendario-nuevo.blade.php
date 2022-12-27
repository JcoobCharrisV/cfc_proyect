<div class="modal fade" id="calendario-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="calendario-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendario-nuevoLabel">Inhabilitar Fechas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/calendario/enviar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="inh_fecha">Fecha Inicio:</label>
                                <input type="date" class="form-control" name="inh_fecha" id="inh_fecha" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inh_motivo">Motivo:</label>
                        <textarea class="form-control" id="inh_motivo" name="inh_motivo" rows="3" required></textarea>
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
