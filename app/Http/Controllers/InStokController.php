<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InStokController extends Controller
{
    public function index()
    {
        return view('instok.index');
    }
}
