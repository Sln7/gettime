@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                            @foreach($mesas as $m)
                            <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Mesa <strong>{{$m->id}}</strong><h5>
                                <p class="card-text">
                                    Capacidade: <strong>{{$m->lugares}}</strong> Lugares
                                    <br>
                                    Status:<?php 
                                    if($m->status == 0){
                                        echo("<b>Livre</b>");
                                    }elseif($m->status == 1){
                                        echo("<b>Resevardo</b><br>");
                                        echo("Cliente: <b>".$m->cliente."</b>");
                                    }else{
                                        echo("<b>Ocupada</b><br>");
                                        echo("Cliente: <b>".$m->cliente."</b>");
                                    }?>
                                    <br>Previsão de Liberação:{{$m->previsao}}
                                </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mesa{{$m->id}}">Ocupar Mesa</button>
                                  <a href="#" class="btn btn-danger">Liberar Mesa</a>
                                </div>
                              </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
