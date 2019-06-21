@extends('layouts/app')

@section('content')

<h1>Polls</h1>
<ul>
    @foreach ($polls as $poll)
        <li><a href="{{ action('PollController@edit', [$poll->id]) }}">{{ $poll->text }}</a></li>
    @endforeach
</ul>

@endsection