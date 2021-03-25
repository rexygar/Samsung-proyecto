$(document).ready(function() {

    $("#crear").on("click", function() {

        var url = $("#url").val();

        var nom = $("#nombre").val();
        var cor = $("#email").val();
        var id = $('#id').val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
                nom: nom,
                cor: cor,
            },
            success: function(data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Proceso realizado correctamente");
                } else {
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                    console.log(data);
                }
            }
        });
    });
});