window.onload = function(){
    
    let $tra_id = document.getElementById('tra_id');
    let $combo_fec = document.getElementById('ges_frecuencia_mantenimiento');

    $tra_id.addEventListener('change', () => {
        const tra_id = $tra_id.value

        const cargarDatos = {
            'tra_id': tra_id
        }

        cargarpasos(cargarDatos)

    })

    $combo_fec.addEventListener('change', () => {
        fechaproxima()
    })

    
    function cargarpasos(cargarDatos) {
            var listado = $("[name=tbody_check]");


        $.ajax({
            url: '/proceso/mantenimiento',
            type: 'GET',
            dataType: 'json',
            data: cargarDatos,
            success: function (response) {

                var resp = response;
                var data = resp.pasos; 
                listado.empty();
                var tablacheck = document.getElementById("formato-checklist3");
                var miCheckbox_si = document.getElementById('check_si');
                var miCheckbox_no = document.getElementById('check_no');
                if (data.length != 0) {
                    tablacheck.style.display = "";
                    miCheckbox_no.disable = true;
                    miCheckbox_si.click();

                    for (var index = 0; index < data.length; index++) {
                        var item = data[index];
                        listado.append(
                            '<tr>' +
                                '<td class="text-center" scope="col" style="vertical-align: middle;">'+ item['pas_descripcion'] +'</td>' +
                                '<td class="text-center" scope="col" style="vertical-align: middle;">'+
                                '<input class="m-1 p-2" style="padding-top:30px !important"  type="checkbox" value="'+item['pas_id']+'" name="pasos[]">'+
                                '</td>' +
                                '<td class="text-center" scope="col">'+
                                '<textarea class="form-control" name="comentariocheck['+item['pas_id']+']" id="" rows="3"></textarea>'+ 
                                '</td>' +
                            '</tr>'
                        );
                    } 
                }else{
                    tablacheck.style.display = "none";
                    miCheckbox_no.click();
                    miCheckbox_si.disable = true;
                }
               
            },
            error: function (jqXHR) {
                console.log('error!');
            }
        });

        
    }

    function fechaproxima(){

        let $numero_prox_fecha = document.getElementById('ges_frecuencia_mantenimiento_numero').value;
        let $tipo_prox_fecha = document.getElementById('ges_frecuencia_mantenimiento').value;

        switch ($tipo_prox_fecha) {
            case "dias":
                $dias = $numero_prox_fecha;
                break;
            case "meses":
                $dias = $numero_prox_fecha*31;
                break;
            case "semanas": 
                $dias = $numero_prox_fecha*7;
                break;
            case "years":
                $dias = $numero_prox_fecha*365;
                break;
            default:
                $dias = 0;
        }  
        
        if($dias != 0){
            let hoy = new Date();
            let fchMilisegundos = 1000 * 60 * 60 * 24 * $dias;
            let suma = hoy.getTime() + fchMilisegundos; //getTime devuelve milisegundos de esa fecha
            let fechaDentroDeUnaSemana = new Date(suma).toLocaleDateString();

            document.getElementById('ges_fecha_prox_atencion').value = fechaDentroDeUnaSemana;
            document.getElementById('ges_fecha_prox_atencion1').value = fechaDentroDeUnaSemana;
        }

        
    }
    
}


