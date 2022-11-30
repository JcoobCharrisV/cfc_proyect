<div class="modal fade" id="tratamientoedit{{ $list->tra_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="servicio-nuevoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="servicio-nuevoLabel">Actualizar Tratamiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tratamiento.update', $list->tra_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="ser_id">Seleccionar Servicio</label>
                        <select class="form-control" id="ser_id" name="ser_id">
                            <option value="{{ $list->ser_id }}" selected>{{ $list->ser_nombres }}</option>
                            <option value="" disabled>-- Escoja su servicio--</option>
                            @foreach ($servicio as $list2)
                                <option value="{{ $list2->ser_id }}">{{ $list2->ser_nombres }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tit_id">Seleccionar Tipo</label>
                        <select class="form-control" id="tit_id" name="tit_id">
                            <option value="{{ $list->tit_id }}" selected>{{ $list->tit_nombres }}</option>
                            <option value="" disabled>-- Escoja su tipo de tratamiento--</option>
                            @foreach ($tipos_tratamientos as $list3)
                                <option value="{{ $list3->tit_id }}">{{ $list3->tit_nombres }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tra_nombres">Tratamiento:</label>
                        <input type="text" class="form-control" value="{{ $list->tra_nombres }}" id="tra_nombres"
                            name="tra_nombres" rows="3">
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
