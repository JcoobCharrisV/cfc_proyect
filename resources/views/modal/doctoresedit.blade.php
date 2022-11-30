<div class="modal fade" id="doctoresedit{{ $list->doc_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctor-nuevoLabel">Actualizar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('doctor.update', $list->doc_id) }}" method="POST">
                  @csrf
                  @method('PUT')
                    <div class="form-group">
                        <label for="doc_nombres">Nombres:</label>
                        <input type="text" value="{{ $list->doc_nombres }}" name="doc_nombres" class="form-control" required
                            id="doc_nombres">
                    </div>
                    <div class="form-group">
                        <label for="doc_apellidos">Apellidos:</label>
                        <input type="text" value="{{ $list->doc_apellidos }}" name="doc_apellidos" required
                            class="form-control" id="doc_apellidos">
                    </div>
                    <div class="form-group">
                        <label for="doc_tipo_identificacion">Tipo de Identificación:</label>
                        <select class="form-control" value="{{ $list->doc_tipo_identificacion }}"
                            name="doc_tipo_identificacion" id="doc_tipo_identificacion">
                            <option>{{ $list->doc_tipo_identificacion }}</option>
                            <option>CC - Cedula</option>
                            <option>PP - Pasaporte</option>
                            <option>RC - Registro Civil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="doc_identificacion">Número de Identificación:</label>
                        <input type="number" value="{{ $list->doc_identificacion }}" name="doc_identificacion" required
                            class="form-control" id="doc_identificacion">
                    </div>

                    <div class="form-group">
                        <label for="doc_fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" value="{{ $list->doc_fecha_nacimiento }}" name="doc_fecha_nacimiento" required
                            class="form-control" id="doc_fecha_nacimiento">
                    </div>
                        
                    <div class="form-group">
                        <label for="doc_correo">Correo Electrónico:</label>
                        <input type="email" value="{{ $list->doc_correo }}" name="doc_correo" class="form-control" required
                            id="doc_correo">
                    </div>
                    <div class="form-group">
                        <label for="doc_telefono">Teléfono Celula:</label>
                        <input type="number" value="{{ $list->doc_telefono }}" name="doc_telefono" class="form-control" required
                            id="doc_telefono">
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
