<form action="{{ url('/doctores/enviar') }}" method="POST">
  @csrf
  <div class="modal fade" id="doctorescreate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="doctor-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="doctor-nuevoLabel">Nuevo Doctor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">     
          <form>
            <div class="form-group">
              <label for="doc_nombres">Nombres</label>
              <input type="text" name="doc_nombres" class="form-control" id="doc_nombres" required>
            </div>
            <div class="form-group">
              <label for="doc_apellidos">Apellidos</label>
              <input type="text" name="doc_apellidos" class="form-control" id="doc_apellidos" required>
            </div>
            <div class="form-group">
              <label for="doc_tipo_identificacion">Tipo de Identificación</label>
              <select class="form-control" name="doc_tipo_identificacion" id="doc_tipo_identificacion" required>
                <option>CC - Cédula de Ciudadanía</option>
                <option>PP - Pasaporte</option>
                <option>RC - Registro Civil</option>
              </select>
            </div>
            <div class="form-group">
              <label for="doc_identificacion">Número de Identificación</label>
              <input type="number" name="doc_identificacion" class="form-control" id="doc_identificacion" required>
            </div>

            <div class="form-group">
              <label for="doc_fecha_nacimiento">Fecha de Nacimiento</label>
              <input type="date" name="doc_fecha_nacimiento" class="form-control" id="doc_fecha_nacimiento" required>
            </div>

            <div class="form-group">
              <label for="doc_genero">Genero</label>
              <select class="form-control" name="doc_genero" id="doc_genero" required>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Otro</option>
              </select>
            </div>
            <div class="form-group">
              <label for="doc_correo">Correo Electrónico</label>
              <input type="email" name="doc_correo" class="form-control" id="doc_correo" required>
            </div>
            <div class="form-group">
              <label for="doc_telefono">Teléfono Celular</label>
              <input type="number" name="doc_telefono" class="form-control" id="doc_telefono" required>
            </div>
          </form>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Cancelar</button>
          <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i>Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
