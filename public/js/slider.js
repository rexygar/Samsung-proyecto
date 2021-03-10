$(document).ready(function(){
    $('#crear').on('click', function(){
        var formData = new FormData();
        var files = $('#slide')[0].files[0];
        formData.append('file',files);
        console.log(formData);
        var url = $('#url').val();
        var slider = $('#tipo').val();
        url2 = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            url: url,
            type: 'POST',
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: false,
            enctype: "multipart/form-data",
            data: {
                url2: $("meta[name='csrf-token']").attr("content"),
                formData: formData,
                slider: slider,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    console.log(data);
                } else {
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                }
           },
           error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                );
                console.log(data);
            },
        });
    })
})