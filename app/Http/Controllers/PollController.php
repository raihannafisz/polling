<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function make(){
        return view('poll.make');
    }

    public function show(){
        return view('poll.show');
    }

    public function search()
    {
        $polls = Poll::all();

        return view('poll.search', [
            'polls' => $polls
        ]);
    }

    public function store(){
        return redirect('/home');
    }
}
