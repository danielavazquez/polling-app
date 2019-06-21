<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;

class VoteController extends Controller
{
    public function index()
    {
        $polls = Poll::all();
        return view('polls.list.index', compact('polls'));
    }
}
