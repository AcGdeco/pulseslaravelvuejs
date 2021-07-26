<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Baixa;

use App\Models\Produto;

class BaixaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   public function store(Request $request)
   {

       $baixa = new Baixa;
       $baixa->idproduto = $request->produtos;
       $baixa->qtd = $request->qtd;

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
                $msg = "Baixa / incremento cadastrado";
            }
       }else{
           $msg = "Quantidade é necessária, Baixa / incremento não cadastrada";
       }
       return view('qtdatualizada',['qtdVazio' => $qtdVazio,'msg' => $msg,'baixa' => $baixa]);

       //return redirect('/');
   }

   public function relatorio(Request $request)
   {

       $produtos = Produto::join('baixas', 'baixas.idproduto', '=', 'produtos.id')
                            ->get();
       $datas = Baixa::all();

       return view('relatorio',['produtos' => $produtos,'datas' => $datas]);

       //return redirect('/');
   }

   public function relatoriofiltro(Request $request)
   {
       $dataselect = $request->datas;

       if($dataselect == "TODAS AS DATAS"){
            $produtos = Produto::join('baixas', 'baixas.idproduto', '=', 'produtos.id')
                                ->select('*','baixas.qtd AS bqtd', 'baixas.created_at AS bdata')
                                ->get();
            $produtostable = Produto::all();
       }else{

        $dataselect = date( "Y-m-d", strtotime( $dataselect ) );

        $produtos = Produto::join('baixas', 'baixas.idproduto', '=', 'produtos.id')
                                ->select('*','baixas.qtd AS bqtd', 'baixas.created_at AS bdata')
                                ->where([
                                    ['baixas.created_at','like','%'.$dataselect.'%']
                                ])
                                ->get();
        $produtostable = Produto::where([
                                    ['created_at','like','%'.$dataselect.'%']
                                ])
                                ->get();
       }

       $datas = Baixa::all();

       return view('relatoriofiltro',['produtos' => $produtos,'datas' => $datas,'dataselect' => $dataselect,'produtostable' => $produtostable]);

       //return redirect('/');
   }

}
