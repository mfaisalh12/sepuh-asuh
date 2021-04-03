<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class NewAccountController extends Controller
{
    public function index()
    {
        $Users = User::all();
        return view('newaccount');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'nama' => 'required|max:50|min:1',
            'email' => 'required|max:150|min:1',
            'password' => 'required|min:4',
            'telpon' => 'required|digits_between:2,15',
        ]);


        $users = new User;
        $users -> nama = $request->nama;
        $users -> email = $request->email;
        $users -> password = $request->password;
        $users -> telpon = $request->telpon;
        $users -> save();
        return redirect('/login');
    }
}
