<?php

namespace App\Http\Controllers;

use App\Mesas;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesas::all();
        return view('mesas.index', compact('mesas'));
        
    }

    public function liberamesa(Mesas $mesas)
    {
        $mesas = $request;
        Mesas::where('id', $mesas)->update(array('status' => '0','previsao' => null,'nome' => null));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function show(Mesas $mesas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesas $mesas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesas $mesas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesas  $mesas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesas $mesas)
    {
        //
    }
}
