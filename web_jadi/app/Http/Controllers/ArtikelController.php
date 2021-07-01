<?php

namespace App\Http\Controllers;

use App\Models\uploadartikel;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
     }
   

    public function artikel()
    {
        $semuaartikel = uploadartikel::paginate(2);
        $dataterbaruright = uploadartikel::latest()->get()->random(4);
        $dataterbaruleft = uploadartikel::latest()->get()->random(1);
        $dataterbarunews = uploadartikel::latest()->get()->random(5);
        
    
        return view('Artikel.artikel',compact('dataterbaruright','dataterbaruleft','dataterbarunews','semuaartikel'));
    }

    public function readmore(uploadartikel $post)
    {
        return view('readmore', compact('post'));
    }

    public function single($namaartikel)
    {
        $artikel = uploadartikel::where('namaartikel',$namaartikel)->first();

        return view('Artikel.single', [
            'artikel' => $artikel
        ]);
    }
}