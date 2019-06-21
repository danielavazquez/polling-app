@extends('layouts/app')

@section('content')

<form action="{{ action('PollController@update') }}" method="post">
    @csrf
    <label class="mb-2">
        Poll name:
    </label>
    <input type="text" name="text" class="form-control" value="{{ $poll->text }}">
    <label class="mb-2">
        Option:
    </label>
    <div id="opt">
        <?php $i = 0; ?>
        @foreach ($poll->options as $option)
            <input type="text" name="option[<?= $i ?>]" class="form-control mb-2" value="{{ $option->text }}">
        <?php $i++; ?>
        @endforeach
    </div>
    <input type="hidden" name="id" value="{{ $poll->id }}">
    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>

@endsection