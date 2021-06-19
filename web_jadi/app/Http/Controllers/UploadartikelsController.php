<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Uploadartikels;
use App\Uploaduser;

class UploadartikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $dataArtikel = Uploadartikels::where('namaartikel', 'LIKE', '%'.$keyword.'%')
        ->paginate(3);
        $dataArtikel->appends($request->all());
        // $dataArtikel = Uploadartikel::latest()->get();
        return view('uploadartikels.Data-artikel', compact('dataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadartikels.Create-artikel');
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
            'namaartikel' => 'required',
            'isiartikel' => 'required',
            'upload_foto' => 'required',
        ],
        [
            'required' => 'Data Harus Terisi',
        ]
    );

        $nm = $request->upload_foto;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

            $dtUpload = new Uploadartikels;
            $dtUpload->namaartikel = $request->namaartikel;
            $dtUpload->isiartikel = $request->isiartikel;
            $dtUpload->upload_foto = $namaFile;
            

            $nm->move(public_path().'/artikel', $namaFile);
            $dtUpload->save();

            return redirect()->route('data-artikel')->withSuccess('Data Berhasil Ditambahkan!');
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
        $dt = Uploadartikels::findorfail($id);
        return view('Uploadartikel.Edit-artikel', compact('dt'));
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
            'namaartikel' => 'required',
            'isiartikel' => 'required',
            'upload_foto' => 'required',
        ],
        [
            'required' => 'Data Harus Terisi',
        ]
    );
        
        $ubah = Uploadartikels::findorfail($id);
        $awal = $ubah->upload_foto;
        

        $dt = [
            'namaartikel' => $request['namaartikel'],
            'isiartikel' => $request['isiartikel'],
            'upload_foto' => $awal,
            
        ];

        $request->upload_foto->move(public_path().'/artikel', $awal);
        $ubah->update($dt);
        return redirect('data-artikel')->withSuccess('Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Uploadartikels::findorfail($id);

        $file = public_path('/artikel/').$hapus->upload_foto;
       

        if (file_exists($file)){
            //maka hapus file di folder public/img
            @unlink($file);
        }

        //hapus data di database
        $hapus->delete();
        return back();
    }
}