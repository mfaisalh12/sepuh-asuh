<?php
namespace App\Http\Controllers;
use App\program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $program = program::paginate(6);
        return view('program', compact('program'));
    }
}
?>