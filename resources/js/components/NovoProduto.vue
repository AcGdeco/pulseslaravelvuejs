<template>
<div class = "flex" >
  <table class = "novo" >
    <tr>
      <td class = "titulo" colspan = "3" >
        &equiv; Cadastro de Produtos
      </td>
    </tr>
    <tr>
      <td style = "padding:10px;" colspan = "3" >
        <a href = "/listaprodutos" class = "avoltar"><span class = "voltar" >&lt; Voltar</span></a>
        </td>
      </tr>
    <tr>
      <td class = "tipoum">
        NOME<span class = "corvermelha" >*</span>
      </td>
      <td class = "tipoum" >
        SKU<span class = "corvermelha" >*</span>
      </td>
      <td class = "tipoum" >
        QUANTIDADE
        <span class = "corvermelha" >*</span>
      </td>
    </tr>
    <tr>
      <td class = "tipodois" >
        <input type = "text" id = "nome" name = "nome" />
      </td>
      <td class = "tipodois" >
        <input type = "text" id = "sku" name = "sku" />
      </td>
      <td class = "tipodois" >
        <input type = "number" id = "qtd" name = "qtd" />
      </td>
    </tr>
    <tr>
      <td class = "paddingdez" colspan = "3" align="right" >
        <input type="submit" class="botao" value="Salvar">
      </td>
    </tr>
  </table>
</div>
</template>
<script>
export default {

}
</script>
