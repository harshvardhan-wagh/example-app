<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    return "Hello World!";
  });

Route::post('/reverse-me', function (Request $request) {
  $reversed = strrev($request->input('reverse_this'));
  return $reversed;
});
