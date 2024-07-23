<?php

use App\Http\Controllers\Applicationcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/{name}', function ($name) {
    return view('welcome')->with('name',$name);
});

// Route::get('/admin/dashboard',function(){
//     return view('dashboard');
// });


Route::get('{view}', Applicationcontroller::class)->where('view',('.*'));