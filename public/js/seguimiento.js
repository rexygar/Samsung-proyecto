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
				if (data["message"] == 1) {
					console.log(data.despacho);
				}else{
					console.log(data.despacho);
				}
			}
        })
    })
})