<div class="modal fade bd-example-modal-lg" id="doctoresedit{{ $list->doc_id }}" data-backdrop="static"
    data-keyboard="false" tabindex="-1" aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctor-nuevoLabel">Actualizar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('doctor.update', $list->doc_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row shadow m-2 p-2">
                        <div class="form-group col-6">
                            <label for="doc_identificacion">Número de Identificación:</label>
                            <input type="number" value="{{ $list->doc_identificacion }}" name="doc_identificacion"
                                class="form-control" id="doc_identificacion" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_tipo_identificacion">Tipo de Identificación:</label>
                            <select class="form-control" value="{{ $list->doc_tipo_identificacion }}"
                                name="doc_tipo_identificacion" id="doc_tipo_identificacion" required>
                                <option value="{{ $list->doc_tipo_identificacion }}" disabled selected>
                                    {{ $list->doc_tipo_identificacion }}</option>
                                
                                <option>CC - Cédula de Ciudadanía</option>
                                <option>PP - Pasaporte</option>
                                <option>RC - Registro Civil</option>
                            </select>
                        </div>

                        <div class="form-group col-6">
                            <label for="doc_nombres">Nombres:</label>
                            <input type="text" pattern="[a-z A-Z]{3,}" value="{{ $list->doc_nombres }}" name="doc_nombres"
                                class="form-control" id="doc_nombres" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="doc_apellidos">Apellidos:</label>
                            <input type="text" pattern="[a-z A-Z]{3,}" value="{{ $list->doc_apellidos }}" name="doc_apellidos"
                                class="form-control" id="doc_apellidos" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_genero">Genero:</label>
                            <select class="form-control" value="{{ $list->doc_genero }}" name="doc_genero"
                                id="doc_genero" required>
                                <option value="{{ $list->doc_genero }}"  disabled selected>
                                    {{ $list->doc_genero }}</option>                               
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option>Otro</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_fecha_nacimiento">Fecha de Nacimiento:</label>
                            <input type="date" value="{{ $list->doc_fecha_nacimiento }}" name="doc_fecha_nacimiento" class="form-control"
                                id="doc_fecha_nacimiento" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="doc_registro">Registro:</label>
                            <input type="text" value="{{ $list->doc_registro }}" name="doc_registro" class="form-control" id="doc_registro" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="doc_ciudad_emision">Ciudad de Emision:</label>
                            <input type="text" pattern="[a-z A-Z]{3,}" value="{{ $list->doc_ciudad_emision }}" name="doc_ciudad_emision" class="form-control" id="doc_ciudad_emision"
                                required>
                        </div>

                        <div class="form-group col-6">
                            <label for="doc_estado_civil">Estado Civil:</label>
                            <select class="form-control" name="doc_estado_civil" name="doc_estado_civil" id="doc_estado_civil" required>
                                <option value="{{ $list->doc_estado_civil }}"  disabled selected>
                                    {{ $list->doc_estado_civil }} </option>
                                
                                <option>Soltero</option>
                                <option>Casado</option>
                                <option>Viudo</option>
                                <option>Union libre</option>
                                <option>Otro</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_correo">Correo Electrónico:</label>
                            <input type="email" value="{{ $list->doc_correo }}" name="doc_correo" class="form-control" id="doc_correo" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_telefono">Teléfono:</label>
                            <input type="number" value="{{ $list->doc_telefono }}" name="doc_telefono" class="form-control" id="doc_telefono" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_celular">Celular:</label>
                            <input type="number" value="{{ $list->doc_celular }}" name="doc_celular" class="form-control" id="doc_celular" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_direccion">Direccion De Residencia:</label>
                            <input type="text" value="{{ $list->doc_direccion }}" name="doc_direccion" class="form-control" id="doc_direccion"
                                required>
                        </div>
                        <div class="form-group col-6">
                            <label for="doc_residencia">Ciudad De Residencia:</label>
                            <input type="text" pattern="[a-z A-Z]{3,}" value="{{ $list->doc_residencia }}" name="doc_residencia" class="form-control" id="doc_residencia"
                                required>
                        </div>

                        {{-- <div class="form-group p-3 col-12">
                            <strong>Firma Digital Del Doctor: </strong>
                            <input type="file" class="form-control-file" style="border: 1px solid rgb(0,0,0,0.2)">                            
                        </div> --}}

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
