<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | MovieLabs</title>

        <!-- Tailwind styles -->
        <link href="{{ mix('css/main.css') }}" rel="stylesheet"/>
    </head>
    <body>

      <header class="bg-black text-white">

        <div class="container mx-auto color-white">

        <div class="logo">
          <h1 class="text-brand-light-green"><a href="/">Movie<span class="text-brand-dark-green">Labs</span></a></h1>
        </div>

        <nav class="links">
          <ul>
            <li><a href="/actors">Actors</a></li>
            <li><a href="/movies">Movies</a></li>
          </ul>
        </nav>

        </div>

      </header>

        <div class="content">

            @yield('content')

        </div>

      <footer>
          <div class="codinglabs-logo-footer">

          </div>
          <div class="copyright-footer">

          </div>
          <div class="social-footer">

          </div>
      </footer>
        </div>
    </body>
</html>
