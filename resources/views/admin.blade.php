@extends('layouts.app_minimal')

@section('content')
<div class="container-fluid h-100 overflow-y">
        <div class="row flex-row h-100">
            <div class="col-12 my-auto">
                <div class="coming-soon mx-auto"><li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"> Sair</i>
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form></li>
                        <h2>Bem vindo <span>{{Auth::user()->name}}</span>{{Auth::user()->role}}</h2>
                    <div class="sub-heading">Selecione um estabelecimento parceiro, para entrar na fila!</div>
                    <div class="row align-items-center justify-content-center">
                        <div id="countdown"></div>
                    </div>
                    <div class="notify-form">
                        <div class="heading">
                            Ao clicar você será redirecionado(a) para uma formulário, onde deve preencher seus dados para verificar se há uma mesa e/ou o tempo de espera
                        </div>
                    </div>
                    <div class="button text-center">
                            <div class="logo-centered">
                                    <a href="{{ route('user.start') }}">
                                            <h2>Pepperoni Pizza<h2>
                                            <img src="{{asset ('img/logo-pizza.png')}}" alt="logo">
                                    </a>
                            </div>
                    </div>
                </div> 
                <!-- End Coming Soon -->
            </div>
            <!-- End Col -->
        </div> 
        <!-- End Row -->
    </div>
@endsection
