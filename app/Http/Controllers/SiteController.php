<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Image;
use Illuminate\Support\Str;
use App\Team;
use App\Round;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $games = Game::where('status', 1)->orderBy('order', 'asc')->get();
        return view('site.index', compact('games'));
    }

}
