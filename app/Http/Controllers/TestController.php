<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function noaccess()
    {
        return "You do not have the access to this application";
    }
}
