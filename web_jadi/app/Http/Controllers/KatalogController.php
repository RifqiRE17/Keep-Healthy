<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Katalog;


class KatalogController extends Controller
{
    public function index()
    {
        // $katalog = Katalog::with('harga_servis')->get();
        $data= Kategori::all();
        $katalog = Katalog::all();
        return view('layouts.katalog',compact('katalog','data'));
    }
}
