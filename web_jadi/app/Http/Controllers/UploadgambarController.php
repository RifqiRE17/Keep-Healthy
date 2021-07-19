<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadgambar;
use App\Models\Kategori;
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
        ->orwhere('layanan_servis', 'LIKE', '%'.$keyword.'%')
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
            'nomor' => 'required|min:12|unique:Mitra',
            'alamat' => 'required',
            'layanan_servis' => 'required',
            'ktp' => 'required',
            'foto' => 'required',

        ],
        [
            'required' => 'Data Harus Terisi',
            'unique'=>'Data Sudah Ada!',
            'nama.min'=>'Nama Harus Lebih Dari 3 Kata',
            'nomor.min'=>'Data Nomor Telepon Harus 12 Angka',
        ]
    );

        $nm = $request->ktp;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();
        $nn = $request->foto;
        $namaFiles = time().rand(100,900).".".$nn->getClientOriginalName();

            $dtUpload = new Uploadgambar;
            $dtUpload->nama = $request->nama;
            $dtUpload->nomor = $request->nomor;
            $dtUpload->alamat = $request->alamat;
            $dtUpload->layanan_servis = $request->layanan_servis;
            $dtUpload->ktp = $namaFile;
            $dtUpload->foto = $namaFiles;

            $nm->move(public_path().'/ktp', $namaFile);
            $nn->move(public_path().'/user', $namaFiles);
            $dtUpload->save();

            return redirect('data-gambar')->withSuccess('Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        {
            $data= Kategori::all();
            return view('Uploadgambar.Create-gambar',compact('data'));
            // return DB::table('kategori')->get();
            // return view('mitra.register',['layanan'=>$data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Kategori::all();
        $dt = Uploadgambar::findorfail($id);
        return view('Uploadgambar.Edit-gambar', compact('dt','data'));
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
            'nomor' => 'required|min:12', 'unique:Mitra',
            'alamat' => 'required',
            'layanan_servis' => 'required',
            'ktp' => 'required',
            'foto' => 'required',
        ],
        [
            'required' => 'Data Harus Terisi',
            'unique'=>'Data Sudah Ada!',
            'nama.min'=>'Nama Harus Lebih Dari 3 Kata',
            'nomor.min'=>'Data Nomor Telepon Harus 12 Angka',
        ]
    );
        
        $ubah = Uploadgambar::findorfail($id);
        $awal = $ubah->ktp;
        $awals = $ubah->foto;

        $dt = [
            'nama' => $request['nama'],
            'nomor' => $request['nomor'],
            'alamat' => $request['alamat'],
            'layanan_servis' => $request['layanan_servis'],
            'ktp' => $awal,
            'foto' => $awals,
        ];

        $request->ktp->move(public_path().'/ktp', $awal);
        $request->foto->move(public_path().'/user', $awals);
        $ubah->update($dt);
        return redirect('data-gambar')->with('success', 'Data Berhasil Diperbarui!');
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
        $file = public_path('/user/').$hapus->foto;

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();

    }
}