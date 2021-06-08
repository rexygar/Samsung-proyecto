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