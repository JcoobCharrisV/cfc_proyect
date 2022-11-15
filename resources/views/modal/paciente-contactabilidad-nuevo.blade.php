<div class="modal fade" id="paciente-contactabilidad-nuevo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="paciente-contactabilidad-nuevoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paciente-contactabilidad-nuevoLabel">Nueva Contactabilidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="alert alert-warning" role="alert">
          <p class="alert-link">Próxima Atención: 24/11/2022 14:30</p>
          Nombre Completo: Jorge Cáceres <br>
          Teléfono Celular: 3043668820 <br>
        </div>

        <form>
          <div class="form-group">
            <label for="contactabilidad-fecha">Fecha Gestión</label>
            <a data-toggle="tooltip" data-placement="top" title="La fecha la toma del sistema">
              <i class="fas fa-info-circle fa-sm"></i>
            </a>
            <input type="datetime-local" class="form-control" id="contactabilidad-fecha" value="2022-10-23 15:15" disabled>
          </div>
          <div class="form-group">
            <label for="contactabilidad-tipificacion">Tipificación</label>
            <select class="form-control" id="contactabilidad-tipificacion">
              <option>Contactado</option>
              <option>No Contactado</option>
              <option>Buzón de Voz</option>
              <option>Número Equivocado</option>
            </select>
          </div>
          <div class="form-group">
            <label for="contactabilidad-observacion">Observación</label>
            <textarea class="form-control" id="contactabilidad-observacion" rows="3"></textarea>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Cancelar</button>
        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>