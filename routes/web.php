<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

route::get('test',function (){
    return User::all();
});

require __DIR__.'/auth.php';
