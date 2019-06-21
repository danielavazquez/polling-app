@extends('layouts/app')

@section('content')

<form action="{{ action('PollController@store') }}" method="post">
    @csrf
    <label class="mb-2">
        Poll name:
    </label>
    <input type="text" name="text" class="form-control">
    <label class="mb-2">
        Option:
    </label>
    <div id="opt">
        <input type="text" name="option[0]" class="form-control mb-2">
    </div>
    <input type="button" onClick="createOption()" value="+" id="but" class="btn btn-secondary mt-2"><br>
    <button type="submit" class="btn btn-primary mt-2">Create</button>
</form>

@endsection

<script>
    const createOption = () => {
        let i = document.getElementById("opt").childElementCount;
        let opt = document.getElementById("opt");
        let optionIn = document.createElement('input');
        optionIn.className = 'form-control mb-2';
        optionIn.name = 'option['+ (i) +']';
        opt.appendChild(optionIn);
    }
</script>