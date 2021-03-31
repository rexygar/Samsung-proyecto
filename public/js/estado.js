$(document).ready(function(){
    $('#crear').on('click', function(){
        var url = $('#url').val();
        var id = $('#id').val();
        var obs = $('#observación').val();
        var ord = $('#orden').val();
        var est = $('#estado').val();
        var idt = $('#idTransaccion').val();

        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
                obs: obs,
                ord: ord,
                est: est,
                idt: idt,
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
            }
        })
    })
})