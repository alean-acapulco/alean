/* FILTRAR PARA SELECIONAR EL SERVICIO */
$('#sel_catSev').on('change', function() {
    var id_categoria = $(this).val();
    var datos = new FormData();
    datos.append("id_categoria", id_categoria);
    $.ajax({
        type: 'POST',
        url: 'sources/ajax/servicios.ajax.php',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {

            $("#servicios").html(respuesta);

        }

    });
});
/* FILTRAR PARA SELECIONAR EL SERVICIO*/