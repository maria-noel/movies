@extends('layouts.app') 
@section('title', 'movies | Create ') 
@section('section-title', 'EDIT ') 
@section('content')

<form action="/movies/{{ $movie->id }}" method="post">
    @csrf @method('PATCH')


    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input type="text" class="input" name="title" required value="{{ $movie->title }}">
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <label for="rating" class="label">Rating</label>
            <input type="text" name="rating" class="input" required value="{{ $movie->rating }}">
        </div>

        <div class="column">
            <label for="awards" class="label">Awards</label>
            <input type="text" name="awards" id="" class="input" required value="{{ $movie->awards }}">
        </div>

        <div class="column">
            <label for="release_date" class="label">Release date</label>
            <input type="date" name="release_date" id="" class="input" required value="{{ Carbon\Carbon::parse($movie->release_date)->format('m/d/Y') }}" placeholder="{{ Carbon\Carbon::parse($movie->release_date)->format('m/d/Y') }}">
        </div>

        <div class="column">
            <label for="length" class="label">Length</label>
            <input type="number" name="length" id="" class="input" value="{{ $movie->length }}">
        </div>

        <div class="column">
            <label for="genre" class="label">Genre</label>
            <div class="select is-primary">
                <select name="genre_id">
                        <option>Select dropdown</option>
                        @foreach ($genres as $genre)
                          <option value="{{ $genre->id }}" 
                                @if ($genre->id == old('genre_id', $movie->genre_id))
                                selected="selected"
                            @endif
                            > {{ $genre->name }} </option>
                        @endforeach
                    </select>
            </div>
        </div>
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

<form action="/movies/{{ $movie->id }}" method="post" style="margin-top:10px" class="is-pulled-right">

    @method('DELETE') @csrf

    <div class="field ">
        <div class="control "><input type="submit" value="Delete me!" class="button is-danger"></div>
    </div>
</form>
@endsection