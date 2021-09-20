/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

document.addEventListener('DOMContentLoaded', function () {

    const menuButtons = document.getElementsByClassName('button-menu');
    const eraseButtons = document.getElementsByClassName('erase-button');
    const hiddenMenu = document.getElementsByClassName('hidden-menu');
    const closeButtons = document.getElementsByClassName('close-button');
    const modalErase = document.getElementsByClassName('erase-modal');
    const displayNoneBlock = (element)=> {
        if (element.style.display === 'none') {
            element.style.display = 'block';
        } else {

            element.style.display = 'none';
        }
    };
    

    for (let x = 0; x < menuButtons.length; x++){
        menuButtons[x].addEventListener('click', function() {
            let menu = hiddenMenu[x];

            displayNoneBlock(menu);

        });

    }

    for (let x = 0; x < eraseButtons.length; x++) {

        
        eraseButtons[x].onclick = function () {
            modalErase[x].style.display = 'block';
        }


    }

    for (let x = 0; x < closeButtons.length; x++) {


        closeButtons[x].onclick = function () {
            modalErase[x].style.display = 'none';
        }


    }


    window.onclick = function(event){
        console.log(!event.target.matches('.button-menu'));

        if(!event.target.matches('.button-menu')){

            for(let x = 0; x < hiddenMenu.length; x++){
                hiddenMenu[x].style.display = 'none';
            }
        }
    }

})
