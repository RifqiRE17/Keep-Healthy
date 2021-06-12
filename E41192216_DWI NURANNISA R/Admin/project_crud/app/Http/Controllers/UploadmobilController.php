<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadmobil;
class UploadmobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMobil = Uploadmobil::latest()->get();
        return view('Uploadmobil.Data-mobil', compact('dataMobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadmobil.Create-mobil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->upload_foto;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadmobil;
            $dtUpload->nama = $request->nama;
            $dtUpload->hargalayanan = $request->hargalayanan;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/mobil', $namaFile);
            $dtUpload->save();

            return redirect('data-mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Uploadmobil::findorfail($id);
        return view('Uploadmobil.Edit-mobil', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Uploadmobil::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'nama' => $request['nama'],
            'hargalayanan' => $request['hargalayanan'],
            'alamat' => $request['alamat'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/mobil', $awal);
        $ubah->update($dt);
        return redirect('data-mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadmobil::findorfail($id);

        $file = public_path('/mobil/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
