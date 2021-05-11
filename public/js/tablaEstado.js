$(document).ready(function() {
    var ruta = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: ruta,
        columns: [
            {data: 'id', name: 'id'},
            {data: 'Observacion', name: 'observacion'},
            {data: 'Ordentransporte', name: 'ordenTransporte'},
            {data: 'Estado', name: 'estado'},
            {data: 'action', orderable:false, searchable:false},
        ],
        rowCallback: function(row, data){
            if(data['estado'] == 'Compra Ingresada'){
                $($(row).find("td")[3]).css("background-color", "#FF9AA2");
                $($(row)).css("text-align", "center");
            } else if(data['estado'] == 'Pago Validado'){
                $($(row).find("td")[3]).css("background-color", "#FFB7B2");
                $($(row)).css("text-align", "center");
            } else if(data['estado'] == 'Productos Preparados'){
                $($(row).find("td")[3]).css("background-color", "#FFDAC1");
                $($(row)).css("text-align", "center");
            } else if(data['estado'] == 'Boleta Emitida'){
                $($(row).find("td")[3]).css("background-color", "#E2F0CB");
                $($(row)).css("text-align", "center");
            } else if(data['estado'] == 'Compra Despachada'){
                $($(row).find("td")[3]).css("background-color", "#B5EAD7");
                $($(row)).css("text-align", "center");
            } else if(data['estado'] == 'Compra Entregada'){
                $($(row).find("td")[3]).css("background-color", "#C7CEEA");
                $($(row)).css("text-align", "center");
            }
        }
    });
    
})