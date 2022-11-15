<div class="modal fade" id="paciente-mantenimiento-ver" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="paciente-mantenimiento-verLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body">
                <body>
                    <div class="container-fluid px-5">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: rgb(0,112,192);">
                                    <thead>
                                        <tr>
                                            <th class=" text-center" style="width:250px ;" scope="col"
                                                rowspan="2"><img src="/img/favicon.png"></th>
                                            <th class="text-center" scope="col" style="color: rgb(0,112,192);">
                                                <h1>CHECKLIST FASE<br> HIGIÉNICA</h1> <br> FECHA DE
                                                ATENCION:{{--  fecha atencion --}}
                                            </th>
                                            <th class=" text-center" style="width:250px ;" scope="col"
                                                rowspan="2"><img src="/img/favicon.png" alt=""></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered" style="border-color: rgb(0,112,192);">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <h5>NOMBRE PACIENTE: {{--  Nombre --}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>IDENTIFICACIÓN: {{--  tipocedula --}} - {{--  cedula --}} </h5>
                                        </td>
                                        <td>
                                            <h5>TELÉFONO CELULAR: {{--  Numero telefno --}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>EDAD: {{--  edad --}} - {{--  fecha nacimiento --}} </h5>
                                        </td>
                                        <td>
                                            <h5>DOCTOR: {{--  Nombredoctor --}} </h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5>CORREO ELECTRÓNICO: {{--  correo --}} </h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>SERVICIO: {{--  tratamiento --}}</h5>
                                        </td>
                                        <td>
                                            <h5>PRÓXIMA ATENCIÓN: {{--  proxima-atencion --}}</h5>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                        <div class="col-12">
                            <table>
                                <thead>
                                    <div class="table-responsive" id="formato-checklist">
                                        <table class="table table-bordered table-sm checklist-tabla" width="100%"
                                            cellspacing="0">
                                            <thead style="background-color:  rgb(0,112,192); color: #ffff;">
                                                <tr>
                                                    <th class="text-center" rowspan="2"
                                                        style="vertical-align:middle;">
                                                        <h2>TAREA</h2>
                                                    </th>
                                                    <th class="text-center" colspan="2">EFECTIVO</th>
                                                    <th class="text-center" rowspan="2"
                                                        style="vertical-align:middle;">
                                                        <h2>OBSERVACIONES</h2>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">SI</th>
                                                    <th class="text-center">NO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left;"> {{--  tratamiento --}}</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="pregunta-1" id="1" value="1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="pregunta-1" id="2" value="2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" id="pregunta-1" rows="2"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </div>
                                </thead>
                            </table>
                        </div>

                        <div class="col-12">
                            <div class="table-responsive" id="formato-checklist">
                                <table class="table table-bordered table-sm checklist-tabla" width="100%"
                                    cellspacing="0">
                                    <tr style="background-color:  rgb(0,112,192); color: #ffff;">
                                        <td class="border"style="text-align: center;">
                                            <h2>OBSERVACIONES</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-control" id="pregunta-1" rows="2">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
                    </script>
                </body>


            </div>
        </div>
    </div>
</div>
