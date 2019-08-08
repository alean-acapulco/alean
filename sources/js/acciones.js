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


/* :::::::::::::.. APARECER LA PARTE DE SERVICIOS ...::::::::: */
$('#employer-radio').on('click', function() {
    var servicios = document.getElementById("opcionServicio");
    var servicios2 = document.getElementById("opcionServicio2");
    var tituloServicio = document.getElementById("titServ");
    var tituloCliente = document.getElementById("titCliente");

    servicios.style.display = "block";
    servicios2.style.display = "block";
    tituloServicio.style.display = "block";
    tituloCliente.style.display = "none";
});
/* :::::::::::::.. APARECER LA PARTE DE SERVICIOS ...::::::::: */


/* :::::::::::::.. APARECER LA PARTE DE SERVICIOS ...::::::::: */
$('#freelancer-radio').on('click', function() {
    var servicios = document.getElementById("opcionServicio");
    var servicios2 = document.getElementById("opcionServicio2");
    var tituloServicio = document.getElementById("titServ");
    var tituloCliente = document.getElementById("titCliente");

    servicios.style.display = "none";
    servicios2.style.display = "none";
    tituloServicio.style.display = "none";
    tituloCliente.style.display = "block";

});
/* :::::::::::::.. APARECER LA PARTE DE SERVICIOS ...::::::::: */



/* :::::::::... FUNCION PARA REGISTRAR UN USUARIOS ...:::::::::: */
$('#generarUsuario').on('click', function() {

    var id_tipoUsuario = "";
    $("input:radio:checked").each(
        function() {
            id_tipoUsuario += $(this).val()

        }
    );


    var pass2 = $('#txt_password2').val();
    var pass = $('#txt_password').val();

    var nombre = $('#txt_nombre').val();
    var apellidos = $('#txt_apellidos').val();
    var fecha_N = $('#fechaN').val();
    var curp = $('#txt_curp').val();
    var email = $('#txt_correo').val();
    var cel = $('#txt_cel').val();
    var tel = $('#txt_tel').val();
    var ciudad = $('#select_ciudad').val();
    var servicio = $('#servicios').val();
    var sexo = $('#select_sexo').val();

    if (ciudad == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, elige la ciudad en donde vives",
            icon: "warning",
            button: "Aceptar",
        });
    } else if (id_tipoUsuario == 2 && servicio == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, elige el tipo de servicio que ofreceras a tus clientes",
            icon: "warning",
            button: "Aceptar",
        });
    } else if (nombre == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, asigna tu nombre",
            icon: "warning",
            button: "Aceptar",
        });

    } else if (apellidos == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, asigna tus apellidos",
            icon: "warning",
            button: "Aceptar",
        });


    } else if (fecha_N == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, asigna tu fecha de nacimiento",
            icon: "warning",
            button: "Aceptar",
        });


    } else if (sexo == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro,elige tu identidad sexual",
            icon: "warning",
            button: "Aceptar",
        });

    } else if (email == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, asigna un correo electronico",
            icon: "warning",
            button: "Aceptar",
        });


    } else if (cel == "") {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, asigna un numero de celular",
            icon: "warning",
            button: "Aceptar",
        });

    } else if (curp.length < 18) {
        swal({
            title: "¡Aviso!",
            text: "Para completar tu registro, asigna una CURP valida",
            icon: "warning",
            button: "Aceptar",
        });
    } else if (pass != pass2 && pass2 != pass) {
        swal({
            title: "¡Aviso!",
            text: "Las contraseñas no coinciden",
            icon: "warning",
            button: "Aceptar",
        });

    } else {

        var datos = new FormData();
        datos.append("nombre", nombre);
        datos.append("apellidos", apellidos);
        datos.append("ciudad", ciudad);
        datos.append("tipo_usuario", id_tipoUsuario);
        datos.append("fecha_N", fecha_N);
        datos.append("curp", curp);
        datos.append("email", email);
        datos.append("cel", cel);
        datos.append("tel", tel);
        datos.append("sexo", sexo);
        datos.append("servicio", servicio);
        datos.append("password", pass2);

        $.ajax({
            type: 'POST',
            url: 'sources/ajax/registroUsuarios.ajax.php',
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {




            }

        });

    }


});
/* :::::::::... FUNCION PARA REGISTRAR UN USUARIOS ...:::::::::: */


/* ::::::::... CONVERTIR CURP EN MAYUSCULAS ..:::::::: */
function Curp() {
    var x = document.getElementById("txt_curp");
    x.value = x.value.toUpperCase();
}
/* ::::::::... CONVERTIR CURP EN MAYUSCULAS ..:::::::: */

function validarPassoword() {
    var btnRegistrar = document.getElementById("generarUsuario");

    var pass2 = $('#txt_password2').val();
    var pass = $('#txt_password').val();
    if (pass2 == pass && pass == pass2) {
        document.getElementById('passResp').style.color = "#28a745";
        btnRegistrar.style.display = "block";
        $("#passResp").html("¡Las contraseñas coinciden!");
    } else {
        $("#passResp").html("¡La contraseña no coinciden!");
        document.getElementById('passResp').style.color = "#dc3545";
    }
}

/* :::::::.... FUNCTION PARA COMPROBAR SI LOS ELEMENTOS ESTAN VACIOS ...:::::::: */
$(document).ready(function() {


});
/* :::::::.... FUNCTION PARA COMPROBAR SI LOS ELEMENTOS ESTAN VACIOS ...:::::::: */