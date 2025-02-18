<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/test", function () {

    $testUsers = [ 
        ['username' => 'masum362','id' => 1],
        ['username' => 'shihab2','id' => 2],
    ];
 
    
    return view('test.index',['greetings'=>'hello world','testUsers'=>$testUsers]);
});

Route::get('test/{id}',function($id){
    return view('test.show',['id'=>$id]);
});