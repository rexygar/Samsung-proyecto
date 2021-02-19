$(document).ready(function(){

    var numero = $("span[name='precio[]']"), 
    suma = 0
    for(i = 0; i < numero.length; i++){
        suma += parseInt($(numero[i]).text())
    }
    
    console.log(suma);
    document.getElementById('subtotal').innerHTML = suma;

    total = suma + 20500
    document.getElementById('total').innerHTML = total;
    
    function eliminar(){
        $('#borrar').on('click', function(){
            url = $('#urlQuitar').val();
            sku = $('#sku').val();
    
            $.ajax({
                url : url,
                type : 'GET',
                data: {
                    _token: $("meta[name='csrf-token']").attr("content"),
                    sku : sku
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
    
        })
    }
})