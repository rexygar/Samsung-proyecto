$(document).ready(function(){
    var url = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverside: true,
        ajax: url,
        language: {
            searchPanes: {
                collapse: 'Filtros',
                title: {
                    _: 'Filters Selected - %d',
                    0: 'No Filters Selected',
                    1: 'One Filter Selected'
                }
            }
        },
        searchPanes: {
            viewTotal: true,
            columns: [ 1 ],
            orderable: false
        },
        buttons: [
            { extend: 'searchPanes', className: 'btn btn-primary boton-blanco' },
        ],
        dom: 'Blfrtip',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'region', name: 'region'},
            {data: 'comuna', name: 'comuna'},
            {data: 'precio', name: 'precio'},
            {data: 'action', orderable:false, searchable:false},
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [1, 2] },
            { searchPanes: { show: false }, targets: [0, 3] }
        ]
    })
})