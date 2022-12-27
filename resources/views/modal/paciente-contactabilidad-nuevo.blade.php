<div class="modal fade" id="paciente-contactabilidad-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="paciente-contactabilidad-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paciente-contactabilidad-nuevoLabel">Nueva Contactabilidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">
                    @csrf

                    @foreach ($gestion as $list)
                        <div class="alert alert-warning" role="alert">
                            <p class="alert-link">Próxima Atención: {{ $list->ges_fecha_prox_atencion }}</p>
                            <strong>Nombres:</strong>
                            <label for="pac_nombres" name="pac_nombres" id="pac_nombres_lbl"></label><br>
                            <strong>Telefono:</strong>
                            <label for="pac_telefono" name="pac_telefono" id="pac_telefono_lbl"></label><br>
                        </div>
                    @endforeach

                    @php
                        date_default_timezone_set('America/Bogota');
                    @endphp

                    <div class="form-group">
                        <label for="rec_fecha">Fecha Gestión:</label>
                        <a data-toggle="tooltip" data-placement="top" title="La fecha la toma del sistema">
                            <i class="fas fa-info-circle fa-sm"></i>
                        </a>
                        <a class="form-control" id="rec_fecha" name="rec_fecha " value="{{ old('rec_fecha ') }}">
                            {{ $fecha_actual = date('Y-d-m H:i:s') }}</a>
                        <input type="text" style="display:none;" class="alert-link" id="rec_fecha " name="rec_fecha "
                            value="{{ $fecha_actual = date('Y-d-m H:i:s') }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="tip_id ">Tipificación:</label>
                        <select class="form-control" id="tip_id" name="tip_id" required>
                            <option value="" selected disabled>-- Escoja su Tipificación--</option>
                            @foreach ($tipificacion as $list)
                                <option value="">
                                    {{ $list->tip_nombres }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rec_comentario">Observación:</label>
                        <textarea class="form-control" id="rec_comentario" name="rec_comentario" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                        class="fas fa-times mr-1"></i>Cancelar</button>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i>Guardar</button>
            </div>
           
        </div>
    </div>
</div>
