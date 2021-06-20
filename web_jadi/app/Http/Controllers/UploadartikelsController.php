<?php

namespace App\Http\Controllers;



use App\Uploadartikels;
use App\Uploaduser;
use Illuminate\Http\Request;

class UploadartikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $dataArtikel = Uploadartikels::where('namaartikel', 'LIKE', '%'.$keyword.'%')
        // ->paginate(3);
        $dataArtikel = Uploadartikels::where('namaartikel', 'LIKE', '%'.$keyword.'%')
        ->paginate(2);
        $dataArtikel->appends($request->all());
        // $dataArtikel = Uploadartikel::latest()->get();
        return view('uploadartikel.Data-artikel', compact('dataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadartikel.Create-artikel');
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
            'tanggal_upload' => 'required',
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
            $dtUpload->tanggal_upload = $request->tanggal_upload;
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
            'tanggal_upload' => 'required',
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
            'tanggal_upload' => $request['tanggal_upload'],
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