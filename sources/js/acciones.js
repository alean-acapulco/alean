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

$('.account-type-radio').on('click', function() {
    var id_tipoUsuario = $(this).val();
});




/* :::::::::... FUNCION PARA REGISTRAR UN USUARIOS ...:::::::::: */
$('#registroUsuario').on('click', function() {

    var id_tipoUsuario = "";
    $("input:radio:checked").each(
        function() {
            id_tipoUsuario += $(this).val()

        }
    );

    var nombre = $('#txt_nombre').val();
    var apellidos = $('#txt_apellidos').val();
    var fecha_N = $('#txt_fechaN').val();
    var curp = $('#txt_curp').val();
    var email = $('#txt_correo').val();
    var cel = $('#txt_cel').val();
    var tel = $('#txt_tel').val();
    var facebook = $('#txt_facebook').val();
    var ciudad = $('#select_ciudad').val();
    var servicio = $('#servicios').val();
    var sexo = $('#select_sexo').val();
    alert(servicio);
});
/* :::::::::... FUNCION PARA REGISTRAR UN USUARIOS ...:::::::::: */


/* ::::::::... CONVERTIR CURP EN MAYUSCULAS ..:::::::: */
function Curp() {
    var x = document.getElementById("txt_curp");
    x.value = x.value.toUpperCase();
}
/* ::::::::... CONVERTIR CURP EN MAYUSCULAS ..:::::::: */

function validarPassoword() {
    var pass2 = $('#txt_password2').val();
    var pass = $('#txt_password').val();
    if (pass2 == pass) {
        document.getElementById('passResp').style.color = "#28a745";
        $("#passResp").html("¡Las contraseñas coinciden!");
    } else {
        $("#passResp").html("¡La contraseña no coinciden!");
        document.getElementById('passResp').style.color = "#dc3545";
    }
}