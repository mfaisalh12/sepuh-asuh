<?php

namespace App\Http\Controllers;
use App\beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $beranda = beranda::paginate(3);
        return view('index', compact('beranda'));
    }
}
