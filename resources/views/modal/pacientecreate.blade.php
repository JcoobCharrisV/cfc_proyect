<form action="{{ url('/paciente/enviar') }}" method="POST">
    @csrf
    <div class="modal fade" id="pacientecreate" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="paciente-nuevoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paciente-nuevoLabel">Nuevo Paciente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- FORMULARIO --}}
                    <form>
                        <div class="row">
                            {{-- NOMBRE --}}
                            <div class="form-group col-6 ">
                                <label for="pac_nombres">Nombres:</label>
                                <input type="text" name="pac_nombres" class="form-control" id="pac_nombres" required>
                            </div>
                            {{-- APELLIDO --}}
                            <div class="form-group col-6">
                                <label for="pac_apellidos">Apellidos:</label>
                                <input type="text" name="pac_apellidos" class="form-control" id="pac_apellidos" required>
                            </div>
                            {{-- TIPO DE CEDULA --}}
                            <div class="form-group col-6">
                                <label for="pac_tipo_identificacion">Tipo de Identificación:</label>
                                <select class="form-control" name="pac_tipo_identificacion" id="pac_tipo_identificacion" required>
                                    <option>CC - Cédula de Ciudadanía</option>
                                    <option>PP - Pasaporte</option>
                                    <option>TI - Tarjeta de identidad</option>
                                    <option>RC - Registro Civil</option>

                                </select>
                            </div>
                            {{-- NUMERO DE CEDULA --}}
                            <div class="form-group col-6">
                                <label for="pac_identificacion">Número de Identificación:</label>
                                <input type="number" name="pac_identificacion" class="form-control" id="pac_identificacion" required>
                            </div>
                            {{-- CORREO --}}
                            <div class="form-group col-12">
                                <label for="pac_correo">Correo Electrónico:</label>
                                <input type="email" name="pac_correo" class="form-control" id="paciente-correo" required>
                            </div>
                            {{-- TELEFONO --}}
                            <div class="form-group col-12">
                                <label for="pac_telefono">Teléfono Celular:</label>
                                <input type="number" name="pac_telefono" class="form-control" id="pac_telefono" required>
                            </div>
                            {{-- PAIS --}}
                            <div class="form-group col-6">
                                <label for="pac_pais_origen">Pais de origen:</label>
                                <input type="text" name="pac_pais_origen" class="form-control" id="pac_pais_origen" required>
                            </div>
                            {{-- RESIDENCIA --}}
                            <div class="form-group col-6">
                                <label for="pac_residencia">Residencia:</label>
                                <input type="text" name="pac_residencia" class="form-control" id="pac_residencia" required>
                            </div>
                            {{-- EDAD --}}
                            <div class="form-group col-12">
                                <label for="pac_edad">Edad:</label>
                                <input type="number" name="pac_edad" class="form-control" id="pac_edad" required>
                            </div>
                    </form>
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
