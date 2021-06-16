<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadumum;
class UploadumumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUmum = Uploadumum::latest()->get();
        return view('Uploadumum.Data-umum', compact('dataUmum'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadumum.Create-umum');
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
            'hargalayanan' => 'required',
            'upload_foto' => 'required',
        ],
        [
            'required' => 'Data Harus Terisi',
        ]);

        $nm = $request->upload_foto;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadumum;
            $dtUpload->hargalayanan = $request->hargalayanan;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/umum', $namaFile);
            $dtUpload->save();

            return redirect('data-umum')->withSuccess('Data Berhasil Ditambahkan!');
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
        $dt = Uploadumum::findorfail($id);
        return view('Uploadumum.Edit-umum', compact('dt'));
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
            'hargalayanan' => 'required',
            'upload_foto' => 'required',
        ],
        [
            'required' => 'Data Harus Terisi',
        ]);
        
        $ubah = Uploadumum::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'hargalayanan' => $request['hargalayanan'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/umum', $awal);
        $ubah->update($dt);
        return redirect('data-umum')->withSuccess('Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadumum::findorfail($id);

        $file = public_path('/umum/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    
    }
}