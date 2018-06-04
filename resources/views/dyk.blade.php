<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="image_src" type="image/jpeg" href="/images/logo.png" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Site Properities -->
    <meta name="generator" content="Visual Studio 2015" />
    <title>Blank | Golgi Admin</title>
    <meta name="description" content="Golgi Admin Theme" />
    <meta name="keywords" content="html5, ,semantic,ui, library, framework, javascript,jquery,admin,theme" />
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/pacejs/pace.css') }}" rel="stylesheet" />

</head>
<body class="admin">
<!--sidebar mobile-->
<div class="ui vertical push sidebar menu  thin" id="toc">
</div>
<!--sidebar mobile-->
<!--navbar mobile-->
<div class="mobilenavbar">
</div>
<!--navbar mobile-->

<div class="pusher">
    <div class="full height">
        <!--Load Sidebar Menu In App.js loadhtml function-->
        <div class="toc"></div>
        <!--Load Sidebar Menu In App.js loadhtml function-->

        <div class="article">

            <!--Load Navbar Menu In App.js loadhtml function-->
            <div class="navbarmenu"></div>
            <!--Load Navbar Menu In App.js loadhtml function-->
            <!--Begin Container-->
            <div class="containerli">
                <div class="ui equal width left aligned padded grid stackable">

                    <div class="row">
                        <div class="column">
                            <div class="ui segments">
                                <div class="ui segment">
                                    <h5 class="ui header">
                                        Header
                                    </h5>
                                </div>
                                <div class="ui segment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Finish Container-->
            <!--Load Footer Menu In App.js loadhtml function-->
            <div class="footer"></div>
            <!--Load Footer Menu In App.js loadhtml function-->
        </div>
    </div>
</div>
<script src="{{ asset('plugins/nicescrool/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/semantic.min.js') }}"></script>
<script data-pace-options='{ "ajax": false }' src="{{ asset('plugins/pacejs/pace.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>