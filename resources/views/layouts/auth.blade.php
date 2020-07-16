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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    @stack('css')

</head>

<body>

<div class="container">
    @yield('content')
</div>
</body>
</html>