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