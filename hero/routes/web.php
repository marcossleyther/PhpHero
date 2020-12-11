<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home/{name}', function($name){
    return view('home', ['name' =>$name]);
    //return"Barbaro ".$name."¡ estas ruteando";
})->where('name','[A-Za-z]+'); //Para que permita solo caracteres del alfabeto