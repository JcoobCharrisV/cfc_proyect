<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        table,
        td,
        th,
        tr {
            text-align: center;
            border: 1px solid rgb(0, 112, 192);
            font-family: Arial, Helvetica, sans-serif;
        }

        .text-information {
            font-size: 12px;
            padding: 0px !important;
            margin: 0px !important;

        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-5">
        <div class="col-12" style="margin-bottom: 5px">
            <table>
                <tbody>
                    <tr>
                        <th><img src="./img/favicon.png"></th>
                        <th style="color: rgb(0,112,192);">
                            <h1>CHECKLIST FASE<br> HIGIÉNICA</h1> <br> FECHA DE ATENCION:
                            {{ $pdfInfo[0]['fecha_atencion'] }}
                        </th>
                        <th><img src="./img/favicon.png"></th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-bottom:5px">
            <table>
                <tbody>
                    <tr>
                        <td class="text-information" colspan="2">
                            <p>NOMBRE PACIENTE: {{ $pdfInfo[0]['nombre_paciente'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-information">IDENTIFICACIÓN: {{ $pdfInfo[0]['tipo_identificacion'] }} -
                                {{ $pdfInfo[0]['documento'] }}</p>
                        </td>
                        <td>
                            <p class="text-information">TELÉFONO CELULAR: {{ $pdfInfo[0]['telefono'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-information">EDAD: {{ $pdfInfo[0]['edad'] }} AÑOS</p>
                        </td>
                        <td>
                            <p class="text-information">DOCTOR: {{ $pdfInfo[0]['nombre_doctor'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p class="text-information">CORREO ELECTRÓNICO: {{ $pdfInfo[0]['correo'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-information">SERVICIO: {{ $pdfInfo[0]['nombre_tratamiento'] }} </p>
                        </td>
                        <td>
                            <p class="text-information">PRÓXIMA ATENCIÓN: {{ $pdfInfo[0]['fecha_prox_gestion'] }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>


        <div>
            <table>
                <thead>
                    <div id="formato-checklist">
                        <table width="100%" cellspacing="0">
                            <thead style="background-color:  rgb(0,112,192); color: #ffff;">
                                <tr>
                                    <th rowspan="2" style="vertical-align:middle;">
                                        <h2>TAREA</h2>
                                    </th>
                                    <th style="padding-left:35px; padding-right:35px;" colspan="2">EFECTIVO</th>
                                    <th rowspan="2" style="vertical-align:middle;">
                                        <h2>OBSERVACIONES</h2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>SI</th>
                                    <th>NO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($pasospdf[0] == null)
                                    <tr>
                                        <td>Esta gestion no se le registraron pasos</td>
                                    </tr>
                                @else
                                    @for ($i = 0; $i < count($pasospdf); $i++)
                                        <tr>
                                            <td style="text-align: left;">{{ $pasospdf[$i]['paso_descripcion'] }}</td>
                                            @if ($pasospdf[$i]['verificador'] == 'SI')
                                                <td>X</td>
                                                <td></td>
                                            @else
                                                <td></td>
                                                <td>X</td>
                                            @endif
                                            <td>{{ $pasospdf[$i]['comentario'] }}</td>
                                        </tr>
                                    @endfor
                                @endif
                            </tbody>
                    </div>
                </thead>
            </table>
        </div>

        <div>
            <div id="formato-checklist">
                <table width="100%" cellspacing="0">
                    <tr style="background-color:  rgb(0,112,192); color: #ffff;">
                        <td>
                            <h2>OBSERVACIONES</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control" id="pregunta-1" rows="2">
                            {{ $pdfInfo[0]['observacion'] }}
                        </td>
                    </tr>          
                
                </table>
                {{-- <p>Firma Del Profesional: <img src="{{ $pdfInfo[0]['doc_foto'] }}" alt=""></p> --}}
                <p>Firma Del Profesional: <img src="./storage/{{ $pdfInfo[0]['doc_foto'] }}" width="100" alt=""></p>
            </div>
        </div>
    </div>
</body>

</html>
