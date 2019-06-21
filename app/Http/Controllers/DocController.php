<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index()
    {
        return view('doc.home');
    }

public function __construct()
{
    $this->middleware('auth');
    $this->middleware('role:ROLE_DOC');
}
}