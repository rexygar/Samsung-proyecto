
@include('Components.Errores.Mantencion')

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
  <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">
  

  <style>
    body {
      font-family: 'Nunito';
    }

  </style>
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="max-w-6xl bk-hero-main mx-auto sm:px-6 lg:px-8">
      <section class="hero bk-hero-int is-primary is-medium mt-8
      overflow-hidden shadow sm:rounded-lg">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <nav class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item">
                  <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
                </a>
                <span class="navbar-burger" data-target="navbarMenuHeroA">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroA" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item is-active">
                    Home
                  </a>
                  <a class="navbar-item">
                    Examples
                  </a>
                  <a class="navbar-item">
                    Documentation
                  </a>
                  <span class="navbar-item">
                    <a class="button is-primary is-inverted">
                      <span class="icon">
                        <i class="fab fa-github"></i>
                      </span>
                      <span>Download</span>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container has-text-centered">
            <p class="title">
              Title
            </p>
            <p class="subtitle">
              Subtitle
            </p>
          </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
          <nav class="tabs">
            <div class="container">
              <ul>
                <li class="is-active"><a>Overview</a></li>
                <li><a>Modifiers</a></li>
                <li><a>Grid</a></li>
                <li><a>Elements</a></li>
                <li><a>Components</a></li>
                <li><a>Layout</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </section>

      <section class="hero is-primary mt-8 
      overflow-hidden shadow sm:rounded-lg">
        <div class="hero-body">
          <h1 class="text-base text-7xl">
            Componentes
          </h1>
          <p class=" text-base text-5xl">
            Ejemplos Componentes
          </p>
        </div>
      </section>
      <div class="mt-8 bg-white bk-hero overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6">
            <div class="card ">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">John Smith</p>
                    <p class="subtitle is-6">@johnsmith</p>
                  </div>
                </div>

                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                  <a href="#">#css</a> <a href="#">#responsive</a>
                  <br>
                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
              </div>
            </div>
          </div>

          <div class="p-6 border-t md:border-t-0 md:border-l">
            <article class="panel is-primary">
              <p class="panel-heading">
                Primary
              </p>
              <p class="panel-tabs">
                <a class="is-active">All</a>
                <a>Public</a>
                <a>Private</a>
                <a>Sources</a>
                <a>Forks</a>
              </p>
              <div class="panel-block">
                <p class="control has-icons-left">
                  <input class="input is-primary" type="text" placeholder="Search">
                  <span class="icon is-left">
                    <i class="fas fa-search" aria-hidden="true"></i>
                  </span>
                </p>
              </div>
              <a class="panel-block is-active">
                <span class="panel-icon">
                  <i class="fas fa-book" aria-hidden="true"></i>
                </span>
                bulma
              </a>
              <a class="panel-block">
                <span class="panel-icon">
                  <i class="fas fa-book" aria-hidden="true"></i>
                </span>
                marksheet
              </a>
              <a class="panel-block">
                <span class="panel-icon">
                  <i class="fas fa-book" aria-hidden="true"></i>
                </span>
                minireset.css
              </a>
              <a class="panel-block">
                <span class="panel-icon">
                  <i class="fas fa-book" aria-hidden="true"></i>
                </span>
                jgthms.github.io
              </a>
            </article>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <div class="card ">
              <div class="card-content">
                <p class="title">
                  “There are two hard things in computer science: cache invalidation, naming things, and off-by-one
                  errors.”
                </p>
                <p class="subtitle">
                  Jeff Atwood
                </p>
              </div>
              <footer class="card-footer">
                <p class="card-footer-item">
                  <span>
                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
                  </span>
                </p>
                <p class="card-footer-item">
                  <span>
                    Share on <a href="#">Facebook</a>
                  </span>
                </p>
              </footer>
            </div>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="card ">
              <header class="card-header">
                <p class="card-header-title">
                  Component
                </p>
                <button class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </header>
              <div class="card-content">
                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                  <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                  <br>
                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
              </div>
              <footer class="card-footer">
                <a href="#" class="card-footer-item">Save</a>
                <a href="#" class="card-footer-item">Edit</a>
                <a href="#" class="card-footer-item">Delete</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
      <section class="hero is-warning mt-8 
      overflow-hidden shadow sm:rounded-lg">
        <div class="hero-body">
          <h1 class="text-base text-7xl">
            breadcrumbs
          </h1>
          <p class=" text-base text-5xl">
            o mini navbars
          </p>
        </div>
      </section>
      <div class="mt-8 bg-white bk-hero-bread overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6">
            <nav class="breadcrumb" aria-label="breadcrumbs">
              <ul>
                <li><a href="#">Bulma</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Components</a></li>
                <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
              </ul>
            </nav>
          </div>

          <div class="p-6 border-t md:border-t-0 md:border-l">
            <nav class="breadcrumb is-medium" aria-label="breadcrumbs">
              <ul>
                <li><a href="#">Bulma</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Components</a></li>
                <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
              </ul>
            </nav>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <nav class="breadcrumb" aria-label="breadcrumbs">
              <ul>
                <li>
                  <a href="#">
                    <span class="icon is-small">
                      <i class="fas fa-home" aria-hidden="true"></i>
                    </span>
                    <span>Bulma</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon is-small">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    <span>Documentation</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon is-small">
                      <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
                    </span>
                    <span>Components</span>
                  </a>
                </li>
                <li class="is-active">
                  <a href="#">
                    <span class="icon is-small">
                      <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                    </span>
                    <span>Breadcrumb</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <nav class="breadcrumb has-dot-separator" aria-label="breadcrumbs">
              <ul>
                <li><a href="#">Bulma</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Components</a></li>
                <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      {{-- producto card --}}
      {{--
      <div class="mt-8 bg-white bk-hero-bread overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-4  gap-4">
          <div class="card ">
            <div class="card-content">
              <div class="content">

                <div class="w-full max-w-6xl rounded md:mb-0">
                  <div class="relative">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png" class="w-full relative z-10"
                      alt="">
                    <div class="border-4 border-blue-300 absolute top-1 bottom-1 left-1 right-1 z-0"></div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
          </div>
          <div class="card ">
            <div class="card-content">
              <div class="content">

                <div class="w-full max-w-6xl rounded md:mb-0">
                  <div class="relative">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png" class="w-full relative z-10"
                      alt="">
                    <div class="border-4 border-blue-300 absolute top-1 bottom-1 left-1 right-1 z-0"></div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
          </div>
          <div class="card ">
            <div class="card-content">
              <div class="content">

                <div class="w-full max-w-6xl rounded md:mb-0">
                  <div class="relative">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png" class="w-full relative z-10"
                      alt="">
                    <div class="border-4 border-blue-300 absolute top-1 bottom-1 left-1 right-1 z-0"></div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
          </div>
          <div class="card ">
            <div class="card-content">
              <div class="content">

                <div class="w-full max-w-6xl rounded  md:mb-0">
                  <div class="relative">
                    <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png" class="w-full relative z-10"
                      alt="">
                    <div class="border-4 border-blue-300 absolute top-1 bottom-1 left-1 right-1 z-0"></div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
          </div>
        </div>
      </div>--}}
      {{-- end producto card --}}
      {{--
      <section class="hero is-medium is-link mt-8 
      overflow-hidden shadow sm:rounded-lg">
        <div class="hero-body">
          <p class="title text-main text-7xl">
            Mensajes
          </p>
          <p class="subtitle text-main text-5xl">
            o textos
          </p>
        </div>
      </section>
      <div class="mt-8 bg-white bk-hero-mensajes overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6">
            <article class="message is-link">
              <div class="message-header">
                <p>Link</p>
                <button class="delete" aria-label="delete"></button>
              </div>
              <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus
                quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus
                diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
                Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque.
                Donec dui urna, vehicula et sem eget, facilisis sodales sem.
              </div>
            </article>
          </div>

          <div class="p-6 border-t md:border-t-0 md:border-l">
            <article class="message is-dark">
              <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus
                quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus
                diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
                Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque.
                Donec dui urna, vehicula et sem eget, facilisis sodales sem.
              </div>
            </article>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <article class="message is-small">
              <div class="message-header">
                <p>Small message</p>
                <button class="delete is-small" aria-label="delete"></button>
              </div>
              <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus
                quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
                Aenean ac <em>eleifend lacus</em>, in mollis lectus.
              </div>
            </article>
          </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <article class="message is-large">
              <div class="message-header">
                <p>Large message</p>
                <button class="delete is-large" aria-label="delete"></button>
              </div>
              <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus
                quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur.
                Aenean ac <em>eleifend lacus</em>, in mollis lectus.
              </div>
            </article>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="content has-text-centered">
          <p>
            <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
          </p>
        </div>
      </footer>
    </div>
  </div>
</body>

</html> --}}