<template>
    <div class = "flex" >
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
              <select @change="mudaroption" name = "produtos" id = "produtos">

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
      </div>
</template>

<script>
    export default {
    data: function(){
        return{
            prod: [
                    {id: 1, nome:  "Arroz", sku: "001AR", qtd: 100},
                    {id: 2, nome:  "Feijão", sku: "002FE", qtd: 200}
                ]
        }
    },
    props: {
        produtos: {
            type: Array,
            required: true
        }
    },
    methods:{
        mudaroption(){
            console.log(document.getElementById("produtos").value);
        }
    },
    mounted() {
        //alert(this.prod[1].nome);
        //alert(this.$props.produtos[3].nome);
        //alert(this.$props.produtos);
        //console.log(this.$props.produtos.length);
        var i;
        for(i=0;i<this.$props.produtos.length;i++){
            var option = document.createElement("option");   // Create a <button> element
            option.value = this.$props.produtos[i].id;
            option.innerHTML = this.$props.produtos[i].nome+" / "+this.$props.produtos[i].sku+" / "+this.$props.produtos[i].qtd;// Insert text
            document.getElementById("produtos").appendChild(option);               // Append <button> to <body>

        }
    }
}
</script>
