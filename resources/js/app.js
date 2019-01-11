
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./files/bootstrap');


import Vue              from 'vue';
import router           from './files/routes';

const VueApp = new Vue({
    el: '#VueApp',
    router,
});

/*
  librerias usadas
  ----------------------------------------------------------------------------------------------------------------
  NOMBRE            USO                             URL
  ----------------------------------------------------------------------------------------------------------------
                   Componentes hechos con vue       https://madewithvuejs.com
 vue-datetime       Manejo de fechas y horas        https://github.com/mariomka/vue-datetime?ref=madewithvuejs.com
                    Demo                            https://mariomka.github.io/vue-datetime/
*/
