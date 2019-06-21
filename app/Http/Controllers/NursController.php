<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NursController extends Controller
{
    public function index()
    {
        return view('nurse.home');
    }
}
