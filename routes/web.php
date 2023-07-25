<?php

use Illuminate\Support\Facades\Route;
use App\Models\customer; // Make sure to use the correct namespace for your Customer model
use App\Http\Controllers\Democontroller;
use App\Http\Controllers\TaskController;

use Illuminate\Http\Request;
use Illuminate\Http\Response;



Route::get('/customer', function () {
    $customers = customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});


Route::get('/demo', [DemoController::class, 'index']);
Route::get('/demo/index', [DemoController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/heloo',function (){
    return '  Hello World' ;
});

Route::get('/create', function(){
    return view ('create');
});



Route::post('/register',[TaskController::class , 'validation' ]);

Route::get('/create', function(){
    return view('create');
});

Route::get('/register', function(){
    redirect('create');
});
