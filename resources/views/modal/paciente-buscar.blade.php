<div class="modal fade" id="paciente-buscar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="paciente-buscarLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paciente-buscarLabel">Resultado Búsqueda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="PacienteBuscar" width="100%" cellspacing="0">
                <thead class="bg-gray-200">
                    <tr>
                        <th>Identificación</th>
                        <th>Nombre Completo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot class="bg-gray-200">
                    <tr>
                        <th>Identificación</th>
                        <th>Nombre Completo</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1143159076</td>
                        <td>Jorge Cáceres</td>
                        <td>
                          <a href="paciente-perfil.php" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye fa-sm"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Cancelar</button>
      </div>
    </div>
  </div>
</div>