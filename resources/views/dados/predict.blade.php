@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Configuração de padrões para preenchimento de lista de treinamento</strong></div>
                <form action="{{route('dado.predict')}}" method="post">
                        @csrf
                        <div class="em-separator separator-dashed"></div>
                        <div class="row">
                        <div class="col-sm">
                            Número Total de Pessoas
                        </div>
                        <div class="col-sm">
                            <input type="number" name="n_pessoas" id="n_pessoas">
                        </div>
                    </div>
                    <div class="em-separator separator-dashed"></div>
                    <div class="row">
                        <div class="col-sm">
                            Há Criança(s)?
                        </div>
                        <div class="col-sm">
                                Sim <input type="radio" value="1" name="n_criancas" id="n_criancas">
                                Não <input type="radio" value="0" name="n_criancas" id="n_criancas">
                        </div>
                    </div>
                    <div class="em-separator separator-dashed"></div>
                    <div class="row">
                        <div class="col-sm">
                            Qual a menor faixa etaria presente na mesa?
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                              <label for=""></label>
                              <select name="faixa_etaria" id="faixa_etaria">
                                    <option value="1">0-3</option>
                                    <option value="2">4-8</option>
                                    <option value="3">9-14</option>
                                    <option value="4">15 +</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="em-separator separator-dashed"></div>
                    <div class="row">
                            <div class="col-sm">
                                Haverá consumo de bebida alcoólica?
                            </div>
                            <div class="col-sm">
                                Sim <input type="radio" value="1" name="bebida_alcool" id="bebida_alcool">
                                Não <input type="radio" value="0" name="bebida_alcool" id="bebida_alcool">
                            </div>
                        </div>
                    <div class="em-separator separator-dashed"></div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
