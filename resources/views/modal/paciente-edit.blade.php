<div class="modal fade" id="paciente-edit{{ $list->pac_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="paciente-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paciente-nuevoLabel">Actualizar Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- FORMULARIO --}}
                <form action="{{ route('paciente.update', $list->pac_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        {{-- NOMBRE --}}
                        <div class="form-group col-6 ">
                            <label for="pac_nombres">Nombres:</label>
                            <input type="text" value="{{ $list->pac_nombres }}" name="pac_nombres" required
                                class="form-control" id="pac_nombres">
                        </div>
                        {{-- APELLIDO --}}
                        <div class="form-group col-6">
                            <label for="pac_apellidos">Apellidos:</label>
                            <input type="text" value="{{ $list->pac_apellidos }}" name="pac_apellidos" required
                                class="form-control" id="pac_apellidos">
                        </div>
                        {{-- TIPO DE CEDULA --}}
                        <div class="form-group col-6">
                            <label for="pac_tipo_identificacion">Tipo de Identificación:</label>
                            <select class="form-control" value="{{ $list->pac_tipo_identificacion }}"
                                name="pac_tipo_identificacion" id="pac_tipo_identificacion">
                                <option>CC - Cédula de Ciudadanía</option>
                                <option>PP - Pasaporte</option>
                                <option>TI - Tarjeta de identidad</option>
                                <option>RC - Registro Civil</option>

                            </select>
                        </div>
                        {{-- NUMERO DE CEDULA --}}
                        <div class="form-group col-6">
                            <label for="pac_identificacion">Número de Identificación:</label>
                            <input type="number" value="{{ $list->pac_identificacion }}" name="pac_identificacion" required
                                class="form-control" id="pac_identificacion">
                        </div>
                        {{-- CORREO --}}
                        <div class="form-group col-12">
                            <label for="pac_correo">Correo Electrónico:</label>
                            <input type="email" value="{{ $list->pac_correo }}" name="pac_correo" class="form-control" required
                                id="paciente-correo">
                        </div>
                        {{-- TELEFONO --}}
                        <div class="form-group col-12">
                            <label for="pac_telefono">Teléfono Celular:</label>
                            <input type="number" value="{{ $list->pac_telefono }}" name="pac_telefono" required
                                class="form-control" id="pac_telefono">
                        </div>
                        {{-- PAIS --}}
                        <div class="form-group col-6">
                            <label for="pac_pais_origen">Pais de origen:</label>
                            <input type="text" value="{{ $list->pac_pais_origen }}" name="pac_pais_origen" required
                                class="form-control" id="pac_pais_origen">
                        </div>
                        {{-- RESIDENCIA --}}
                        <div class="form-group col-6">
                            <label for="pac_residencia">Residencia:</label>
                            <input type="text" value="{{ $list->pac_residencia }}" name="pac_residencia" required
                                class="form-control" id="pac_residencia">
                        </div>
                        {{-- EDAD --}}
                        <div class="form-group col-12">
                            <label for="pac_edad">Edad:</label>
                            <input type="number"value="{{ $list->pac_edad }}" name="pac_edad" class="form-control" required
                                id="pac_edad">
                        </div>

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
