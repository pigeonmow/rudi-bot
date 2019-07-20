<?php

namespace App\Http\Controllers;

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
}
