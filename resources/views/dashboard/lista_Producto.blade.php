@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Lista de Producto')


@section('content')
    <div class="col-span-10 col-start-3 px-6 ">
        <div class="mx-auto container">
            <div class=" border-b flex px-6 py-2 items-center">
              <input type="hidden" id="rutaListar" value="{{ route('product.list') }}">
                <div>
                    <div class="flex flex-col max-w-full shadow-md m-6">
                  <!-- Header -->
                  <div class="flex justify-between items-center bg-gray-100 border-b px-6 py-4">
                    <p class="text-5xl text-gray-800 font-semibold">Productos</p>

                  </div>
                  <!-- End Header -->
                
                  <!-- Table -->
                  <table class="overflow-x-auto w-full bg-white divide-y divide-gray-200 data-table">
                    <thead class="bg-gray-50 text-gray-500 text-sm">
                      <tr class="divide-x divide-gray-300">
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Codigo del Producto</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Producto</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Sup. Categoria</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Categoria</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Sub. Categoria</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Sub. Sub. Categoria</th>
                        <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase">Precio</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-500 text-xs divide-y divide-gray-200">
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
                
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-styles')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://nightly.datatables.net/searchpanes/css/searchPanes.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://nightly.datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://nightly.datatables.net/searchpanes/js/dataTables.searchPanes.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://nightly.datatables.net/select/js/dataTables.select.min.js"></script>
<script src="https://nightly.datatables.net/buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('js/tablaProducto.js') }}"></script>
@stop