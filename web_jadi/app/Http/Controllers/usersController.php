<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class usersController extends Controller
{
    //
public function __construct()
{
    $this->users = new users();
}

public function index()
{
    $item = [
        'users'=> $this->users->allData(),
    ];
    return view('users', $item);
}


}