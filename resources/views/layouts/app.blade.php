<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Блог - двухколоночный макет блога с пользовательской навигацией, заголовком и содержанием.">

    <title>Блог | Blog Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- Favicons -->
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


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
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    @stack('css')

</head>

<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">

            <div class="col-4 d-flex justify-content-end align-items-center">

                @if(!Auth::check())
                <a class="btn btn-sm btn-outline-secondary" href="{!! route('login') !!}">Вход</a> &nbsp;
                <a class="btn btn-sm btn-outline-secondary" href="{!! route('register') !!}">Регистрация</a>
                @else
                    <a class="btn btn-sm btn-outline-secondary" href="{!! route('account') !!}">Личный кабинет</a> &nbsp;
                    <a class="btn btn-sm btn-outline-secondary" href="{!! route('logout') !!}">Выход</a>
                @endif
            </div>
        </div>
    </header>

   <x-top-menu :categories="$categories ?? []"></x-top-menu>
  <!-- <x-top-news></x-top-news> -->

</div>

<main role="main" class="container">
    <div class="row">
        @yield('content')

        <x-sidebar></x-sidebar>


    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@stack('js')
</body>
</html>