$(document).ready(function() {

    var Tipo_Entrega = $('[name="Tipo_Entrega"]:checked').val();

    $('#Tipo_Entrega[value="1"]').on('click', function() {
        if (!$('input[name="tienda_id"]').checked) {
            $('#Tipo_Entrega[value="1"]').checked = false;
        }
    })

    if (!$('input[name="Tipo_Entrega"]').checked) {
        $('#siguienteButton').attr('disabled', true);
    }

    $('#buttonSig').attr('disabled', true);

    $('input[name="tienda_id"]').on('click', function() {
        $('#Tipo_Entrega[value="1"]').checked = true;
    })

    $('#buttonSig').on('click', function() {
        var rut = $('#NuevoRut').val();
        var nom = $('#NuevoNombre').val()
        var email = $('#NuevoEmail').val()
        var apel = $('#NuevoApellido').val()
        var tel = $('#Nuevo_nmro').val()
        if (nom == "" && apel == "" && rut == "" && tel == "" && email == "") {
            toastr["warning"]("Por favor Rellene los campos");
            return false;
        }
    })

    $('#editar').on('click', function() {
        var url = $('#url').val();
        var rut = $('#NuevoRut').val();
        var nom = $('#NuevoNombre').val()
        var email = $('#NuevoEmail').val()
        var apel = $('#NuevoApellido').val()
        var tel = $('#Nuevo_nmro').val()
        var cod = $('#codigo_nmro').val()
        var token = $("meta[name='csrf-token']").attr("content")
        var TELEFONO = String(tel);
        var codigo = String(cod);
        var num = codigo + TELEFONO;

        if (nom == "") {
            toastr["warning"]("Por favor ingresar Nombre");
            return false;
        }

        if (apel == "") {
            toastr["warning"]("Por favor ingresar Apellido");
            return false;
        }

        if (email == "") {
            toastr["warning"]("Por favor ingresar Correo");
            return false;
        }

        if (tel == "") {
            toastr["warning"]("Por favor ingresar Telefono");
            return false;
        }
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: token,
                rut: rut,
                nom: nom,
                email: email,
                apel: apel,
                num: num,

            },
            success: function(data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Su informacion ha sido guardada correctamente");
                    console.log('data')

                    //
                    $('#msg').text(data.precio_comuna);
                    //

                    $('#buttonSig').attr('disabled', false);
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                }
            },
            error: function(data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });

    $('#Seleccionar_Dir').on('click', function() {
        var url = $('#url5').val();
        var token = $("meta[name='csrf-token']").attr("content")
        var direccion = $('[name="dir_id"]:checked').val();

        if (direccion == "") {
            toastr["warning"]("Por favor ingresar Nombre");
        }
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: token,
                direccion: direccion,
            },
            success: function(data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Se ha actualizado su direccion de despacho correctamente");
                    console.log('data');

                    //
                    $('#msg').text(data.precio_comuna);
                    $('#vlor_despacho').text(data.precio_comuna);
                    var xx = data.precio_total.replace('.', '')
                    var xy = data.precio_comuna.replace('.', '')
                    $('#total_total').text(new Intl.NumberFormat("es-CL").format(new Number(xy) + new Number(xx)));
                    //

                    if (data.direccion != null) {
                        $('#dirSelect').text(data.direccion[0].region + ', ' + data.direccion[0].comuna);
                    } else {
                        $('#dirSelect').text(data.reg + ', ' + data.com);
                    }
                    $('#siguienteButton').attr('disabled', false);
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                    console.log(data);
                }
            },
            error: function(data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });


});