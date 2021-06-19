<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
       
   
    	 $user = users::where('id', Auth::user()->id)->first();

    	 return view('profile', compact('user'));
    }
    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = users::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	
    	return redirect('profile')->with('success', 'Data Berhasil Diperbarui!');
    }
    
}