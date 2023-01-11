<form action="{{ url('/proceso/mantenimiento') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="paciente-mantenimiento-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="paciente-mantenimiento-nuevoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paciente-mantenimiento-nuevoLabel">Nuevo Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="text" value="{{ $id }}" name="pac_id" style="display:none;">
                {{-- -modal mantenimiento fecha   --}}
                <div class="modal-body">
                    @php
                        date_default_timezone_set('America/Bogota');
                    @endphp
                    
                    <div class="alert alert-warning text-center" role="alert">
                        <a class="alert-link" id="ges_fecha_atencion" name="ges_fecha_atencion"
                            value="{{ old('ges_fecha_atencion') }}">Fecha de
                            Atención:{{ $fecha_actual = date('Y-d-m H:i:s') }}</a>
                        <input type="text" style="display:none;" class="alert-link" id="ges_fecha_atencion"
                            name="ges_fecha_atencion" value="{{ $fecha_actual = date('Y-d-m H:i:s') }}">
                    </div>

                    <form>
                        {{-- combobox con los servicios, tipos, tratamientos --}}
                        <label for="mantenimiento-servicio-doctor">Tratamiento Prestado</label>
                        <div class="input-group mb-2">
                            <select class="form-control" id="tra_id" name="tra_id" required>
                                <option value="" selected disabled>-- Escoja su tratamiento--</option>
                                @foreach ($mantenimientos as $list)
                                    <option value="{{ $list->tra_id }}">
                                        {{ $list->tra_nombres }}

                                    </option>
                                @endforeach
                            </select>

                            <select class="form-control" id="doc_id" name="doc_id" required>
                                <option value="" selected disabled>-- Escoja su doctor --</option>
                                {{-- @foreach ($doctores as $list)
                                    <option value="{{ $list->doc_id }}">{{ $list->doc_nombres }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        {{-- formato de checklist segun el servicio --}}
                        <label for="formato-checklist">Diligenciar Formato Checklist</label>
                        <div class="form-group mb-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formato-checklist" id="check_si"
                                    value="1" onchange="check()" disabled>
                                <label class="form-check-label" for="si">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formato-checklist" id="check_no"
                                    value="2" onchange="check()" disabled>
                                <label class="form-check-label" for="no">No</label>
                            </div>
                        </div>
                        {{-- tabla del checklist segun el servicio --}}
                        <div class="table-responsive" id="formato-checklist3" style="display: none">
                            <label for="formato-checklist-tabla">Formato Checklist</label>
                            <table class="table table-bordered table-sm checklist-tabla" width="100%" cellspacing="0">
                                <thead class="bg-gray-300">
                                    <tr>
                                        <th rowspan="2" style="vertical-align:middle;">Tarea</th>
                                        <th>Efectivo</th>
                                        <th rowspan="2" style="vertical-align:middle;">Observaciones</th>
                                    </tr>
                                </thead>
                                <tbody name="tbody_check">

                                </tbody>
                            </table>
                        </div>

                        {{-- frecuencia de la gestion del mantenimiento --}}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="mantenimiento-frecuencia">Frecuencia del Mantenimiento</label>
                                <div class="input-group mb-2">
                                    <input type="number" aria-label="Numero" id="ges_frecuencia_mantenimiento_numero"
                                        name="ges_frecuencia_mantenimiento_numero" class="form-control"
                                        value="{{ old('ges_frecuencia_mantenimiento') }}" required>
                                    <select class="form-control" id="ges_frecuencia_mantenimiento"
                                        name="ges_frecuencia_mantenimiento" required>
                                        <option value="">-- Seleccionar --</option>
                                        <option value="dias">Días</option>
                                        <option value="semanas">Semanas</option>
                                        <option value="meses">Meses</option>
                                        <option value="years">Años</option>
                                    </select>
                                </div>
                            </div>

                            {{-- fecha de la proxima atencion --}}

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mantenimiento-fecha">Fecha Próxima Atención</label>
                                    <a data-toggle="tooltip" data-placement="top"
                                        title="La fecha se calcula automáticamente">
                                        <i class="fas fa-info-circle fa-sm"></i>
                                    </a>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="ges_fecha_prox_atencion"
                                                id="ges_fecha_prox_atencion"
                                                value="{{ old('ges_fecha_prox_atencion') }}"disabled required>
                                            <input style="display:none;" type="text" class="form-control"
                                                name="ges_fecha_prox_atencion" id="ges_fecha_prox_atencion1"
                                                value="{{ old('ges_fecha_prox_atencion') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" class="form-control" name="ges_hora_prox_atencion"
                                                id="ges_hora_prox_atencion"
                                                value="{{ old('ges_hora_prox_atencion1') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Observacion de la gestion en mantenimiento --}}
                        <div class="form-group">
                            <label for="mantenimiento-observacion">Observación</label>
                            <textarea class="form-control" id="ges_notas" rows="3" name="ges_notas" value="{{ old('ges_notas') }}"
                                required></textarea>
                        </div>
                    </form>

                    {{-- Proxima cita --}}
                    <div class="row">
                        <div class="col-md-6">
                            <a type="button" data-toggle="modal"
                            data-target="#agendarcitaprox"
                            class="btn btn-sm btn-primary">Agendar Proxima Cita <i
                                class="fas fa-book"></i></a>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="doc_foto">Firma Digital del Profesional</label>
                        @foreach ($gestiones as $list )                       
                        <input type="file" class="form-control-file" name="doc_foto" id="doc_foto">
                        {{ $list->doc_foto }}
                        @endforeach
                    </div>

                    {{-- Guardar Datos --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                            class="fas fa-times mr-1"></i>Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i
                            class="fas fa-save mr-1"></i>Guardar</button>
                </div>

            </div>
        </div>
    </div>
</form>
