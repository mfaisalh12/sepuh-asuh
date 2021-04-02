<?php
namespace App\Http\Controllers;
use App\program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProgramController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $program = DB::table('programs')->paginate(6);
        return view('program', ['program'=>$program]);
    }
}
?>