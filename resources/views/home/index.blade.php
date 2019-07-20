@extends('layouts.site')

@section('content')


    <main role="main" aria-labelledby="rudiBotTitle">
        <div class="container">

            <div class="row">
                <h1 id="rudiBotTitle">Rudimentary Chatbot</h1>
            </div>

            <div class="row">
                <div id="app">
                    <chat-bot></chat-bot>
                </div>
            </div>

        </div>
    </main>


@endsection
