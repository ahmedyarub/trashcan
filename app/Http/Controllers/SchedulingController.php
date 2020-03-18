<?php

namespace App\Http\Controllers;

use App\Trashcan;

class SchedulingController extends Controller
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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Scheduling.index', ['trashcans' => Trashcan::where('fill_level', 100)->get(['id', 'longitude', 'latitude'])]);
    }
}
