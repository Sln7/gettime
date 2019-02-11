@extends('layouts.app_minimal')

@section('content')
    <body class="bg-white">
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                    <div class="elisyam-bg background-01">
                        <div class="elisyam-overlay overlay-01"></div>
                        <div class="authentication-col-content mx-auto">
                            <h1 class="gradient-text-01">
                                Seja bem vindo ao GetTime!
                            </h1>
                            <span class="description">
                                Acesse sua conta e aguarde em filas virtuais para visitar nossos parceiros! 
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                    <!-- Begin Form -->
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="{{ route('login') }}">
                                <img src="{{asset ('img/logo-big.png') }}" alt="logo">
                            </a>
                        </div>
                        <h3>Acessar o sistema</h3>
                            <div class="group material-input">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Email</label>
                            </div>
                            <div class="group material-input">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Senha</label>
                            </div>
                        <div class="row">
                            <div class="col text-left">
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="remember" id="remeber">
                                    <label for="remeber">Lembrar</label>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="#">Esqueceu sua senha?</a>
                            </div>
                        </div>
                        <div class="sign-btn text-center">
                            <button type="submit" class="btn btn-lg btn-gradient-01">
                                Login
                            </button>
                        </div>
                        <div class="register">
                                Não possui uma conta?
                                <br>
                                <a href="{{ route('register') }}">Cadastrar</a>
                        </div>
                    </div>
                </form>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        @endsection
