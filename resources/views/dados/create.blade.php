@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Configuração de padrões para preenchimento de lista de treinamento</strong></div>
                <form action="{{route('dado.store')}}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-sm">
                            Quantidade de registros
                        </div>
                        <div class="col-sm">
                            <input type="number" name="quantidade" id="quantidade">
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-sm">
                            Número Total de Pessoas
                        </div>
                        <div class="col-sm">
                            <input type="number" name="n_pessoas" id="n_pessoas">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            Há Criança(s)?
                        </div>
                        <div class="col-sm">
                                Sim <input type="radio" value="1" name="n_criancas" id="n_criancas">
                                Não <input type="radio" value="0" name="n_criancas" id="n_criancas">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            Feriado?
                        </div>
                        <div class="col-sm">
                            Sim <input type="radio" value="1" name="feriado" id="feriado">
                            Não <input type="radio" value="0" name="feriado" id="feriado">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            Faixa Etaria aproximada das crianças?
                            *Considerar a menor idade
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
                    <div class="row">
                            <div class="col-sm">
                                Insira um período de tempo de permanência para estas configurações
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm">
                                    Tempo minimo em minutos<br>
                                    <input type="number" name="min" id="min">
                                </div>
                                <div class="col-sm">
                                    Tempo maximo em minutos<br>
                                    <input type="number" name="max" id="max">
                                </div>
                            </div>
                            <br>
                            <center>
                            <button type="submit">Gerar dados</button>
                        </center>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
