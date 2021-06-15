<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadgambar;
class UploadgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGambar = Uploadgambar::latest()->get();
        return view('Uploadgambar.Data-gambar',compact('dataGambar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadgambar.Create-gambar');
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
            'nama' => 'required|min:3',
            'nomor' => 'required',
            'alamat' => 'required',
            'ktp' => 'required',
        ]);

        $nm = $request->ktp;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadgambar;
            $dtUpload->nama = $request->nama;
            $dtUpload->nomor = $request->nomor;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->ktp = $namaFile;

            $nm->move(public_path().'/ktp', $namaFile);
            $dtUpload->save();

            return redirect('data-gambar');
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
        $dt = Uploadgambar::findorfail($id);
        return view('Uploadgambar.Edit-gambar', compact('dt'));
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
        $request->validate([
            'nama' => 'required|min:3',
            'jabatan' => 'required',
            'alamat' => 'required',
            'upload_foto' => 'required',
            'upload_ktp' => 'required',
        ]);
        
        $ubah = Uploadgambar::findorfail($id);
        $awal = $ubah->upload_foto;
        $awal = $ubah->upload_ktp;

        $dt = [
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'alamat' => $request['alamat'],
            'upload_foto' => $awal,
            'upload_ktp' => $awal,
        ];

        $request->upload_foto->move(public_path().'/img', $awal);
        $request->upload_ktp->move(public_path().'/img', $awal);
        $ubah->update($dt);
        return redirect('data-gambar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadgambar::findorfail($id);

        $file = public_path('/img/').$hapus->upload_foto;
        $file = public_path('/img/').$hapus->upload_ktp;

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();

    }
}
