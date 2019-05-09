<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashBoardController extends Controller
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('news', $user->news);
    }
    public function studentform()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboards.studentform')->with('news', $user->news);
    }

    public function studentretrieve()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboards.studentretrieve')->with('news', $user->news);
    }
}
