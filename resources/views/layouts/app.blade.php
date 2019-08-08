<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | MovieLabs</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="{{ mix('css/main.css') }}" rel="stylesheet"/>
    </head>
    <body>

      <header>

        <div class="logo">
          <h1><a href="/">MovieLabs</a></h1>
        </div>

        <nav class="links">
          <ul>
            <li><a href="/actors">Actors</a></li>
            <li><a href="/movies">Movies</a></li>
          </ul>
        </nav>

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
