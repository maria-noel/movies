@extends('layouts.app') 
@section('title', 'Movies ') 
@section('content')

<form action="/movies" method="POST">
    @csrf

    <div class="field">
        <label for="title" class="label">Title</label>
        <input type="text" name="title" class="input" required value="{{ old('title') }}">
    </div>
    <div class="columns">
        <div class="column">
            <label for="rating" class="label">Rating</label>
            <input type="text" name="rating" class="input" required value="{{ old('rating') }}">
        </div>

        <div class="column">
            <label for="awards" class="label">Awards</label>
            <input type="text" name="awards" id="" class="input" required value="{{ old('awards') }}">
        </div>

        <div class="column">
            <label for="release_date" class="label">Release date</label>
            <input type="date" name="release_date" id="" class="input" required value="{{ old('release_date') }}">
        </div>

        <div class="column">
            <label for="length" class="label">Length</label>
            <input type="number" name="length" id="" class="input" required value="{{ old('length') }}">
        </div>

        <div class="column">
            <label for="genre" class="label">Genre</label>
            <div class="select is-primary">
                <select name="genre_id">
                    <option>Select dropdown</option>
                    @foreach ($genres as $genre)
                    @if (Input::old('genre_id') == $genre->id)
                        <option value="{{ $genre->id  }}" selected>{{ $genre->name }}</option>
                    @else
                        <option value="{{ $genre->id }}" > {{ $genre->name }} </option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="column "></div>
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