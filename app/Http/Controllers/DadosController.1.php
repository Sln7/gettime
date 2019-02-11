<?php

namespace App\Http\Controllers;

use App\Dados;
use App\Mesas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Phpml\Classification\KNearestNeighbors;

class DadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dadostabela = Dados::all();
        return view('dados.index', compact('dadostabela'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dados.create');
        return view('dado.index')->with('dados', $alg);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dadosData = $request->all();
        $dadosData['periodo_usado'] = $dadosData['min'] . "-" . $dadosData['max'];

        for ($i = 0; $i < $dadosData['quantidade']; $i++) {
            //Gerando um tempo randômico dentro do período estipulado
            $dadosData['tempo'] = rand($dadosData['min'], $dadosData['max']);
            //Gerando aleatório um dia da semana
            $dadosData['dia_semana'] = rand(1, 7);
            //Gerando clima aleatóriamente
            $dadosData['clima'] = rand(1, 3);
            //gerando presença de bebida alcoólica
            $dadosData['bebida_alcool'] = rand(0, 1);
            //Iniciando promocao
            $dadosData['promocao'] = 0;

            if ($dadosData['bebida_alcool'] == 1) {
                $dadosData['tempo'] += rand(5, 15);
            }

            if ($dadosData['n_criancas'] == 1) {
                if ($dadosData['faixa_etaria'] == 1) {
                    $dadosData['tempo'] -= rand(10, 20);
                } else if ($dadosData['faixa_etaria'] == 2) {
                    $dadosData['tempo'] -= rand(5, 10);
                } elseif ($dadosData['faixa_etaria'] == 3) {
                    $dadosData['tempo'] -= rand(0, 5);
                } else if ($dadosData['faixa_etaria'] == 4) {
                    $dadosData['tempo'] += rand(0, 5);
                }
            }

            if ($dadosData['dia_semana'] == 1 or $dadosData['dia_semana'] == 7) {
                $dadosData['tempo'] += rand(5, 10);
            } else if ($dadosData['dia_semana'] == 4 or $dadosData['dia_semana'] == 6) {
                $dadosData['tempo'] += rand(2, 8);
                $dadosData['promocao'] = rand(0, 1);
            } else {
                $dadosData['promocao'] = rand(0, 1);
            }

            if ($dadosData['clima'] == 1) {
                $dadosData['tempo'] += rand(5, 15);
                $dadosData['estacao'] = 3;
            } else if ($dadosData['clima'] == 2) {
                $dadosData['tempo'] += rand(-5, 10);
                $dadosData['estacao'] = rand(2, 4);
            } else if ($dadosData['clima'] == 3) {
                $dadosData['tempo'] -= rand(5, 10);
                $dadosData['estacao'] = 1;
            }

            if ($dadosData['promocao'] == 1) {
                $dadosData['tempo'] += rand(5, 10);
            }

            if ($dadosData['feriado'] == 1) {
                $dadosData['tempo'] += rand(5, 10);
            }

            $dados = new Dados();
            $dados->create($dadosData);

            $dadostabela = Dados::all();
        return view('dados.index', compact('dadostabela'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dados  $dados
     * @return \Illuminate\Http\Response
     */
    public function showpredict()
    {
        return view('dados.predict');
    }

    public function train()
    {

    }

    public function verificarFeriado($data, $boolean = false)
    {

        $param = array();

        // Sua chave (exigida após 01/08/2016!), leia no final dessa postagem!
        $param['key'] = 'd8b6077e-239b-41e9-84e3-223f5efdf43f';

        // Listas de países suportados!
        $paisesSuportados = array('BE', 'BG', 'BR', 'CA', 'CZ', 'DE', 'ES', 'FR', 'GB', 'GT', 'HR', 'HU', 'ID', 'IN', 'IT', 'NL', 'NO', 'PL', 'PR', 'SI', 'SK', 'US');

        // Define o pais para buscar feriados
        $param['country'] = $paisesSuportados[2];

        // Quebra a string em partes (em ano, mes e dia)
        list($param['year'], $param['month'], $param['day']) = explode('-', $data);

        // Converte a array em parâmetros de URL
        $param = http_build_query($param);

        // Conecta na API
        $curl = curl_init('https://holidayapi.com/v1/holidays?' . $param);

        // Permite retorno
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Obtem dados da API
        $dados = json_decode(curl_exec($curl), true);

        // Encerra curl
        curl_close($curl);

        // Retorna true/false se houver $boolean ou Nome_Do_Feriado/false se não houve $boolean
        return isset($dados['holidays']['0']) ? $boolean ? true : $dados['holidays']['0']['name'] : false;

    }

    public function predict(Request $request)
    {
        $dadosPredict = $request->all();
        $x = 0;
        $mesas = Mesas::all();
        $lugares = $mesas->pluck('lugares');
        $status = $mesas->pluck('status');


        //Trazendo dados do BD e separando cada atributo em arrays especificos
        $dados_filtro = Dados::all();
        $n_pessoas = $dados_filtro->pluck('n_pessoas');
        $n_criancas = $dados_filtro->pluck('n_criancas');
        $bebida = $dados_filtro->pluck('bebida_alcool');
        $tempo = $dados_filtro->pluck('tempo');
        $faixa_etaria = $dados_filtro->pluck('faixa_etaria');
        $clima = $dados_filtro->pluck('clima');
        $estacao = $dados_filtro->pluck('estacao');
        $feriado = $dados_filtro->pluck('feriado');
        $promocao = $dados_filtro->pluck('promocao');
        $dia_semana = $dados_filtro->pluck('dia_semana');

        //Preenchimento do conjunto de treinamento
        $i = 0;
        foreach ($dados_filtro as $d) {
            $dados[] = [$n_pessoas[$i], $n_criancas[$i], $bebida[$i], $faixa_etaria[$i], $clima[$i], $estacao[$i], $feriado[$i], $promocao[$i], $dia_semana[$i]];
            $resultado[] = $tempo[$i];
            $i++;
        }

        //Treinamento
        $classifier = new KNearestNeighbors();
        $classifier->train($dados, $resultado);

        //Verificação de feriado
        $dadosPredict['feriado'] = (int) $this->verificarFeriado(Carbon::now()->format('Y-m-d'));

        //Verificação de estação
        $currentMonth = Carbon::now()->format('m');
        if ($currentMonth >= "09" && $currentMonth <= "11") {
            $dadosPredict['estacao'] = 4;
        } elseif ($currentMonth >= "12" && $currentMonth <= "02") {
            $dadosPredict['estacao'] = 1;
        } elseif ($currentMonth >= "03" && $currentMonth <= "05") {
            $dadosPredict['estacao'] = 2;
        } else {
            $dadosPredict['estacao'] = 3;
        }

        //Verificação de dia da semana
        $dadosPredict['dia_semana'] = Carbon::now()->format('N');

        //Inserção de dados manuais

        $dadosPredict['clima'] = 2;
        $dadosPredict['promocao'] = 1;

        //Previsão
        $alg = $classifier->predict([$dadosPredict['n_pessoas'], $dadosPredict['n_criancas'],
            $dadosPredict['bebida_alcool'], $dadosPredict['faixa_etaria'], $dadosPredict['clima'],
            $dadosPredict['estacao'], $dadosPredict['feriado'], $dadosPredict['promocao'], $dadosPredict['dia_semana']]);

 
        $minutesnow = strtotime(Carbon::now()->format('H:i'));

        $predict = date("H:i", strtotime("+" . $alg . " minutes", $minutesnow));
        foreach ($mesas as $m) {

            if ($lugares[$x] >= $dadosPredict['n_pessoas'] && $status[$x] == 0) {
                Mesas::where('id', $x)->update(array('status' => '1','previsao' => $predict));
                return view('user.ready', compact('predict'));
            }
            $x++;
        }
        return view('user.time', compact('dadosPredict', 'alg', 'predict'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dados  $dados
     * @return \Illuminate\Http\Response
     */
    public function edit(Dados $dados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dados  $dados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dados $dados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dados  $dados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dados $dados)
    {
        //
    }
}
