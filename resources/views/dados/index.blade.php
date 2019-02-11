@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item active">Dados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Export -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>Tabela de dados</h4>
                    </div>
                    <div class="widget-body">
                        <div class="table-responsive">
                            <table id="export-table" class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Número de pessoas</th>
                                        <th>Crianças</th>
                                        <th>Bebida Alcoólica</th>
                                        <th>Faixa Etária (Min)</th>
                                        <th>Clima</th>
                                        <th>Estação</th>
                                        <th>Feriado</th>
                                        <th>Promoção</th>
                                        <th>Dia da Semana</th>
                                        <th>Tempo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dadostabela as $dt)
                                    <tr>
                                    <td>{{$dt->id}}</td>
                                    <td>{{$dt->n_pessoas}}</td>
                                    <td>
                                    @php if($dt->n_criancas == 1){
                                        echo "Sim";
                                    }else{
                                        echo "Não";
                                    } 
                                    @endphp
                                    </td>
                                    <td>
                                            @php if($dt->bebida_alcool == 1){
                                                echo "Sim";
                                            }else{
                                                echo "Não";
                                            } 
                                            @endphp
                                            </td>
                                    </td>
                                    <td>{{$dt->faixa_etaria}}</td>
                                    <td>{{$dt->clima}}</td>
                                    <td>{{$dt->estacao}}</td>
                                    <td>
                                            @php if($dt->feriado == 1){
                                                echo "Sim";
                                            }else{
                                                echo "Não";
                                            } 
                                            @endphp
                                            </td>
                                    </td>
                                    <td>
                                            @php if($dt->promocao == 1){
                                                echo "Sim";
                                            }else{
                                                echo "Não";
                                            } 
                                            @endphp
                                            </td>
                                    </td>
                                    <td>{{$dt->dia_semana}}</td>
                                    <td>{{$dt->tempo}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Export -->
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection
