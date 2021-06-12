<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadkantor;
class UploadkantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKantor = Uploadkantor::latest()->get();
        return view('Uploadkantor.Data-kantor',compact('dataKantor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadkantor.Create-kantor');
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

            $dtUpload = new Uploadkantor;
            $dtUpload->nama = $request->nama;
            $dtUpload->hargalayanan = $request->hargalayanan;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/kantor', $namaFile);
            $dtUpload->save();

            return redirect('data-kantor');
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
        $dt = Uploadkantor::findorfail($id);
        return view('Uploadkantor.Edit-kantor', compact('dt'));
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
        $ubah = Uploadkantor::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'nama' => $request['nama'],
            'hargalayanan' => $request['hargalayanan'],
            'alamat' => $request['alamat'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/kantor', $awal);
        $ubah->update($dt);
        return redirect('data-kantor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadkantor::findorfail($id);

        $file = public_path('/kantor/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
