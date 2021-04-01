$(document).ready(function () {
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
})