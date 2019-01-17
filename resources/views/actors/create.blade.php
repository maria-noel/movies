@extends('layouts.app') 
@section('title', 'Actors | Create ') 
@section('section-title', 'Create new actor/actress ') 
@section('content')

<form action="/actors" method="POST">
    @csrf

    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input type="text" class="input" name="first_name" required value="{{ old('first_name') }}">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <label class="label">Rating</label>
            <input type="text" class="input" name="rating" required value="{{ old('rating') }}">
        </div>
    </div>
    
    <div class="field">
        <div class="control">
            <label class="label" for="favorite_movie_id">Favorite movie</label>
            <div class="select is-primary">
                <select name="favorite_movie_id">
                    <option>Select dropdown</option>
                    @foreach ($movies as $movie)
                      <option value="{{ $movie->id }}" > {{ $movie->title }} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Rating</label>
        <input type="text" class="input" name="rating" required value="{{ old('rating') }}">
    </div>

    <div class="field">
        <label for="genre" class="label">Favorite movie </label>  
            <div class="select is-primary">
                <select name="favorite_movie_id">
                    <option>Select Movie</option>
                    @foreach ($movies as $movie)
                      <option value="{{ $movie->id }}" > {{ $movie->title }} </option>
                    @endforeach
                </select>
            </div>
    </div>


    <div class="field is-grouped">
        <div class="control">
            <input type="submit" value="Save" class="button is-link">
        </div>
    </div>

    @include('errors')

</form>
@endsection