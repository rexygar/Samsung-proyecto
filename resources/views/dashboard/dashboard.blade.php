@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
<main class="col-span-10 col-start-3 px-6 bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Panel de Administración</h3>
        <input type="hidden" id="rutaListar" value="{{ route('admin.index') }}">
        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <h2 class="text-gray-700 text-3xl font-medium">Bienvenido al Panel de Administración</h2>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex flex-wrap -mx-6">
                    <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{ $users }}</h4>
                                <div class="text-gray-500">Usuarios Registrados</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">

            </div>
    
            <div class="flex flex-col mt-8">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="flex justify-between items-center bg-gray-100 border-b px-6 py-4">
                        <p class="text-5xl text-gray-800 font-semibold">Estado de Compras más Actuales</p>
                      </div>
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="overflow-x-auto w-full bg-white divide-y divide-gray-200 data-table">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xl leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xl leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Observacion</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xl leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Ordentransporte</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xl leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Estado</th>
                                        <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xl leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Acción</th>
                                </tr>
                            </thead>
    
                            <tbody class="bg-white">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@stop

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://nightly.datatables.net/searchpanes/css/searchPanes.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
@stop

@section('vendor-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://nightly.datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://nightly.datatables.net/searchpanes/js/dataTables.searchPanes.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://nightly.datatables.net/select/js/dataTables.select.min.js"></script>
    <script src="https://nightly.datatables.net/buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('js/toastr/toastr.js') }}"></script>
@stop

@section('page-script')
    <script src="{{ asset('js/tablaEstado.js') }}"></script>
@stop
