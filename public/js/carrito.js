function eliminar(sku){
        url = $('#urlQuitar').val();

        $.ajax({
            url : url,
            type : 'GET',
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                sku : sku.toString()
            },
            success: function(data){
                if(data["status"] == 0){
                    location.reload();
                }else{
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                }
            }
        })
}

$(document).ready(function(){

    var numero = $("span[name='precio[]']"), 
    suma = 0
    for(i = 0; i < numero.length; i++){
        suma += parseInt($(numero[i]).text())
    }
    document.getElementById('subtotal').innerHTML = suma;

    total = suma + 20500
    document.getElementById('total').innerHTML = total;
    
    if ($('#product').length) {
        // si existe
      } else {
        $('#pay').attr('disabled', true);
      }

})