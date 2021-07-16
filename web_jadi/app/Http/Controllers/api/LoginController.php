<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required|min:4'
        ],
        [
            'required' => ':attribute tidak boleh kosong.',
            'username' => 'Harap masukkan :attribute dengan benar',
            'password.min' => ':attribute minimal 4 karakter.'
        ],
        [
            'username' => 'Alamat Username',
            'password' => 'Password'
        ]);
        
        $status = '';
        $message = '';
        $user = '';

        try {
            $user = User::where('username', $request->get('username'))->first();
            if($user == null) {
                $status = 'failed';
                $message = 'Gagal login. Akun tidak ditemukan';
                // $user = '';
            }
            else {
                if (!$user || !(\Hash::check($request->get('password'), $user->password))) {
                    $status = 'Unauthorized';
                    $message = 'Gagal login. password salah.';
                    $user = '';
                }
                else{
                    $status = 'success';
                    $message = 'Berhasil login.';
                }
            }


        } catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal login ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'success';
            $message = 'Gagal login.' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $user
            ], 200);
        }
    }
}
