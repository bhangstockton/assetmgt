<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PODetailsController extends Controller
{
    function __construct()
    {
    	$this->middleware('auth');
    }
}
