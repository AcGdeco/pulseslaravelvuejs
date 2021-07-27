<template>
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
</template>
<script>
export default {
    props: {
        produtos: {
            type: Array,
            required: true
        }
    },
    mounted() {
        //alert(this.prod[1].nome);
        //alert(this.$props.produtos[3].nome);
        //alert(this.$props.produtos);
        //console.log(this.$props.produtos.length);
        var table = document.getElementById("lista");
        var i;
        for(i=0;i<this.$props.produtos.length;i++){
            var row = table.insertRow(i);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);

            cell1.innerHTML = this.$props.produtos[i].id;
            cell2.innerHTML = this.$props.produtos[i].nome;
            cell3.innerHTML = this.$props.produtos[i].sku;
            cell4.innerHTML = this.$props.produtos[i].qtd;
            cell5.innerHTML = '<a class="botao" style = "background-color:orange;text-align:center;" href = "/editar/'+this.$props.produtos[i].id+'" >Editar</a>';
            cell6.innerHTML = '<a class="botao" style = "background-color:red;" href = "/excluir/'+this.$props.produtos[i].id+'" >Excluir</a>';

            cell1.style = "border:solid 1px gray;padding:10px;width:50px;";
            cell2.style = "border:solid 1px gray;padding:10px;width:200px;";
            cell3.style = "border:solid 1px gray;padding:10px;width:200px;";
            cell4.style = "border:solid 1px gray;padding:10px;width:135px;";
            cell5.style = "border:solid 1px gray;padding:10px;width:135px;text-align:center;";
            cell6.style = "border:solid 1px gray;padding:10px;width:135px;text-align:center;";
        }
    }
}
</script>
