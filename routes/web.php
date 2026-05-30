<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}/{name}',function($id,$name){
    return "home page id: ".$id." name: ".$name;
});