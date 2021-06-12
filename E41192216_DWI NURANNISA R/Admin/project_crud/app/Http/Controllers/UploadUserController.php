<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploaduser;
class UploadUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUser = Uploaduser::latest()->get();
        return view('Uploaduser.Data-user', compact('dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploaduser.Create-user');
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
        $nm = $request->upload_ktp;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploaduser;
            $dtUpload->nama = $request->nama;
            $dtUpload->jeniskelamin = $request->jeniskelamin;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->upload_foto = $namaFile;
            $dtUpload->upload_ktp = $namaFile;

            $nm->move(public_path().'/user', $namaFile);
            $dtUpload->save();

            return redirect('data-user');
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
        $dt = Uploaduser::findorfail($id);
        return view('Uploaduser.Edit-user', compact('dt'));
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
        $ubah = Uploaduser::findorfail($id);
        $awal = $ubah->upload_foto;
        $awal = $ubah->upload_ktp;

        $dt = [
            'nama' => $request['nama'],
            'jeniskelamin' => $request['jeniskelamin'],
            'alamat' => $request['alamat'],
            'upload_foto' => $awal,
            'upload_ktp' => $awal,
        ];

        $request->upload_foto->move(public_path().'/user', $awal);
        $request->upload_ktp->move(public_path().'/user', $awal);
        $ubah->update($dt);
        return redirect('data-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploaduser::findorfail($id);

        $file = public_path('/user/').$hapus->upload_foto;
        $file = public_path('/user/').$hapus->upload_ktp;

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}
