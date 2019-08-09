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

      <!-- Header -->
      <header class="bg-brand-dark-gray text-white">

        <div class="container mx-auto color-white p-2">

        <div class="logo">
          <h1 class="text-brand-light-green"><a href="/">Movie<span class="text-brand-dark-green">Labs</span></a></h1>
        </div>

        <nav class="links">
          <ul>
            <li><a href="/actors">Actors</a></li>
            <li><a href="/movies">Movies</a></li>
          </ul>
        </nav>

        <div class="search">

        </div>

        </div>

      </header>

      <!-- Content -->
      <div class="bg-brand-light-gray">
        <div class="container mx-auto bg-brand-lightest-gray p-2">
            @yield('content')
        </div>
      </div>

      <!-- Footer -->
      <footer class="bg-brand-dark-gray">
        <div class="container mx-auto p-2 text-white">

          <div class="codinglabs-logo-footer">
            CodingLabs Logo
          </div>
          <div class="copyright-footer">
            Copyright <php date('Y');/>
          </div>
          <div class="social-footer">
            links
          </div>

        </div>
      </footer>
        </div>
    </body>
</html>
