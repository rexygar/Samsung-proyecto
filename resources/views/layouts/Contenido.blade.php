<!-- /HEADER -->
@include('Layouts.Header')
<!-- /HEADER -->

@include('Layouts.Navbar')
{{-- Contenido --}}
@yield('content')
{{-- Contenido --}}

@endsection




{{-- footer --}}
@include('Layouts.footer')
{{-- footer --}}