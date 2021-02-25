<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta content="Autocomplete App" property="og:site_name" />
    <meta content="autocomplete, laravel, laravel autocomplete, git, github" name="news_keywords" />

    <meta name="author" content="Autocomplete App" />

    <title>Autocomplete App - @yield('title')</title>
    <meta name="description" content="@yield('description')">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"
        integrity="sha512-+WF6UMXHki/uCy0vATJzyA9EmAcohIQuwpNz0qEO+5UeE5ibPejMRdFuARSrl1trs3skqie0rY/gNiolfaef5w=="
        crossorigin="anonymous" /> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

</head>

<body class="bg-gray-100">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')

    <!-- Scripts -->
    {{-- <script src="/js/app.js"></script> --}}
</body>

</html>
