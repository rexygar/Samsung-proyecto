$(document).ready(function(){
    $('#editar').on('click', function(){
        var url = $('#url').val();
        var rut = $('#rut').val();
        var nom = $('#nombre').val();
        var apel = $('#apellido').val();
        var tel = $('#telefono').val();

        if (nom == "") {
            toastr["warning"]("Por favor ingresar Nombre");
            return false;
        }
        var id = $("#id_perfil").val();
        $.ajax({
            url : url,
            type : 'POST',
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id : id,
                rut: rut,
                nom : nom,
                apel : apel,
                tel : tel,
            },
            success: function(data){
                if(data["message"] == "Successful"){
                    toastr["info"]("Perfil editado");
                }else{
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
    })
})