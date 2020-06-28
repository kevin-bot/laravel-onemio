require('./bootstrap');
window.Vue = require('vue');

Vue.component('main-component', require('./components/MainComponent.vue').default);
Vue.component('formulario-component', require('./components/FormularioComponent.vue').default);
Vue.component('tarea-component', require('./components/TareaComponent.vue').default);


const app = new Vue({
    el: '#app',
});
