<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
     }
   

    public function artikel()
    {
        return view('Artikel.artikel');
    }

    public function single()
    {
        return view('Artikel.single');
    }
}