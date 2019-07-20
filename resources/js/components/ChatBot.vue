<template>
    <div class="chatbot mt-5 w-50">
        <div class="chat-window">
            <div class="conversation-pane p-2">{{ chat }}</div>

            <div class="message-input w-100">
                <form @submit.prevent="sendMessage">
                    <input class="w-100 border-0 p-2" v-model="userMessage" type="text">
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import Pusher from  'pusher-js';

    export default {

        data() {
            return {
                chat: 'chat history in here...',
                userMessage: 'Type your message and press enter to send...'
            }
        },

        mounted() {
            console.log('Component mounted.');

            this.startPusher();
        },

        methods: {
            startPusher() {
                const pusher = new Pusher('c849acb9d4be3d350217', {
                    cluster: 'eu',
                    forceTLS: true
                });

                const channel = pusher.subscribe('message-received');

                channel.bind('App\\Events\\MessageReceived', (data) => {
                    console.log('geting message', JSON.stringify(data));
                });
            },

            sendMessage(message) {
                console.log('sending the message...', this.userMessage);

                axios.post('http://rudi-bot.test/chat').then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                })
            }
        }
    }
</script>
