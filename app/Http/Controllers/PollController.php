<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Option;

class PollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $polls = Poll::all();
        return view('polls.index', compact('polls'));
    }

    public function create()
    {
        return view('polls.create');
    }

    public function store(Request $request)
    {
        
        $poll = new Poll();
        $poll->text = $request->text;
        $poll->user_id = \Auth::id();
        $poll->save();
        
        
        foreach ($request->option as $text) {        
            $option = new Option();
            $option->user_id = \Auth::id();
            $option->poll_id = $poll->id;
            $option->text = $text;
            $option->save();
        }
        

        return redirect(action('PollController@index'));
    }

    public function edit($id)
    {
        $poll = Poll::find($id);
        return view('polls.edit', compact('poll'));
    }

    public function update(Request $request)
    {
        $poll = Poll::find($request->id);
        $poll->text = $request->text;

        $i = 0;
        foreach ($poll->options as $option) {
            $option->text = $request->option[$i];
            $option->save();
            $i++;
        }
        $poll->save();

        return redirect(action('PollController@index'));
    }
}
