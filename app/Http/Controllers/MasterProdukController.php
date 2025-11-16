<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterProdukController extends Controller
{
    public function index()
    {
        return view('masterproduk.index');
    }
}
