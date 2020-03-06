<?php

use Illuminate\Support\Facades\Route;
use IPFSoftwares\Greetings\Greetr;
use IPFSoftwares\ResponseFormatter\Formatter;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', function($sName) {
    $oGreetr = new Greetr();
    return $oGreetr->greet($sName);
});

Route::get('/format/{name}', function($sName) {
    $oGreetr = new Formatter(2, 200, 'mkawa', 'papaa', 'dd');
    return $oGreetr->format($sName);
});

Route::resource('test-response', 'TestResponseControllter');
