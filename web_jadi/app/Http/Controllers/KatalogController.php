<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Katalog;


class KatalogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     }
    public function index(Request $request)
    {
        // $katalog = Katalog::with('harga_servis')->get();
        $data= Kategori::paginate(2);
        $keyword = $request->keyword;
        $katalog = Katalog::where('layanan_servis', 'LIKE', '%'.$keyword.'%')
        ->orwhere('nama', 'LIKE', '%'.$keyword.'%')
        ->paginate(6);
        $katalog->appends($request->all());
        return view('layouts.katalog',compact('katalog','data'));
    }
}