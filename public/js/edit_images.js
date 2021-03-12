$(document).ready(function(){
    let mega = $('#tipo');

    mega.on('change', function(){
        if(mega.val() == 'megaMenu'){
            $('#mega').attr('hidden', false);
        } else {
            $('#mega').attr('hidden', true);
        }
    
        if(mega.val() == 'header'){
            $('#headerCat').attr('hidden', false);
        }else {
            $('#headerCat').attr('hidden', true);
        }
    })
})