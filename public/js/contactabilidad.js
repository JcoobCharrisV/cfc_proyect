
function contactabilidad() {
    var nombres = $("#pac_nombres_js").val();
    var telefono = $("#pac_telefono_js").val();
    console.log(nombres, telefono);

    $('#pac_nombres_lbl').html(nombres); 
    $('#pac_telefono_lbl').html(telefono); 
    
}
