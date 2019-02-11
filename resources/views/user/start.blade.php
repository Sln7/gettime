@extends('layouts.app_minimal')

@section('content')
<div class="container-fluid">
        <div class="coming-soon mx-auto">
                <h2>Verificação de mesa</h2>
                <div class="sub-heading">Entre com seus dados para verificar disponibilidade</div>
                <br>
                <div class="row align-items-center justify-content-center">
                <form class="needs-validation" action="{{route('dado.predict')}}" method="post">
                        @csrf
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nome</label>
                                    <div class="col-lg-6">
                                    <input id='nome' value="{{Auth::user()->name}}" type="text" class="form-control" placeholder="Digite seu nome" readonly>
                                    </div>
                                </div>

                                <div class="form-group row d-flex align-items-center mb-3">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Número de pessoas *</label>
                                    <div class="col-lg-6">
                                            <input id="n_pessoas" name="n_pessoas" type="number" class="form-control" placeholder="N°">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Há crianças? *</label>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-radio styled-radio mb-3">
                                            <input class="custom-control-input" type="radio" name="n_criancas" value='1' id="opt" required>
                                            <label class="custom-control-descfeedback" for="opt">Sim</label>
                                            <div class="invalid-feedback">
                                                Selecione uma opção válida
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="custom-control custom-radio styled-radio mb-3">
                                            <input class="custom-control-input" type="radio" name="n_criancas" value='0' id="opt2" required>
                                            <label class="custom-control-descfeedback" for="opt2">Não</label>
                                            <div class="invalid-feedback">
                                              Selecione uma opção válida
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                        <div class="form-group row mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Pretende consumir bebida(s) alcoólica(s)? *</label>
                                                <div class="col-lg-2">
                                                    <div class="custom-control custom-radio styled-radio mb-3">
                                                        <input class="custom-control-input" type="radio" name="bebida_alcool" value='1' id="opt22" required>
                                                        <label class="custom-control-descfeedback" for="opt22">Sim</label>
                                                        <div class="invalid-feedback">
                                                            Selecione uma opção válida
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="custom-control custom-radio styled-radio mb-3">
                                                        <input class="custom-control-input" type="radio" name="bebida_alcool" value='0' id="opt33" required>
                                                        <label class="custom-control-descfeedback" for="opt33">Não</label>
                                                        <div class="invalid-feedback">
                                                          Selecione uma opção válida
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Menor faixa etária presente *</label>
                                                    <div class="col-lg-5">
                                                        <div class="select">
                                                            <select name="faixa_etaria" class="custom-select form-control" required>
                                                                <option value="">Selecione</option>
                                                                <option value="1">0 - 3 Anos</option>
                                                                <option value="2">4 - 8 Anos</option>
                                                                <option value="3">9 - 14 Anos</option>
                                                                <option value="4">15 +</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Por favor, selecione uma opção
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Observações</label>
                                    <div class="col-lg-5">
                                        <textarea class="form-control" placeholder="   Digite..." required></textarea>
                                        <div class="invalid-feedback">
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>                               
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit">Enviar</button>
                                    <button class="btn btn-shadow" type="reset">Limpar</button>
                                </div>
                            </form>
                </div>
            </div>            
</div>
@endsection