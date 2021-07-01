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
        $semuaartikel = uploadartikel::paginate();
        $dataterbaruright = uploadartikel::all();
        $dataterbaruleft = uploadartikel::all();
        $dataterbarunews = uploadartikel::all();
        
    
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