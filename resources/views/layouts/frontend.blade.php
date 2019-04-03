<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div class="container nav-wrapper main-menu">
            <div class="second-menu">
                    @if(Auth::check())

                    @else
                    <li><a href="https://dementiecoaching.be/over-ons/">Over ons</a></li>
                    <li><a href="https://dementiecoaching.be/contact/">Contact</a></li>
                    <li><a href="{{ route('login') }}">Admin login</a></li>
                    @endif
            </div>
            <div class="logo">
                <img src="/img/logo.png" alt="Logo Dementiecoaching">
            </div>
            
            @include('inc/admin-navigation')

        </div>
    </header>

    <section class="main-content container">

        <article>
            @yield('main-content')
        </article>

    </section>

    <footer>
        <div class="credentials text-center">
            &copy; <?php echo date('Y'); ?> | Webdesign by <a href="https://www.dewebgoeroe.be" target="_blank">De WebGoeroe</a>
        </div>
    </footer>
    <i id="terugNaarBoven" class="fas fa-arrow-circle-up" title="Terug naar boven"></i>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script type="text/JavaScript" src="{{ asset('js/scripts.js') }}"></script>
</body>
</html> 
