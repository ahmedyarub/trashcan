<?php

namespace App\Http\Controllers;

use App\Trashcan;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the report
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('report.index', ['trashcans' => Trashcan::all()]);
    }

}
