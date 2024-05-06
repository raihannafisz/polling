<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index(){
        $user = Auth::user();
        $populars = Poll::all();

        return view('home', [
            'user' => $user,
            'polls' => $user->polls,
            'populars' => $populars
        ]);
    }
    public function welcome(){
        $polls = Poll::all();

        return view('welcome', [
            'polls' => $polls
        ]);
    }


}
