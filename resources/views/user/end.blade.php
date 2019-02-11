@extends('layouts.app_minimal')

@section('content')
<div class="container-fluid">

                    <div class="coming-soon mx-auto">
                        <h1>Que pena que desistiu :(</h1>
                        <div class="sub-heading">Poderia nos informar o motivo da desistência?</div>
                        <br>
                        <div class="row align-items-center justify-content-center">
                                <textarea class="form-control" placeholder="Motivo da desistência" required=""></textarea>
                        </div>
                        <br>
                        <div class="notify-form">
                            <div class="heading">
                            </div>
                            <div class="boding">
                                <button type="button" class="btn btn-success mr-1 mb-2" data-toggle="modal" data-target="#modal-centered" onclick="redirecionar()">Enviar</button>
                                <button type="button" class="btn btn-danger mr-1 mb-2" data-toggle="modal" data-target="#modal-centered" onclick="redirecionar()">Sair</button>

                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div id="modal-centered" class="modal fade" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <div class="sa-icon sa-success animate" style="display: block;">
                                                <span class="sa-line sa-tip animateSuccessTip"></span>
                                                <span class="sa-line sa-long animateSuccessLong"></span>
                                                <div class="sa-placeholder"></div>
                                                <div class="sa-fix"></div>
                                            </div>
                                            <div class="section-title mt-5 mb-2">
                                                <h2 class="text-gradient-01">Agradecemos a preferência!</h2>
                                            </div>
                                            <p class="mb-5">Até mais :)</p>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    
                    <script>
       function redirecionar() {
        setTimeout(function() {
            window.location.href = "start";
        }, 3500);
       }
                    </script>
</div>
@endsection