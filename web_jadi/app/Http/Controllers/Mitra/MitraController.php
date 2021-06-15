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
                "nomor" => ["required","min:11", "numeric" ],
                "alamat" => ["required"],
                "ktp" => ['required','image']
            ]);

            $nm = $request->ktp;
            $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();
    
                $dtUpload = new Mitra;
                $dtUpload->nama = $request->nama;
                $dtUpload->nomor = $request->nomor;
                $dtUpload->alamat = $request->alamat;
                $dtUpload->ktp = $namaFile;
    
                $nm->move(public_path().'/ktp', $namaFile);
                $dtUpload->save();
    
                return redirect('mitra/register')->with('success','Data Mitra baru telah berhasil disimpan');

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