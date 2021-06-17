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
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $dataGambar = Uploadgambar::where('nama', 'LIKE', '%'.$keyword.'%')
        ->orwhere('alamat', 'LIKE', '%'.$keyword.'%')
        ->paginate(4);
        $dataGambar->appends($request->all());
        // $dataGambar = Uploadgambar::latest()->paginate(2);
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
        ],
        [
            'required' => 'Data Harus Terisi',
        ]
    );

        $nm = $request->ktp;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadgambar;
            $dtUpload->nama = $request->nama;
            $dtUpload->nomor = $request->nomor;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->ktp = $namaFile;

            $nm->move(public_path().'/ktp', $namaFile);
            $dtUpload->save();

            return redirect('data-gambar')->withSuccess('Data Berhasil Ditambahkan!');
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
            'nomor' => 'required',
            'alamat' => 'required',
            'ktp' => 'required',
        ],
        [
            'required' => 'Data Harus Terisi',
        ]
    );
        
        $ubah = Uploadgambar::findorfail($id);
        $awal = $ubah->ktp;

        $dt = [
            'nama' => $request['nama'],
            'nomor' => $request['nomor'],
            'alamat' => $request['alamat'],
            'ktp' => $awal,
        ];

        $request->ktp->move(public_path().'/ktp', $awal);
        $ubah->update($dt);
        return back();
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

        $file = public_path('/ktp/').$hapus->upload_ktp;

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back()->with('success','Data berhasil dihapus');

    }
}