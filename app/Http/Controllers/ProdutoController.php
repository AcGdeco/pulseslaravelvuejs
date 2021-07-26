<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('listaprodutos',['produtos' => $produtos]);
    }

    public function indexbaixa()
    {
        $produtos = Produto::all();

        return view('darbaixa',['produtos' => $produtos]);
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
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->sku = $request->sku;
        $produto->qtd = $request->qtd;

        $produtos = Produto::where([
            ['sku','=',$produto->sku]
        ])
        ->get();

        $existeProSKU = "não";
        if(!empty($produtos[0]->sku)){
            $existeProSKU = "sim";
        }

        $nomeVazio = "não";
        $skuVazio = "não";
        $qtdVazio = "não";

        if(empty($produto->nome)){
            $nomeVazio = "sim";
        }
        if(empty($produto->sku)){
            $skuVazio = "sim";
        }
        if(empty($produto->qtd)){
            $qtdVazio = "sim";
        }

        if($nomeVazio == "não" && $skuVazio == "não" && $qtdVazio == "não" && $existeProSKU == "não"){
            $produto->save();
            $msg = "Produto cadastrado";
        }else if($existeProSKU == "sim"){
            $msg = "Já existe um produto com esse SKU";
        }else{
            $msg = "Há campos vazios, produto não cadastrado";
        }
        return view('novoproduto',['nomeVazio' => $nomeVazio,'skuVazio' => $skuVazio,'qtdVazio' => $qtdVazio,'msg' => $msg,'existeProSKU' => $existeProSKU,'produtos' => $produtos]);

        //return redirect('/');
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
        $produto = Produto::where('id', $id)->first();

        return view('editar',['id' => $id,'produto' => $produto]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $produto = new Produto;
        $produto->id = $request->id;

        $produto = Produto::find($produto->id);

        if(!empty($request->nome)){
            $produto->nome = $request->nome;
        }else{
            $produto->nome = "";
        }
        if(!empty($request->sku)){
            $produto->sku = $request->sku;
        }else{
            $produto->sku = "";
        }
        if(!empty($request->qtd)){
            $produto->qtd = $request->qtd;
        }else{
            $produto->qtd = "";
        }

        $nomeVazio = "não";
        $skuVazio = "não";
        $qtdVazio = "não";

        if(empty($produto->nome)){
            $nomeVazio = "sim";
        }
        if(empty($produto->sku)){
            $skuVazio = "sim";
        }
        if(empty($produto->qtd)){
            $qtdVazio = "sim";
        }

        if($nomeVazio == "não" && $skuVazio == "não" && $qtdVazio == "não"){
            $produto->save();
            $msg = "Produto atualizado";
        }else{
            $msg = "Há campos vazios, produto não atualizado";
        }
        return view('editar',['nomeVazio' => $nomeVazio,'skuVazio' => $skuVazio,'qtdVazio' => $qtdVazio,'msg' => $msg,'produto' => $produto]);
    }

    public function updateqtd(Request $request)
    {
        $produto = new Produto;
        $produto->id = $request->id;

        $produto = Produto::find($produto->id);

        if(!empty($request->nome)){
            $produto->nome = $request->nome;
        }else{
            $produto->nome = "";
        }
        if(!empty($request->sku)){
            $produto->sku = $request->sku;
        }else{
            $produto->sku = "";
        }
        if(!empty($request->qtd)){
            $produto->qtd = $request->qtd;
        }else{
            $produto->qtd = "";
        }

        $nomeVazio = "não";
        $skuVazio = "não";
        $qtdVazio = "não";

        if(empty($produto->nome)){
            $nomeVazio = "sim";
        }
        if(empty($produto->sku)){
            $skuVazio = "sim";
        }
        if(empty($produto->qtd)){
            $qtdVazio = "sim";
        }

        if($nomeVazio == "não" && $skuVazio == "não" && $qtdVazio == "não"){
            $produto->save();
            $msg = "Produto atualizado";
        }else{
            $msg = "Há campos vazios, produto não atualizado";
        }
        return view('editar',['nomeVazio' => $nomeVazio,'skuVazio' => $skuVazio,'qtdVazio' => $qtdVazio,'msg' => $msg,'produto' => $produto]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::destroy($id);
        $msg = "Produto Excluído";
        return view('produtoexcluido',['msg' => $msg, 'id' => $id]);
    }
}
