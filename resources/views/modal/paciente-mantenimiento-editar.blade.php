<div class="modal fade" id="paciente-mantenimiento-editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="paciente-mantenimiento-editarLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paciente-mantenimiento-editarLabel">Editar Mantenimiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>

          <label for="mantenimiento-servicio-doctor">Servicio Prestado</label>
          <div class="input-group mb-2">
            <select class="form-control" id="listar-servicio">
              <option>Servicio 1 - Tratamiento 1 - Tipo 1</option>
              <option>Servicio 2 - Tratamiento 2 - Tipo 2</option>
              <option>Servicio 3 - Tratamiento 3 - Tipo 3</option>
              <option>Servicio 4 - Tratamiento 4 - Tipo 4</option>
            </select>
            <select class="form-control" id="listar-doctor">
              <option>Roberto Arcon</option>
              <option>Hernan Ochoa</option>
              <option>Fabiana Tejera</option>
            </select>
          </div>

          <label for="formato-checklist">Diligenciar Formato Checklist</label>
          <div class="form-group mb-2">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="formato-checklist" id="si" value="1">
              <label class="form-check-label" for="si">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="formato-checklist" id="no" value="2">
              <label class="form-check-label" for="no">No</label>
            </div>
          </div>

          <div class="table-responsive" id="formato-checklist">
            <label for="formato-checklist-tabla">Formato Checklist</label>
            <table class="table table-bordered table-sm checklist-tabla" width="100%" cellspacing="0">
              <thead class="bg-gray-300">
                <tr>
                  <th rowspan="2" style="vertical-align:middle;">Tarea</th>
                  <th colspan="2">Efectivo</th>
                  <th rowspan="2" style="vertical-align:middle;">Observaciones</th>
                </tr>
                <tr>
                  <th>Si</th>
                  <th>No</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: left;">Fotos Intraorales del paciente</td>
                  <td>
                    <div class="form-check">  
                      <input class="form-check-input" type="radio" name="pregunta-1" id="1" value="1">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">  
                      <input class="form-check-input" type="radio" name="pregunta-1" id="2" value="2">
                    </div>
                  </td>
                  <td><textarea class="form-control" id="pregunta-1" rows="2"></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="mantenimiento-frecuencia">Frecuencia del Mantenimiento</label>
              <div class="input-group mb-2">
                <input type="number" aria-label="Numero" id="mantenimiento-frecuencia-1" class="form-control">
                <select class="form-control" id="mantenimiento-frecuencia-2">
                  <option>Días</option>
                  <option>Semanas</option>
                  <option>Meses</option>
                  <option>Años</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mantenimiento-fecha">Fecha Próxima Atención</label>
                <a data-toggle="tooltip" data-placement="top" title="La fecha se calcula automáticamente">
                  <i class="fas fa-info-circle fa-sm"></i>
                </a>
                <input type="datetime-local" class="form-control" id="mantenimiento-fecha">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="mantenimiento-observacion">Observación</label>
            <textarea class="form-control" id="mantenimiento-observacion" rows="3"></textarea>
          </div>

          

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Cancelar</button>
        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-sync-alt mr-1"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>