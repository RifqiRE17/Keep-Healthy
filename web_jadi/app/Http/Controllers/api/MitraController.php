<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function getMitra()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $data = Mitra::all();
            $status = 'success';
            $message = 'Berhasil mengambil data';

        } catch(\Exception $e){
            $status = 'failed';
            // $message = 'Gagal mengambil data ' . $e->getMessage();
            $message = 'Gagal mengambil data';
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            // $message = 'Terjadi kesalahan pada database '.$e->getMessage();
            $message = 'Terjadi kesalahan pada database';
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
}
