<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Katalog;
use App\Uploadtoilet;

class KatalogController extends Controller
{
    public function index()
    {
        $data= Kategori::all();
        $dataToilet = Uploadtoilet::latest()->get();
        $katalog = Katalog::all();
        return view('layouts.katalog',compact('katalog','dataToilet','data'));
    }
}
