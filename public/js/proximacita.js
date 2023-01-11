
$("#form_id").on("submit", function(e){
    
   e.preventDefault();

   $.ajax({
            url         : '/cita/enviar',
            type        : 'POST',
            data        : {val:inputs}, //Aquí tienes que enviar la información que necesita formula.html si no tiene nada puedes dejarlo así {}
            cache       : false,
            async       : false,
            dataType    : 'json',
            contentType : "application/json",
            success: function(response)
            {
               alert('datos guardados')
            },
            error : function(response)
            {
                alert('error al guardar los datos')
            }
        })
   return false;
})