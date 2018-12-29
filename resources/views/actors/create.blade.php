@extends('layouts.app') 
@section('title', 'Actors | Create ') 
@section('section-title', 'Create new actor/actress ') 
@section('content')

<form action="/actor" method="POST">
    @csrf

    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input type="text" class="input" name="first_name" required value="{{ old('first_name') }}">
        </div>
    </div>



    <div class="field">
        <label class="label">Last name</label>
            <input type="text" class="input" name="last_name" required value="{{ old('last_name') }}">
    </div>


    <div class="field is-grouped">
        <div class="control">
            <input type="submit" value="Save" class="button is-link">
        </div>
        <div class="control">
            <button class="button is-text">Cancel</button>
        </div>
    </div>


    @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif

</form>
@endsection