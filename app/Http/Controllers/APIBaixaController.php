<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Baixa;

use App\Models\Produto;

class APIBaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Baixa::all();
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
        $baixa = new Baixa;
        $baixa->idproduto = $request->id;
        $baixa->qtd = $request->qtd;
        $baixa->metodo = $request->metodo;

        $baixaBD = Produto::where('id', $baixa->idproduto)->first();

        $qtdVazio = "não";

        if(empty($baixa->qtd)){
            $qtdVazio = "sim";
        }

        if($qtdVazio == "não"){
                $valorFinal = $baixaBD->qtd + $baixa->qtd;
                if($valorFinal < 0){
                    $msg = "A quantidade a ser retirada é maior do que a quantidade presente no estoque.";
                }else{
                    $baixaBD->qtd = $valorFinal;
                    $baixaBD->save();
                    $baixa->save();
                    //Produto::create($request->all());
                    $msg = "Baixa / incremento cadastrado";
                }
        }else{
            $msg = "Quantidade é necessária, Baixa / incremento não cadastrada";
        }
        return $msg;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
