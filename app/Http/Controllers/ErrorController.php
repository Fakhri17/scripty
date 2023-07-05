<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error()
    {
        return view('error', [
            'title' => 'Error 404 Not Found'
        ]);
    }
}
