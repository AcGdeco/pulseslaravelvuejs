/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 //const files = require.context('./', true, /\.vue$/i)
 //files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
 //Deve compilar após inserção de um componente pelo comando npm run dev

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-componente', require('./components/Login.vue').default);
Vue.component('loginbd-componente', require('./components/LoginBD.vue').default);
Vue.component('novo-produto', require('./components/NovoProduto.vue').default);
Vue.component('lista-produtos', require('./components/ListaProdutos.vue').default);
Vue.component('editar-produto', require('./components/EditarProduto.vue').default);
Vue.component('dar-baixa', require('./components/DarBaixa.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
   el: '#app',
});
