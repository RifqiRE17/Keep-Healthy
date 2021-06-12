<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadbaju;
class UploadbajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataBaju = Uploadbaju::latest()->get();
        return view('Uploadbaju.Data-baju', compact('dataBaju'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadbaju.Create-baju');
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

            $dtUpload = new Uploadbaju;
            $dtUpload->nama = $request->nama;
            $dtUpload->hargalayanan = $request->hargalayanan;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/baju', $namaFile);
            $dtUpload->save();

            return redirect('data-baju');
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
        $dt = Uploadbaju::findorfail($id);
        return view('Uploadbaju.Edit-baju', compact('dt'));
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
        $ubah = Uploadbaju::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'nama' => $request['nama'],
            'hargalayanan' => $request['hargalayanan'],
            'alamat' => $request['alamat'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/baju', $awal);
        $ubah->update($dt);
        return redirect('data-baju');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadbaju::findorfail($id);

        $file = public_path('/baju/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
