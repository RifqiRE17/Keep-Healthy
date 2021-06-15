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
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'upload_foto' => 'required',
            
        ],
        [
            'required' => 'Data Harus Terisi',
        ]);

        $nm = $request->upload_foto;
       
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploaduser;
            $dtUpload->nama = $request->nama;
            $dtUpload->email = $request->email;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->password = $request->password;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/user', $namaFile);
            $dtUpload->save();

            return redirect('data-user')->withSuccess('Data Berhasil Ditambahkan!');
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
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'alamat' => 'required',
            // 'jeniskelamin' => 'required',
            // 'upload_foto' => 'required',
            
        ],
        [
            'required' => 'Data Harus Terisi',
        ]);

        $ubah = Uploaduser::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'nama' => $request['name'],
            'email' => $request['email'],
            'alamat' => $request['alamat'],
            'upload_foto' => $awal,
            
        ];

        // $request->upload_foto->move(public_path().'/user', $awal);
        
        $ubah->update($dt);
        return redirect('data-user')->with('success', 'Data Berhasil Diperbarui!');
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
        

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back()->with('success','Data berhasil dihapus');
    }
}