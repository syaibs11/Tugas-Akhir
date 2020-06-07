<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Perpustakaan IPB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
        body{
            color: #191970;
            font-size: 16px;
            background-color: #b0c4de;
        }

        #utama{
            Width: 600px;
            margin: 0 auto;
            margin-top: 12%;
            background-color: #b0c4de;
        }

        #judul{
            padding: 15px;
            text-align: left;
            color: #fff;
            font-size: 20px;
            background-color: #4682b4;
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
            border-bottom: 5px solid #87ceeb;
        }
        #letak{
            text-align: center;
        }

        #data{
            background-color: #dcdcdc;
            text-align: center
            padding: 20px;
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        input{
            padding: 8px;
            border: 0;
        }

        .content{
            text-align: center;
            background-color: #b0c4de;
        }
        .lebar{
            width: 500px;
        }
        .tombol{
            background-color: #808080;
            border-radius: 3px;
            text-align: center;
            color: #fff
        }
        .tombol:hover{
            background-color: #000100;
        }
        .tittle m-b-md{
             margin-bottom: 30px;
        }

        </style>
    <body>
    <div class="container">
    <div class="row justify-content-center">
        <div id="utama">
            <div class="content">
                <div id="judul" class="card-header" class="judul">{{ __('LOGIN') }}</div>
                <div id="data" class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-11">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-11">
                                <button type="submit" class="btn btn-primary" class="lebar">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-11">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                -
                                @if (Route::has('register'))
                                        <a class="btn btn-link" href="{{ route('register') }}">{{ __('Sign up?') }}</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </body>
    </head>
</html>
