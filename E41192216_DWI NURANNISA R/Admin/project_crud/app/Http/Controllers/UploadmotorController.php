<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadmotor;
class UploadmotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMotor = Uploadmotor::latest()->get();
        return view('Uploadmotor.Data-motor',compact('dataMotor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadmotor.Create-motor');
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

            $dtUpload = new Uploadmotor;
            $dtUpload->hargalayanan = $request->hargalayanan;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/motor', $namaFile);
            $dtUpload->save();

            return redirect('data-motor');
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
        $dt = Uploadmotor::findorfail($id);
        return view('Uploadmotor.Edit-motor', compact('dt'));
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

        $ubah = Uploadmotor::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'hargalayanan' => $request['hargalayanan'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/motor', $awal);
        $ubah->update($dt);
        return redirect('data-motor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadmotor::findorfail($id);

        $file = public_path('/motor/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
