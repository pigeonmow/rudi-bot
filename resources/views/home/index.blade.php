@extends('layouts.site')

@section('content')


    <main class="pt-5" role="main" aria-labelledby="rudiBotTitle">
        <div class="container">

            <div class="row">
                <h1 id="rudiBotTitle">Rudimentary Chatbot</h1>
            </div>

            <div id="app" class="row">
                <chat-bot pusher-key="{{ config('app.pusher_key') }}"></chat-bot>
            </div>

        </div>
    </main>


@endsection
