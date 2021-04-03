<?php

namespace App\Http\Controllers;
//use App\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    /*public function show($slug)
    {
        die($slug);
        //return view('login');
    }*/

    public function cek()
    {
        return view('login');
    }
}