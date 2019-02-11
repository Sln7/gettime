@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Resultados</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item active">Resultados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-xl-12">
                Minutos: {{$alg}}
                Previsão de liberação {{$predict}}
                <?php dd($dadosPredict); ?>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection
