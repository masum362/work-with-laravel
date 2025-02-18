<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/test", function () {

    $testUsers = [ 
        ['username' => 'masum362'],
        ['username' => 'shihab2'],
    ];
 
    
    return view('test.index',['greetings'=>'hello world','testUsers'=>$testUsers]);
});

Route::get('test/{id}/{name}',function($id,$name){
    return view('test.index',['id'=>$id,'name'=>$name]);
});