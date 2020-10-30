<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/empresa/logo_navegador.png')}}" type="image/icon">
    <title>  WMS | Login </title>
    <!--Bootstrap v4.5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        #particles-js{
            background-image:url("{{asset('images/login/fondo.jpg')}}");
            background-size:cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #000b16;
            position: fixed;
            height: 100vh;
            width: 100%;
            z-index: -1;
        }
        #contenidos{
            position:relative;
            z-index: 99;
        }
    </style>


</head>
<body >
<div id="particles-js"></div>
<div id="contenidos">
    <div class="container">
        <div class="row justify-content-center " style="padding-top: 120px">
            <div class="card col-10 col-sm-10 col-md-6 col-lg-4 shadow ">
                <div class="card-body px-0 ">
                    <div class="row">
                       <img class="mx-auto mb-2" src="{{asset('images/login/login.jfif')}} "width="350" height="70">
                    </div>
                    <h4 class="text-center text-primary mb-2 mt-3">Iniciar Sesión</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-4 mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus >
                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Ingresar') }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('packages/particles.js/particles.min.js')}}"></script>
<script src="{{asset('packages/particles.js/appparticles.js')}}"></script>
</body>
</html>
