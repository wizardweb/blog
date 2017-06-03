
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));



import axios from 'axios'



class Post {

    constructor(title, link, author, img){
        this.title = title;
        this.link = link;
        this.author = author;
        this.img = img;

    }



}


const app = new Vue({
    el: '#app',

    data: {
        value: 1,
        message: 'hello world',
        test:'',
        todos: [
            'Laravel',
            'Javascript',
            'Javascript',
            'Javascript',
            'Javascript'
        ],

        keyword: '',
    },


});



new Vue({
   el:'#app2',
    data:{
        test:''

    },

    mounted() {
    axios.get(`http://jsonplaceholder.typicode.com/posts`)
        .then(response =>
        // JSON responses are automatically parsed.
        this.test = response.data
    )
    .catch(e => {
            this.errors.push(e)
    })

    }




});

