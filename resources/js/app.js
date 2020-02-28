require('./bootstrap');

//Vue.use(require('vue-resource')) 


window.Vue = Vue;

import Vue from 'vue';



/* ****** ****** Begin vuetify  : ****    ****** ****** */

import Vuetify from 'vuetify'

import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)

export default new Vuetify({})

/* ****** ****** END vuetify  : ****    ****** ****** */



Vue.prototype.$http = axios;

window.Vue = require('vue');



/* ****** ******  PROFIL  : ****    ****** ****** */


Vue.component('test', require('./components/test.vue').default);


import VueRouter from 'vue-router'
 
Vue.use(VueRouter);


// if you delete this code and you write const router = new VueRouter( .. without it vuejs pages will not been working
const routes = [

     
] 

const router = new VueRouter({

 routes ,

 mode : 'history' ,

 linkActiveClass: 'active'
 


}) 



const app = new Vue({

  el: '#app',

  vuetify: new Vuetify(),

  router ,

});
