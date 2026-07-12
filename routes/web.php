<?php

use Illuminate\Support\Facades\Route;

Route::view('/',"welcome", [
    "greeting" =>"Hello World",
    'person' =>request('person'),
]);
