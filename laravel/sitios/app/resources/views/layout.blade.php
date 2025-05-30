<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
                <a href="/portfolio">Portafolio</a>
                <a href="/contact">Contacto</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
