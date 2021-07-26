@extends('layouts.main')
@section('title', 'Modificar Estoque')
@section('content')
    <br><br><br><br><br><br>
    @if (!empty($msg) && $msg == "Produto Excluído")
        <div class = "msgCadastrado" >{{ $msg }}</div>
    @elseif(!empty($msg))
        <div class = "msgErro" >{{ $msg }}</div>
    @endif
    <div class = "flex" >
        <table class = "lista" >
            <tr>
                <td class = "tituloPrincipal" >
                    &equiv; Gerenciamento de Produtos
                </td>
            </tr>
            <tr>
                <td class = "botoes" >
                    <span class = "voltar" onclick="window.open(document.referrer,'_self');">&lt; Voltar</span>
                    <a href = "/novoproduto" style = "text-decoration:none;" ><span class = "botaoNovo" > + Novo </span></a>
                </td>
            </tr>
            <tr>
                <td style = "padding:5px;" >
                    <table style = "border:1px solid gray;border-collapse:collapse;" >
                        <tr>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:50px;" >
                                ID
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:200px;" >
                                NOME
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:200px;" >
                                SKU
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:135px;" >
                                QUANTIDADE
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:135px;" >
                                EDITAR
                            </td>
                            <td style = "border:solid 1px gray;padding:10px;font-weight:bolder;background-color:white;width:135px;" >
                                EXCLUIR
                            </td>
                        </tr>
                    </table>

                    <table style = "border:1px solid gray;border-collapse:collapse;" id="lista" >
                        <tr>
                            <td>

                            </td>
                        </tr>
                        @foreach($produtos as $produto)
                            <tr id = "{{$produto->id}}" >
                                <td style = 'border:solid 1px gray;padding:10px;width:50px;' >{{$produto->id}}</td>
                                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produto->nome}}</td>
                                <td style = 'border:solid 1px gray;padding:10px;width:200px;' >{{$produto->sku}}</td>
                                <td style = 'border:solid 1px gray;padding:10px;width:135px;' >{{$produto->qtd}}</td>
                                <td style = 'border:solid 1px gray;padding:10px;width:135px;text-align:center;' ><a class="botao" style = "background-color:orange;text-align:center;" href = "/editar/{{$produto->id}}" >Editar</a></td>
                                <td style = 'border:solid 1px gray;padding:10px;width:135px;text-align:center;' ><a class="botao" style = "background-color:red;" href = "/excluir/{{$produto->id}}" >Excluir</a></td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td style = "padding:20px;" >
                    <span style = "float:left;font-size:10px;" id="myDIVdois" ></span>
                    <span style = "float:right;" id="myDIV" ></span>
                </td>
            </tr>
        </table>
    </div>
@endsection

