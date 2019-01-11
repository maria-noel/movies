@extends('layouts.app') 
@section('title', 'Actors | Create ') 
@section('section-title', 'EDIT ') 
@section('content')

<form action="/actors/{{ $actor->id }}" method="post">
    @csrf @method('PATCH')

    <div class="columns">
        <div class="column">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" class="input is-primary" name="first_name" required value="{{ $actor->first_name }}">
            </div>
        </div>

        <div class="column">
            <label class="label">Last name</label>
            <div class="control">
                <input type="text" class="input  is-primary" name="last_name" required value="{{ $actor->last_name }}">
            </div>
        </div>
    </div>

    <div class="columns">

        <div class="column is-1">
            <label class="label">Rating</label>
            <div class="control">
                <input type="text" class="input" name="rating" required value="{{ $actor->rating }}">
            </div>
        </div>
        <div class="column is-2">
            <label class="label" for="favorite_movie_id">Favorite movie</label>
            <div class="select is-info">
                <select name="favorite_movie_id">
                    <option>Select dropdown</option>
                    @foreach ($allMovies as $movie)
                       <option value="{{ $movie->id }}" 
                         {{ $movie->id == old('favorite_movie_id', $actor->favorite_movie_id) ? 'selected' : '' }}
                        > {{ $movie->title }} </option>
                    @endforeach
                </select>
            </div>
        </div>


        @if ($actor->movies->count()) {{-- {{ dd($actor->movies) }} --}}
        <div class="column is-5">
            <label class="label" for="favorite_movie_id">Movies </label> @foreach ($allMovies as $movie)
            <div class="column">
                @method('PATCH')
                <input class="" type="checkbox" name="movies[]" value="{{ $movie->id }}" {{ $actor->movies->contains($movie->id)
                ? 'checked' : '' }} > {{ $movie->title }}
            </div>
            @endforeach
        </div>
        @endif

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

<form action="/actors/{{ $actor->id }}" method="post" style="margin-top:10px" class="is-pulled-right">

    @method('DELETE') @csrf

    <div class="field ">
        <div class="control "><input type="submit" value="Delete me!" class="button is-danger"></div>
    </div>
</form>
@endsection