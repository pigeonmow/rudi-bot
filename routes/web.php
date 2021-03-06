<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);

$router->post('/chat', ['uses' => 'HomeController@chat', 'as' => 'chat.index']);
