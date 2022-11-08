/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { event } from 'jquery';
// window.Vue = require('vue');
import Vue from 'vue';


const form = document.getElementById('form');
const inputMessage = document.getElementById('input-message');

form.addEventListener('submit', function(event){
    event.preventDefault();
    const userInput = inputMessage.value;

    axios.post('/chat-message',{
        message: userInput
    }).then(function(response){
        console.log(response);
    }).catch(error=>{
        console.log(error);
    });
});

// axios.post('/axiospost',{
//     message:123
// }).then(function (response){
//     console.log(response);
// }).catch(error=>{
//     console.log(error);
// });




const channel = Echo.channel('public.playground.1');

channel.subscribed(()=>{
    console.log('success@@!');
}).listen('.chat-message',(event)=>{
    console.log(event);
});



// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
