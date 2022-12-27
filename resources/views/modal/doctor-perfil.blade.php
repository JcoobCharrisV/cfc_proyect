<div class="modal fade bd-example-modal-lg" id="doctor-perfil{{ $list->doc_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg b">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctor-nuevoLabel">Perfil Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row shadow m-2 p-2">
                    <div class="form-group col-6">
                        <label for="doc_identificacion">Número de Identificación:</label>
                        <input type="number" value="{{ $list->doc_identificacion }}" disabled name="doc_identificacion"
                            class="form-control" id="doc_identificacion" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="doc_tipo_identificacion">Tipo de Identificación:</label>
                        <input type="text" value="{{ $list->doc_tipo_identificacion }}" disabled name="doc_tipo_identificacion" class="form-control"
                            id="doc_tipo_identificacion" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_nombres">Nombres:</label>
                        <input type="text" value="{{ $list->doc_nombres }}" disabled name="doc_nombres" class="form-control"
                            id="doc_nombres" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_apellidos">Apellidos:</label>
                        <input type="text" value="{{ $list->doc_apellidos }}" name="doc_apellidos"
                            class="form-control" disabled id="doc_apellidos" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_genero">Genero:</label>
                        <input type="text" value="{{ $list->doc_genero }}" disabled name="doc_genero" class="form-control"
                            id="doc_genero" required>
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="doc_fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" value="{{ $list->doc_fecha_nacimiento }}" name="doc_fecha_nacimiento" disabled
                            class="form-control" id="doc_fecha_nacimiento" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_registro">Registro:</label>
                        <input type="text" value="{{ $list->doc_registro }}" name="doc_registro" class="form-control" disabled
                            id="doc_registro" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_ciudad_emision">Ciudad de Emision:</label>
                        <input type="text" value="{{ $list->doc_ciudad_emision }}" name="doc_ciudad_emision" disabled
                            class="form-control" id="doc_ciudad_emision" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_estado_civil">Ciudad de Emision:</label>
                        <input type="text" value="{{ $list->doc_estado_civil }}" name="doc_estado_civil" disabled
                            class="form-control" id="doc_estado_civil" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="doc_correo">Correo Electrónico:</label>
                        <input type="email" value="{{ $list->doc_correo }}" name="doc_correo" class="form-control" disabled
                            id="doc_correo" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="doc_telefono">Teléfono:</label>
                        <input type="number" value="{{ $list->doc_telefono }}" name="doc_telefono" class="form-control" disabled
                            id="doc_telefono" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="doc_celular">Celular:</label>
                        <input type="number" value="{{ $list->doc_celular }}" name="doc_celular" class="form-control" disabled
                            id="doc_celular" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="doc_direccion">Direccion De Residencia:</label>
                        <input type="text" value="{{ $list->doc_direccion }}" name="doc_direccion"
                            class="form-control" disabled id="doc_direccion" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="doc_residencia">Ciudad De Residencia:</label>
                        <input type="text" value="{{ $list->doc_residencia }}" name="doc_residencia"
                            class="form-control"  disabled id="doc_residencia" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
