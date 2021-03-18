@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
<main class="col-span-10 col-start-3 px-6 bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Dashboard</h3>

        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <h2 class="text-gray-700 text-3xl font-medium">Bienvenido al Panel de Administración</h2>
                </div>
            </div>
        </div>
    </div>
</main>


@stop

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@stop

@section('vendor-script')
    <script src="{{ asset('js/toastr/toastr.js') }}"></script>
@stop

@section('page-script')
@stop
