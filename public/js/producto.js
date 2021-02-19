$(document).ready(function(){
    $('#carrito').on('click', function(){
        var url = $('#urlCarrito').val();
        var urlRed = $('#urlRedireccion').val();
        var sku = $('#id_producto').val();
        var cant = $('#stock').val();
        var col = $('input:radio[name=color_group]:checked').val();
        var monto = $('#precio').val();
        var descripcion = $('#descripcion').val();
        $.ajax({
            url: url,
            type: 'GET',
            data:{
                _token: $("meta[name='csrf-token']").attr("content"),
                sku : sku,
                cant : cant,
                col : col,
                monto: monto,
                descripcion : descripcion,
            },
            success: function(data){
                if(data["status"] == 0){
                    window.location.replace(urlRed);
                }else{
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                }
            }
        })
    })
})