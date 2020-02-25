<?php

namespace App\Http\Controllers;

use App\Trashcan;
use Illuminate\Http\Request;

class TrashController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('trash.index', ['trashcans' => Trashcan::all()]);
    }

    public function add()
    {
        (new Trashcan())->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        Trashcan::destroy($id);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $trashcan = Trashcan::find($id);

        $trashcan->longitude = $request->input('longitude');
        $trashcan->latitude = $request->input('latitude');
        $trashcan->fill_level = (int)$request->input('fill_level');

        $trashcan->save();

        return response('Record updated', 200);
    }

}
