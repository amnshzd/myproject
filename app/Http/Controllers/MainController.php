<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{

    public function index()
    {
        $username="";
        return view('show', compact('username'));
    }

}