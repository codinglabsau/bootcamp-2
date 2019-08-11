<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | MovieLabs</title>

    <!-- Tailwind styles -->
    <link href="{{ mix('css/main.css') }}" rel="stylesheet" />
</head>

<body class="bg-brand-lightest-gray text-white">

    <!-- Header -->
    <header class="bg-brand-dark-gray text-white ">

        <div class="container mx-auto color-white p-4 flex justify-between">
            <!-- MovieLabs Logo -->
            <a href="/">
                <div class="logo h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="162.353" height="40">
                        <image width="162.353" height="40" xlink:href="data:image/png;base64,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" />
                    </svg>
                </div>
            </a>

            <!-- <nav class="links">
                <ul>
                    <li><a href="/actors">Actors</a></li>
                    <li><a href="/movies">Movies</a>
                    </li>
                </ul>
            </nav> -->

            <!-- Search -->
            <div class="relative">
                <!-- Magnify icon -->
                <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <svg class="fill-current text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                        <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41v-.01zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>
                </div>
                <!-- green search box -->
                <input class="px-10 py-2 align-middle bg-brand-light-green align-baseline rounded-corners rounded justify-end placeholder-white hover:bg-brand-dark-green" placeholder="Search" type="search" id="site-search" aria-label="Search through site content">
            </div>
        </div>

    </header>

    <!-- Content -->
    <div class="bg-brand-lightest-gray ">
        <div class="container mx-auto bg-brand-light-gray p-4 shadow-md">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-brand-dark-gray ">
        <div class="container mx-auto p-4 text-white flex">
            <!-- Coding Labs logo -->
            <div class="w-1/3">
                <img class="" width="191.60px" height="40px" src="{{ asset('/imgs/image.svg') }}" alt="CodingLabs">
            </div>

            <!-- Copyright (year) -->
            <div class="w-1/3 text-center text-gray-700">
                Copyright
                <?php echo date("Y"); ?>
            </div>

            <!-- Social Media logos -->
            <div class="w-1/3 text-right align-baseline">
                links
            </div>

        </div>

    </footer>
</body>

</html>