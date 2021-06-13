<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mitra;
use Illuminate\Database\QueryException;


class MitraController extends Controller
{
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
            $mitra=$request->validate([
                "nama" => ["required", "max:50"],
                "email" => ["required","email"],
                "alamat" => ["required"],
                "ktp" => ['required','image']
            ]);

            $fileName = time().'_'.$request->ktp->getClientOriginalName();
            $path = $request->file('ktp')->storeAs('ktp', $fileName, 'public');

            $mitra['ktp']=$path;
            Mitra::create($mitra);
            return redirect('/dashboard/mitra');

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
