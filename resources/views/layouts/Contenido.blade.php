<!-- /HEADER -->
@include('Layouts.Header')
<!-- /HEADER -->

@include('Layouts.Navbar')



<div class="max-w-6xl bk-hero-main mx-auto sm:px-6 lg:px-8">
    <section class="hero bk-hero-int is-primary is-medium mt-8
    overflow-hidden shadow sm:rounded-lg">
        <!-- Hero head: will stick at the top -->
            {{-- Contenido --}}
            @yield('content')
            {{-- Contenido --}}
    </section>
</div>







{{-- footer --}}
@include('Layouts.footer')
{{-- footer --}}