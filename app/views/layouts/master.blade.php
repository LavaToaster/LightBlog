<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        <link href="{{ asset('components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('components/sir-trevor-js/sir-trevor-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('components/sir-trevor-js/sir-trevor.css') }}" rel="stylesheet">
        <link href="{{ asset('css/editor.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="user-login"><a href="#" data-toggle="modal" data-target="#loginBox" title="Log in"><span class="glyphicon glyphicon-user"></span></a></div>

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

        <aside id="loginBox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog login-modal">
                <div class="row">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Log In</h4>
                        </div>
                        <div class="modal-body">
                            <div id="login-errors"></div>
                            <form id="login-form" role="form">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <a class="pull-right" href="#">Forgot password?</a>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="checkbox pull-right">
                                    <label> <input type="checkbox" name="rememberme" value="1"> Remember me </label>
                                </div>
                                <button type="submit" class="btn btn btn-primary">
                                    Log In
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

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
        <script src="{{ asset('components/underscore/underscore.js') }}"></script>
        <script src="{{ asset('components/Eventable/eventable.js') }}"></script>
        <script src="{{ asset('components/sir-trevor-js/sir-trevor.js') }}"></script>
        <script src="{{ asset('js/user.js') }}"></script>
        <script>
            var Site = {
                url:  '{{ Config::get("app.url") }}',
                csrf: '{{ csrf_token() }}'
            };

            $.ajaxSetup({
                dataType: "json",
                beforeSend: function(xhr, settings) {
                    if (!(/^http:.*/.test(settings.url) || /^https:.*/.test(settings.url))) {
                        // Only send the token to relative URLs i.e. locally.
                        xhr.setRequestHeader("X-CSRF-Token", Site.csrf);
                    }
                }
            });

            new SirTrevor.Editor({ el: $('.js-st-instance') });
        </script>
    </body>
</html>