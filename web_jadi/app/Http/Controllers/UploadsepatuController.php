<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadsepatu;
class UploadsepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSepatu = Uploadsepatu::latest()->get();
        return view('Uploadsepatu.Data-sepatu',compact('dataSepatu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadsepatu.Create-sepatu');
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
        ]);

        $nm = $request->upload_foto;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadsepatu;
            $dtUpload->hargalayanan = $request->hargalayanan;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/sepatu', $namaFile);
            $dtUpload->save();

            return redirect('data-sepatu');
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
        $dt = Uploadsepatu::findorfail($id);
        return view('Uploadsepatu.Edit-sepatu', compact('dt'));
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
        ]);
        
        $ubah = Uploadsepatu::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'hargalayanan' => $request['hargalayanan'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/sepatu', $awal);
        $ubah->update($dt);
        return redirect('data-sepatu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadsepatu::findorfail($id);

        $file = public_path('/sepatu/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
