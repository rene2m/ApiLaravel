<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    function home()
    {
        return [ 'image' => '', 'description' => 'description' ];
        //return view('content/home', [] );
    }
}
