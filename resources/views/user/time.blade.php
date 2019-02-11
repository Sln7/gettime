@extends('layouts.app_minimal')

@section('content')
<div class="container-fluid">
                    <div class="coming-soon mx-auto">
                        <h2>Não encontramos uma mesa disponível</h2>
                        <div class="sub-heading">Sua mesa estará disponível em aproximadamente:</div>
                        <div class="row align-items-center justify-content-center">
                            <div id="countdown"></div>
                        </div>
                        <div class="notify-form">
                            <div class="heading">
                                Nós enviaremos um alerta assim que uma mesa para {{$dadosPredict['n_pessoas']}} pessoas estiver disponível
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
                                    <div class="modal-header">
                                        <h4 class="modal-title">Confirmação</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                            <span class="sr-only">close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Você realmente deseja cancelar a sua entrada na fila?<br>
                                            Esta ação <b>não</b> pode ser revertida!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('user.end') }}">
                                        <button type="submit" class="btn btn-danger mr-1 mb-2">Desejo sair da fila</button>
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
                <input id="predict" type="text" value="{{$predict}}" hidden>
</div>
<script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 1, 2019 {{$predict}}:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get todays date and time
          var now = new Date().getTime();
        
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
        
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
          // Display the result in the element with id="demo"
          
          document.getElementById("countdown").innerHTML = '<div class="counter"><span>'+ hours +'</span><p>Horas</p></div>'
			+ '<div class="counter"><span>' + minutes + '</span><p>Minutos</p></div>'
            + '<div class="counter"><span>' + seconds + '</span><p>Segundos</p></div>';
        
          // If the count down is finished, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdowns").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
@endsection