<?php

namespace App\Http\Controllers;

use App\Models\uploadartikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
     }
   

    public function artikel()
    {
        $semuaartikel = uploadartikel::all();
        $dataterbaruright = uploadartikel::paginate(4); 
        $dataterbaruleft = uploadartikel::latest()->get()->random(1);
        $dataterbarunews = uploadartikel::latest()->get()->random(5);

        return view('Artikel.artikel',compact('dataterbaruright','dataterbaruleft','dataterbarunews','semuaartikel'));
    }

    public function single($namaartikel)
    {
        $artikel = uploadartikel::where('namaartikel',$namaartikel)->first();
        return view('Artikel.single', [
            'artikel' => $artikel
        ]);
    }
}