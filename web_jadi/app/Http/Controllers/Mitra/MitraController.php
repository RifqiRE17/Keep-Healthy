<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mitra;
use Illuminate\Database\QueryException;


class MitraController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {

        try {
            $mitra=Mitra::All();
            return view('dashboard.mitra',["mitra"=>$mitra]);
        } catch (QueryException $err) {
            return redirect('/dashboard/mitra');
        }

    }
    public function registerMitra(Request $request)
    {
        try {
            $request->validate([
                "nama" => ["required", "max:50"],
                "nomor" => ["required","min:12", "numeric", "unique:Mitra" ],
                "alamat" => ["required"],
                "foto" => ['required','image'],
                "ktp" => ['required','image']
            ],
            [
                'required' => 'Data Harus Terisi',
                'nomor.min' => 'Data Nomor Minimal 12 Angka ',
                'nomor.unique' => 'Data Nomor Sudah Ada! ',
            ]
        );

            $nm = $request->ktp;
            $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();
            $nn = $request->foto;
            $namaFiles = time().rand(100,900).".".$nn->getClientOriginalName();
    
                $dtUpload = new Mitra;
                $dtUpload->nama = $request->nama;
                $dtUpload->nomor = $request->nomor;
                $dtUpload->alamat = $request->alamat;
                $dtUpload->ktp = $namaFile;
                $dtUpload->foto = $namaFiles;
    
                $nm->move(public_path().'/ktp', $namaFile);
                $dtUpload->save();
                $nn->move(public_path().'/user', $namaFiles);
                $dtUpload->save();
    
                return redirect('home')->with('success','Data Mitra baru telah berhasil disimpan');

        } catch (QueryException $err) {
            return redirect('/dashboard/mitra');
        }
    }

    public function deleteMitra($id)
    {
        try {
            $mitra=Mitra::findOrFail($id);
            $mitra->delete();
            if($mitra->ktp){
                unlink(storage_path('app/public/'.$mitra->ktp));
                return redirect('/dashboard/mitra');
            }

        } catch (QueryException $err) {
            return redirect('/dashboard/mitra');
        }

    }

    public function formAddMitra()
    {
        return view ('mitra.register');
    }

}