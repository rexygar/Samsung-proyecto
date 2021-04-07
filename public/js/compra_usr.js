$(document).ready(function () {
    $('#editar').on('click', function () {
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
        num = codigo + TELEFONO;
        if (nom == "") {
            toastr["warning"]("Por favor ingresar Nombre");
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
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Su informacion ha sido guardada correctamente");
                    console.log('data')
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });

    $('#GuardarDir').on('click', function () {
        var url3 = $('#url3').val();
        var direccion = $('#NuevaDireccion').val();
        var nom = $('#NombreDireccion').val()
        var apel = $('#ApellidoDireccion').val()
        var detalle_1 = $('#detalle_1').val()
        var detalle_2 = $('#detalle_2').val()

        var token = $("meta[name='csrf-token']").attr("content")

        if (nom == "") {
            toastr["warning"]("Por favor ingrese su Nombre");
            return false;
        }
        if (apel == "") {
            toastr["warning"]("Por favor ingrese su Apellido");
            return false;
        }

        if (direccion == "") {
            toastr["warning"]("Por favor ingrese su Direccion");
            return false;
        }
        $.ajax({
            url: url3,
            type: 'GET',
            data: {
                _token: token,
                nom: nom,
                apel: apel,
                direccion: direccion,
                apel: apel,
                detalle_1: detalle_1,
                detalle_2: detalle_2,

            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Su informacion ha sido guardada correctamente");
                    console.log('data')
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });

    $('#Seleccionar_Dir').on('click', function () {
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
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Se ha actualizado su direccion de despacho correctamente");
                    console.log('data')
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                    console.log(data);
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });
    $('#GuardarTienda').on('click', function () {
        var url = $('#url2').val();
        var token = $("meta[name='csrf-token']").attr("content")
        var tienda = $('[name="tienda_id"]:checked').val();

        if (tienda == "") {
            toastr["warning"]("Por favor ingresar Nombre");
        }
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: token,
                tienda: tienda,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Su informacion ha sido guardada correctamente");
                    console.log('data')
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                    console.log(data);
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    })

});