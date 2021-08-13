/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import 'animate.css';

require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('grupos-select', require('./components/GruposSelect.vue').default);
Vue.component('alumnos-select', require('./components/AlumnosSelect.vue').default);
Vue.component('eliminar-grupo', require('./components/EliminarGrupo.vue').default);
Vue.component('eliminar-curso', require('./components/EliminarCurso.vue').default);
Vue.component('eliminar-alumno', require('./components/EliminarAlumno.vue').default);
Vue.component('activar-grupo', require('./components/ActivarGrupo.vue').default);
Vue.component('activar-curso', require('./components/ActivarCurso.vue').default);
/** CHARTS  */
Vue.component('chart-js', require('./components/ChartJs.vue').default);
Vue.component('donut-chart', require('./components/charts/DonutChart.vue').default);
Vue.component('bar-chart-y', require('./components/charts/BarChartY.vue').default);
Vue.component('bar-chart', require('./components/charts/BarChart.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
