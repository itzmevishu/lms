<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="image_src" type="image/jpeg" href="/images/logo.png" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Site Properities -->
    <meta name="generator" content="PHP STORM" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Litmos') }}</title>

    <meta name="description" content="Learning Management System" />
    <meta name="keywords" content="lms, elearning, litmos, learning, management, system" />
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/pacejs/pace.css') }}" rel="stylesheet" />

</head>
<body class="signin">

<div class="ui container">
    <div class="ui equal width center aligned padded grid stackable">
        <div class="row">
            <div class="five wide column">
                <div class="ui segments">
                    <div class="ui segment inverted nightli">
                        <h3 class="ui header">
                            Register domain with Litmos
                        </h3>
                    </div>
                    <div class="ui segment">
                        <form method="POST" action="{{ route('store.tenant') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="ui error message">
                                    <ul class="list">
                                        @foreach ($errors->all() as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="description">
                                Enter your business name and URL.
                            </div>
                            <div class="ui divider"></div>
                            <div class="ui input fluid {{ $errors->has('name') ? 'field error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Business name..." autofocus>
                            </div>
                            <div class="ui divider hidden"></div>
                            <div class="ui input fluid {{ $errors->has('domain') ? 'field error' : '' }}">
                                <input id="domain" name="domain"  type="text" class="form-control{{ $errors->has('domain') ? ' is-invalid' : '' }}" value="{{ old('domain') }}" placeholder="Your domain...">
                            </div>
                            <div class="ui divider hidden"></div>
                            <button class="ui primary fluid button">
                                <i class="key icon"></i>
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>