<?php

namespace JuanPy\Http\Controllers;

use Illuminate\Http\Request;
use JuanPy\Http\Controllers\Controller;

class mainController extends Controller
{
    function inicio(){
    	return view('layouts/principal');
    }
}