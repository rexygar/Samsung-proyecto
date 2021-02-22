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
    suma = 0;

    for(i = 0; i < numero.length; i++){
        n = $(numero[i]).text()
        suma += parseInt(n.replace(/[$.]/g,''))
    }


    const formatterPeso = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    })

    document.getElementById('subtotal').innerHTML = formatterPeso.format(suma);

    total = suma
    document.getElementById('total').innerHTML = formatterPeso.format(total);;
    
    if ($('#product').length) {
        // si existe
      } else {
        $('#pay').attr('disabled', true);
      }

})