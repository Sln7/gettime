@extends('layouts.app_minimal')

@section('content')
<div class="container-fluid">

                    <div class="coming-soon mx-auto">
                        <h1>Mesa Disponível!</h1>
                    <div class="sub-heading">Dirija-se ao estabelecimento e garanta a sua mesa antes do tempo acabar</div>
                        <div class="row align-items-center justify-content-center">
                            <div id="countdown"><span id="time">05:00</span></div>
                        </div>
                        <div class="notify-form">
                            <div class="heading">
                                Sua mesa será destinada a outra pessoa ao final deste tempo, seja rápido!
                            </div>
                            <div class="boding">
                                <button type="button" class="btn btn-danger mr-1 mb-2" data-toggle="modal" data-target="#modal-small">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div id="modal-small" class="modal fade" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>
                                            Você realmente deseja abandonar a sua mesa?<br>
                                            Esta ação <b>não</b> pode ser revertida!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                            <form action="{{ route('user.end') }}">
                                        <button type="button" class="btn btn-danger mr-1 mb-2">Abandonar mesa</button>
                                    </form>
                                        <button type="button" class="btn btn-success mr-1 mb-2" data-dismiss="modal">Aguardar</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                    <script>
                        $('#exampleModal').on('show.bs.modal', event => {
                            var button = $(event.relatedTarget);
                            var modal = $(this);
                            // Use above variables to manipulate the DOM
                            
                        });
                    </script>
</div>
<script>



        function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;


        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
        </script>
@endsection