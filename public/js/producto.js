$(document).ready(function() {
    

    if($('#radio').length > 0){
        
        $('[name="color_group"]').on('change', function() {
            if(this.checked){
                $("#cantidad").val(1);
                $("#stock").val($(this).attr('data-stock'))

                $("#cantidad").on("change", function() {
                    cantidad = parseInt($("#cantidad").val());
                    stock = parseInt($("input:radio[name=color_group]:checked").attr('data-stock'));

                    console.log($("#stock").val());
                    if (cantidad <= 0) {
                        $("#cantidad").val("1");
                    }
            
                    if (cantidad > stock) {
                        $("#cantidad").val(stock);
                    }
                });
            }
        })

        if ($('#cantidad').val() == '') {
            $('#carrito').attr('disabled', true);
        }
    }else{
        document.getElementById('stockdisponible').innerHTML = 'SIN STOCK'
        $('#carrito').attr('disabled', true);
    }

    $("#carrito").on("click", function() {
        var url = $("#urlCarrito").val();
        var urlRed = $("#urlRedireccion").val();
        var sku = $("#id_producto").val();
        var cant = $("#cantidad").val();
        var col = $("input:radio[name=color_group]:checked").val();
        var monto = $("#precio").val();
        var descripcion = $("#descripcion").val();
        $.ajax({
            url: url,
            type: "GET",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                sku: sku,
                cant: cant,
                col: col,
                monto: monto,
                descripcion: descripcion
            },
            success: function(data) {
                if (data["status"] == 0) {
                    window.location.replace(urlRed);
                } else {
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                }
            }
        });
    });
});
