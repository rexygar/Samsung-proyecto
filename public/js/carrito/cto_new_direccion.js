$('#GuardarDir').on('click', function() {
    var url3 = $('#url3').val();
    var direccion = $('#NuevaDireccion').val();
    var reg = $('#regiones').val();
    var com = $('#comunas').val();

    var nom = $('#NombreDireccion').val()
    var apel = $('#ApellidoDireccion').val()
    var detalle_1 = $('#detalle_1').val()
    var detalle_2 = $('#detalle_2').val()

    var token = $("meta[name='csrf-token']").attr("content")
    $('#dirSelect').text($('#comunas').val() + ', ' + $('#regiones').val());
    $('#dirSelect1').text($('#comunas').val() + ', ' + $('#regiones').val());
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
            reg: reg,
            com: com,
            detalle_1: detalle_1,
            detalle_2: detalle_2,

        },
        success: function(data) {
            if (data["message"] == "Successful") {
                toastr["info"]("Su informacion ha sido guardada correctamente");
                console.log('data')

                //
                $('#msg').text(data.precio_comuna);
                $('#vlor_despacho').text(data.precio_comuna);
                var xx = data.precio_total.replace('.', '')
                var xy = data.precio_comuna.replace('.', '')
                $('#total_total').text(new Intl.NumberFormat("es-CL").format(new Number(xy) + new Number(xx)));
                //

                $('#siguienteButton').attr('disabled', false);
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