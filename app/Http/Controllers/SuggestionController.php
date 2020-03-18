<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
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
        return view('suggestions.index', ['suggestions' => Suggestion::leftJoin('users', 'user_id', 'users.id')->get(['name', 'suggestion', 'suggestions.created_at'])]);
    }

    /**
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit()
    {
        return view('suggestions.edit');
    }

    public function add(Request $request)
    {
        $suggestion = new Suggestion();

        $suggestion->user_id = \Auth::id();
        $suggestion->suggestion = $request->input('suggestion');

        $suggestion->save();

        return redirect()->back();
    }

}
