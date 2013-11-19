<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        <link href="{{ asset('components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('components/sir-trevor-js/sir-trevor.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="brand">{{ $title }}</div>
        <div class="address-bar">{{ $tagline }}</div>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">{{ $title }}</a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::route('home') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Is a footer really needed? -->
        <!--<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; {{ $title }} 2013</p>
                    </div>
                </div>
            </div>
        </footer>-->
        <script src="{{ asset('components/jquery/jquery.js') }}"></script>
        <script src="{{ asset('components/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('components/sir-trevor-js/sir-trevor.css') }}"></script>
    </body>
</html>