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
            {data: 'SKU', name: 'SKU'},
            {data: 'Descripcion', name: 'Descripcion'},
            {data: 'SupCategoria', name: 'SupCategoria'},
            {data: 'Categoria', name: 'Categoria'},
            {data: 'SubCategoria', name: 'SubCategoria'},
            {data: 'SubSubCategoria', name: 'SubSubCategoria'},
            {data: 'Precio', name: 'Precio'},
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [1] },
            { searchPanes: { show: false }, targets: [0, 2, 3, 4, 5, 6] }
        ]
    })
})