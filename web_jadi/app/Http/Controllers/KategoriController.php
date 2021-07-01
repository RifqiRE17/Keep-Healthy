<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ public function index(Request $request)
    {
        $keyword = $request->keyword;
        $kategori = Kategori::where('layanan_servis', 'LIKE', '%'.$keyword.'%')
        ->paginate(4);
        $kategori->appends($request->all());
        return view('kategori.data-kategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.buat-kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'layanan_servis' => 'required|unique:Kategori',
            'harga_servis' => 'required',
            

        ],
        [
            'required' => 'Data Harus Terisi',
            'unique'=>'Data Sudah Ada!',
            
        ]
    );

      

            $kategori = new Kategori;
            $kategori->layanan_servis = $request->layanan_servis;
            $kategori->harga_servis = $request->harga_servis;
           

         
            $kategori->save();

            return redirect('data-kategori')->withSuccess('Data Berhasil Ditambahkan!');
      }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findorfail($id);
        return view('kategori.edit-kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'layanan_servis' => 'required|unique:Kategori',
            'harga_servis' => 'required',
           
        ],
        [
            'required' => 'Data Harus Terisi',
            'unique'=>'Data Sudah Ada!',
            
        ]
    );
        
        $ubah = Kategori::findorfail($id);
       

        $kategori = [
            'layanan_servis' => $request['layanan_servis'],
            'harga_servis' => $request['harga_servis'],
           
        ];

     
        $ubah->update($kategori);
        return redirect('data-kategori')->with('success', 'Data Berhasil Diperbarui!');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Kategori::findorfail($id);

        

        //hapus data di database
        $hapus->delete();
        return back();
    }
}