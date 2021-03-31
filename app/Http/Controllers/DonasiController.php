<?php

namespace App\Http\Controllers;
use App\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function donasi(){
        return view('donasi');
    }
    public function submit(Request $request){
        $request->validate([
            'jumlah_donasi' => 'required',
            'bukti_donasi' => 'required'
        ]);
        DB::table('donasis')->insert([
            'jumlah_donasi'=> $request->jumlah_donasi,
            'bukti_donasi'=> $request->bukti_pembayaran
        ]);
        
        return redirect('/');
        
    }
}
