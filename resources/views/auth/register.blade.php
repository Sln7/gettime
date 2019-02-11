@extends('layouts.app_minimal')

@section('content')
<div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <!-- Begin Left Content -->
            <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                <div class="elisyam-bg background-05">
                    <div class="elisyam-overlay overlay-04"></div>
                    <div class="authentication-col-content mx-auto">
                        <h1 class="gradient-text-01">
                            Seja bem vindo ao GetTime!
                        </h1>
                        <span class="description">  
                            Crie uma conta e aguarde em filas virtuais para visitar estabelecimentos parceiros! 
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Left Content -->
            <!-- Begin Right Content -->
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                <!-- Begin Form -->
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="{{ route('login') }}">
                            <img src="{{asset ('img/logo-big.png')}}" alt="logo">
                        </a>
                    </div>
                    <h3>Crie uma conta</h3>
                    <form>
                        <div class="group material-input">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>
                        <div class="group material-input">
                            <input type="password" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Senha</label>
                        </div>
                        <div class="group material-input">
                            <input type="password" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Confirme a senha</label>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col text-left">
                            <div class="styled-checkbox">
                                <input type="checkbox" name="checkbox" id="agree">
                                <label for="agree">Eu aceito <a href="#">os termos e condições</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="sign-btn text-center">
                        <a href="db-default.html" class="btn btn-lg btn-gradient-01">
                            Criar minha Conta
                        </a>
                    </div>
                    <div class="register">
                        Já tem uma conta?
                        <br>
                        <a href="{{ route('login') }}">Entrar</a>
                    </div>  
                </div>
                <!-- End Form -->                      
            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Row -->
    </div>

@endsection
