<template>
<div class = 'flex' >
    <table class = 'loginCadastro tableLogin'>
        <tr class = 'loginCadastro' >
            <th class = 'loginCadastro' >
                LOGIN
            </th>
        </tr>
        <tr class = 'loginCadastro'>
            <td class = 'loginCadastro' >
                LOGIN<br>
                <input type = 'text' id = 'Login' />
            </td>
        </tr>
        <tr class = 'loginCadastro'>
            <td class = 'loginCadastro' >
                SENHA<br>
                <input type = 'password' id = 'senhaLogin' />
            </td>
        </tr>
        <tr class = 'loginCadastro'>
            <td class = 'loginCadastro' >
                <span v-on:click='logar()' id = 'login' class = 'loginCadastro'>LOGIN</span>
            </td>
        </tr>
    </table>
    <div id= "loginLogar" style = "display:none;" >{{ login }}</div>
    <div id= "senhaLogar" style = "display:none;" >{{ senha }}</div>
</div>
</template>

<script>
export default {
    props: ['login','senha'],
    methods:{
        logar(){
            var login;
            var senha;

            var loginDigitado;
            var senhaDigitada;

            login = document.getElementById('loginLogar').innerHTML;
            senha = document.getElementById('senhaLogar').innerHTML;

            loginDigitado = document.getElementById("Login").value;
            senhaDigitada = document.getElementById("senhaLogin").value;

            if(loginDigitado == login && senhaDigitada == senha){

                window.location.href = "/loginBD";

            }else{
                alert("Dado(s) errado(s)");
            }
        }
    }
}
</script>
