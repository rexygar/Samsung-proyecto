$(document).ready(function(){
    $('#crear').on('click', function(){
        var url = $('#url').val();
        var nomBan = $('#nombreBanco').val()
        var numCuen = $('#numeroCuenta').val()
        var tipoCuen = $('#tipoCuenta').val()
        var nomCuen = $('#nombreCuenta').val()
        var correo = $('#emailCuenta').val()
        var desc = $('#descuento').val()

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                nomBan: nomBan,
                numCuen: numCuen,
                tipoCuen: tipoCuen,
                nomCuen: nomCuen,
                correo: correo,
                desc: desc,
            },
            success: function(data){
                if (data["message"] == "Successful") {
                    toastr["info"]("Proceso realizado correctamente");
                } else {
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                    console.log(data);
                }
            },
            error: function(data){
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                );
                console.log(data);
            }
        })
    })
})