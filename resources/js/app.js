require('./bootstrap');

window.Vue = require('vue');

const chatBot = new Vue({
    el: '#app',
    components: {
        'chat-bot': require('./components/ChatBot.vue').default,
    }
});
