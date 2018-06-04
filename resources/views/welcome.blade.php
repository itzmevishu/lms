<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Learning Management System</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <style type="text/css">

            .hidden.menu {
                display: none;
            }

            .masthead.segment {
                min-height: 700px;
                padding: 1em 0em;
            }
            .masthead .logo.item img {
                margin-right: 1em;
            }
            .masthead .ui.menu .ui.button {
                margin-left: 0.5em;
            }
            .masthead h1.ui.header {
                margin-top: 3em;
                margin-bottom: 0em;
                font-size: 4em;
                font-weight: normal;
            }
            .masthead h2 {
                font-size: 1.7em;
                font-weight: normal;
            }

            .ui.vertical.stripe {
                padding: 8em 0em;
            }
            .ui.vertical.stripe h3 {
                font-size: 2em;
            }
            .ui.vertical.stripe .button + h3,
            .ui.vertical.stripe p + h3 {
                margin-top: 3em;
            }
            .ui.vertical.stripe .floated.image {
                clear: both;
            }
            .ui.vertical.stripe p {
                font-size: 1.33em;
            }
            .ui.vertical.stripe .horizontal.divider {
                margin: 3em 0em;
            }

            .quote.stripe.segment {
                padding: 0em;
            }
            .quote.stripe.segment .grid .column {
                padding-top: 5em;
                padding-bottom: 5em;
            }

            .footer.segment {
                padding: 5em 0em;
            }

            .secondary.pointing.menu .toc.item {
                display: none;
            }

            @media only screen and (max-width: 700px) {
                .ui.fixed.menu {
                    display: none !important;
                }
                .secondary.pointing.menu .item,
                .secondary.pointing.menu .menu {
                    display: none;
                }
                .secondary.pointing.menu .toc.item {
                    display: block;
                }
                .masthead.segment {
                    min-height: 350px;
                }
                .masthead h1.ui.header {
                    font-size: 2em;
                    margin-top: 1.5em;
                }
                .masthead h2 {
                    margin-top: 0.5em;
                    font-size: 1.5em;
                }
            }


        </style>
    </head>
    <body>
            <!-- Following Menu -->
            <div class="ui large top fixed hidden menu">
                <div class="ui container">
                    <a class="active item">Home</a>
                    <a class="item">Work</a>
                    <a class="item">Company</a>
                    <a class="item">Careers</a>
                    @if (Route::has('login'))
                    <div class="right menu">
                        @auth
                            <div class="item">
                                <a class="ui button" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        @else
                            <div class="item">
                                <a class="ui primary button" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                         @endauth
                    </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar Menu -->
            <div class="ui vertical inverted sidebar menu">
                <a class="active item">Home</a>
                <a class="item">Work</a>
                <a class="item">Company</a>
                <a class="item">Careers</a>
                <a class="item">Login</a>
                <a class="item">Signup</a>
            </div>


            <!-- Page Contents -->
            <div class="pusher">
                <div class="ui inverted vertical masthead center aligned segment">

                    <div class="ui container">
                        <div class="ui large secondary inverted pointing menu">
                            <a class="toc item">
                                <i class="sidebar icon"></i>
                            </a>
                            <a class="active item">Home</a>
                            {{-- <div class="right item">
                                <a class="ui inverted button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                <a class="ui inverted button" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="ui text container">
                        <h1 class="ui inverted header">
                            Imagine-a-LMS
                        </h1>
                        <h2>A custom built solution by Litmos.</h2>
                        <a href="{{ route('register.tenant') }}">
                            <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
                        </a>
                    </div>

                </div>

                <div class="ui inverted vertical footer segment">
                    <div class="ui container">
                        <div class="ui stackable inverted divided equal height stackable grid">
                            <div class="three wide column">
                                <h4 class="ui inverted header">About</h4>
                                <div class="ui inverted link list">
                                    <a href="#" class="item">Sitemap</a>
                                    <a href="#" class="item">Contact Us</a>
                                    <a href="#" class="item">Religious Ceremonies</a>
                                    <a href="#" class="item">Gazebo Plans</a>
                                </div>
                            </div>
                            <div class="three wide column">
                                <h4 class="ui inverted header">Services</h4>
                                <div class="ui inverted link list">
                                    <a href="#" class="item">Banana Pre-Order</a>
                                    <a href="#" class="item">DNA FAQ</a>
                                    <a href="#" class="item">How To Access</a>
                                    <a href="#" class="item">Favorite X-Men</a>
                                </div>
                            </div>
                            <div class="seven wide column">
                                <h4 class="ui inverted header">Footer Header</h4>
                                <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </body>
</html>
