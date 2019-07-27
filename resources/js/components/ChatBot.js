import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ChatBot extends Component {
    render() {
        return (
            <div className="chatbot card mt-5 w-50">
                <div className="chat-window">
                    <div className="conversation-pane p-4">
                        <ul className="list-reset">
                            <li>Testing... 123</li>
                        </ul>
                    </div>

                    <div className="message-input w-100">
                        <form action="">
                            <input type="text" placeholder="Type your message and press enter to send..." className="w-100 border-0 p-2"/>
                        </form>
                    </div>
                </div>
            </div>
            );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<ChatBot />, document.getElementById('app'));
}
