<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/git', function () {
    return response()->json(['message' => 'Welcome Here !'], 200);
});
