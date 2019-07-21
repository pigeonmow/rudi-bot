<template>
    <div class="chatbot card mt-5 w-50">
        <div class="chat-window">
            <div class="conversation-pane p-4">
                <ul class="list-reset">
                    <li :class="[index % 2 !== 0 ? 'user' : '', 'message-bubble']" v-for="(message, index) in messages"><span class="content">{{ message }}</span></li>
                </ul>
            </div>

            <div class="message-input w-100">
                <form @submit.prevent="sendMessage">
                    <input class="w-100 border-0 p-2" v-model="userMessage" type="text" placeholder="Type your message and press enter to send...">
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import Pusher from  'pusher-js';

    export default {

        props: ['pusherKey'],

        data() {
            return {
                chat: 'chat history in here...',
                messages: ['Hi there, I\'m Rudi, what is your name?'],
                userMessage: ''
            }
        },

        mounted() {
            console.log('Component mounted.');

            this.startPusher();
        },

        methods: {
            startPusher() {
                const pusher = new Pusher(this.pusherKey, {
                    cluster: 'eu',
                    forceTLS: true
                });

                const channel = pusher.subscribe('message-received');

                channel.bind('App\\Events\\MessageReceived', (data) => {
                    this.messages.push(data.message);

                    console.log('geting message', JSON.stringify(data.message));
                });
            },

            sendMessage() {
                console.log('sending the message...');

                this.messages.push(this.userMessage);

                axios.post('/chat', { message: this.userMessage }).then((response) => {
                    console.log(response);
                    this.userMessage = '';
                }).catch((error) => {
                    console.log(error);
                })
            }
        }
    }
</script>
