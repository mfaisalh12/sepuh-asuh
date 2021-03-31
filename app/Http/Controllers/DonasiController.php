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
    public function index()
    {
        $program = donasi::paginate(6);
        return view('program', compact('program'));
    }
}
?>