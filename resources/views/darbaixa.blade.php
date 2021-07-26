@extends('layouts.main')
@section('title', 'HOME')
@section('content')
    <br><br><br><br><br><br>
    <div class = "flex" >
        <form action="/qtdatualizada" method="post" enctype="multipart/form-data">
        @csrf
        <table class = "novo" >
          <tr>
            <td class = "titulo" colspan = "3" >
              &equiv; Adicionar Qtd. / Dar Baixa
            </td>
          </tr>
          <tr>
            <td style = "padding:10px;" colspan = "3" >
              <a href = "/" class = "avoltar"><span class = "voltar" >&lt; Voltar</span></a>
              </td>
            </tr>
          <tr>
            <td class = "tipoum">
              NOME / SKU / QTD. ESTOQUE<span class = "corvermelha" >*</span>
            </td>
            <td class = "tipoum" >
              QUANTIDADE
              <span class = "corvermelha" >*</span><br>
              <span style = "font-size:12px" >Valores negativos irão retirar, positivos incrementar</span>
            </td>
          </tr>
          <tr>
            <td class = "tipodois" >
              <select name = "produtos" id = "produtos">
                @foreach($produtos as $produto)
                    <option value = '{{$produto->id}}'>{{$produto->nome}} / {{$produto->sku}} / {{$produto->qtd}}</option>
                @endforeach
              </select>
            </td>
            <td class = "tipodois" >
              <input type = "number" name = "qtd" id = "qtd"/>
            </td>
          </tr>
          <tr>
            <td class = "paddingdez" colspan = "3" align="right" >
                <input type="submit" class="botao" value="Salvar">
            </td>
          </tr>
        </table>
        </form>
      </div>
@endsection
