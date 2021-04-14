$(document).ready(function(){
    $('#editar').on('click', function(){
        var ord = $('#orden').val();
        var url = $('#url').val();
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                ord: ord,
            },
            success: function(data){
				if (data["message"] == "1") {
                    $('#seguimiento').attr('hidden', false);
                    $('#ordenSeg').text(data.despacho[0].Ordentransporte);
                    $('#estado').text(data.despacho[0].Estado);
                    $('#observacion').text(data.despacho[0].Observacion);
				}else{
					console.log(data.despacho);
                    $('#seguimiento').attr('hidden', true);
                    $('#noExiste').attr('hidden', false);
				}
			}
        })
    })
})