<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Applicationcontroller extends Controller
{
    //
    public function __invoke()
    {
        return view('admin.layouts.app');
    }
}
