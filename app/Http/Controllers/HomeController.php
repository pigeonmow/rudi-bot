<?php

namespace App\Http\Controllers;

use App\Events\MessageReceived;
use App\Message;
use App\Store\Eloquent\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * View the home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Persist a user message to the database & return a response to the frontend
     *
     * @param Request $request
     * @param Message $message
     */
    public function chat(Request $request, Message $message)
    {
        $message->create(['message' => $request->get('message')]);

        event(new MessageReceived('Hello ' . $request->get('message') . ', I\'m very pleased to meet you'));

        return;
    }

}
