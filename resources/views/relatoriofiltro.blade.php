@extends('layouts.main')
@section('title', 'Relatório')
@section('content')
    <br><br><br><br><br><br>
    <form action="/relatoriofiltro" method="post" enctype="multipart/form-data">
    @csrf
    @php
    $contador = 0;
    foreach($datas as $data){
       $dataformatada = date( "d/m/Y", strtotime( $data->created_at ) );
       $datasemformato = $data->created_at;

       if($contador == 0){
        $datasUnicas[$contador] = $dataformatada;
        $datasemformatoUnicas[$contador] = $datasemformato;
        $contador += 1;
       }else{
        $dataJaExiste = "não";
        for($i=0;$i<$contador;$i++){
            if($datasUnicas[$i] == $dataformatada){
                $dataJaExiste = "sim";
            }
        }
        if($dataJaExiste == "não"){
            $datasUnicas[$contador] = $dataformatada;
            $datasemformatoUnicas[$contador] = $datasemformato;
            $contador += 1;
        }
       }
    }
    echo "<div class = 'flex'>";
    echo "<select name = 'datas' >";
        echo "<option value = 'TODAS AS DATAS'>TODAS AS DATAS</option>";
    for($i=0;$i<$contador;$i++){
        $pos = strripos($datasemformatoUnicas[$i], $dataselect);
        if($pos === false){
            echo "<option value = '$datasemformatoUnicas[$i]' >$datasUnicas[$i]</option>";
        }else{
            echo "<option selected value = '$datasemformatoUnicas[$i]' >$datasUnicas[$i]</option>";
        }
    }
    echo "</select>";
    echo "</div>";
    @endphp
    <div class = 'flex' style = 'padding:5px;'>
        <input type="submit" class="botao" style = "background-color:orange;" value="Buscar">
    </div>
    </form>
    <div style = "display:flex;justify-content:center;" >
        <table style = "border-collapse:collapse;" >
            <th colspan= "5" style = 'border:solid 1px gray;padding:10px;width:200px;background-color:green;color:white;' >Relatório Baixa / Incremento</th>
            <tr>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >NOME</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >SKU</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >BAIXA / INCRE.</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >DATA</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >MÉTODO</td>
            </tr>
        @foreach($produtos as $produto)
            <tr id = "{{$produto->id}}" >
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produto->nome}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produto->sku}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produto->bqtd}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{date( "d/m/Y", strtotime( $produto->bdata))}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produto->metodo}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <br><br>
    <div class = "flex" style="color:red;" >Se as palavras de uma linha da tabela estiverem em vermelho, significa que o produto está com menos de 100 unidades no estoque</div>
    <div style = "display:flex;justify-content:center;" >
        <table style = "border-collapse:collapse;" >
            <th colspan= "5" style = 'border:solid 1px gray;padding:10px;width:200px;background-color:green;color:white;' >Relatório do Estoque Atual</th>
            <tr>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >NOME</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;background-color:lightgray;' >SKU</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >QUANTIDADE</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >DATA</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;background-color:lightgray;' >MÉTODO</td>
            </tr>
        @foreach($produtostable as $produtotable)
        @if ($produtotable->qtd < 100)
            <tr id = "{{$produtotable->id}}" style = "color:red;" >
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produtotable->nome}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produtotable->sku}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produtotable->qtd}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{date( "d/m/Y", strtotime( $produtotable->created_at))}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produtotable->metodo}}</td>
            </tr>
        @else
            <tr id = "{{$produtotable->id}}" >
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produtotable->nome}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produtotable->sku}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produtotable->qtd}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{date( "d/m/Y", strtotime( $produtotable->created_at))}}</td>
                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produtotable->metodo}}</td>
            </tr>
        @endif

        @endforeach
        </table>
    </div>
@endsection
