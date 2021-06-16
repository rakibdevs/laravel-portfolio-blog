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
Vue.component('portfolio-form', require('./components/admin/PortfolioForm.vue').default);
Vue.component('project-component', require('./components/ProjectComponent.vue').default);
Vue.component('portfolio-component', require('./components/PortfolioComponent.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);
Vue.component('slider-component', require('./components/SliderComponent.vue').default);
Vue.component('resume-component', require('./components/ResumeComponent.vue').default);
Vue.component('github-repositories', require('./components/GithubRepositories.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.filter('truncate', function (text, stop, clamp) {
    return text.slice(0, stop) + (stop < text.length ? clamp || '...' : '')
})


const app = new Vue({
    el: '#app',
});
