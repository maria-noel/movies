@extends('layouts.app') 
@section('title', 'Movies ') 
@section('content')

<form action="/movies" method="POST">
    @csrf

    <div class="field">
        <label for="title" class="label">Title</label>
        <input type="text" name="title" class="input" required required value="{{ old('title') }}">
    </div>
    <div class="field">
        <label for="Rating" class="label">Rating</label>
        <input type="text" name="rating" class="input" required>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <input type="submit" value="Save" class="button is-link">
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


