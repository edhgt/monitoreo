<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.101.0" />
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap core CSS -->
    <meta name="theme-color" content="#563d7c" />
    @vite(['resources/sass/app.scss'])
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /*
            * Globals
            */

      /* Links */
      a,
      a:focus,
      a:hover {
        color: #fff;
      }

      /* Custom default button */
      .btn-secondary,
      .btn-secondary:hover,
      .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: 0.05rem solid #fff;
      }

      /*
            * Base structure
            */

      html,
      body {
        height: 100%;
        background-color: #333;
      }

      body {
        display: -ms-flexbox;
        display: flex;
        color: #fff;
        text-shadow: 0 0.05rem 0.1rem rgba(0, 0, 0, 0.5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, 0.5);
      }

      .cover-container {
        max-width: 42em;
      }

      /*
            * Header
            */
      .masthead {
        margin-bottom: 2rem;
      }

      .masthead-brand {
        margin-bottom: 0;
      }

      .nav-masthead .nav-link {
        padding: 0.25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.5);
        background-color: transparent;
        border-bottom: 0.25rem solid transparent;
      }

      .nav-masthead .nav-link:hover,
      .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, 0.25);
      }

      .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
      }

      .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
      }

      @media (min-width: 48em) {
        .masthead-brand {
          float: left;
        }
        .nav-masthead {
          float: right;
        }
      }

      /*
            * Cover
            */
      .cover {
        padding: 0 1.5rem;
      }
      .cover .btn-lg {
        padding: 0.75rem 1.25rem;
        font-weight: 700;
      }

      /*
            * Footer
            */
      .mastfoot {
        color: rgba(255, 255, 255, 0.5);
      }
    </style>
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">{{ config('app.name') }}</h3>
          <nav class="nav nav-masthead justify-content-center">
            @if (Route::has('login')) @auth
            <a class="nav-link active" href="{{ url('/home') }}">Home</a>
            @else
            <a class="nav-link active" href="{{ route('login') }}">Log in</a>
            @if (Route::has('register'))
            <a class="nav-link active" href="{{ route('register') }}"
              >Register</a
            >
            @endif @endauth @endif
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">{{ config('app.name') }}.</h1>
        <p class="lead">
          Cover is a one-page template for building simple and beautiful home
          pages. Download, edit the text, and add your own fullscreen background
          photo to make it your own.
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{
            PHP_VERSION }})
          </p>
        </div>
      </footer>
    </div>
  </body>
</html>
