@extends('layouts.app') 
@section('title', 'Actors | Create ') 
@section('section-title', 'EDIT ') 
@section('content')

<form action="/actors/{{ $actor->id }}" method="post">
    @csrf 
    @method('PATCH')


    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input type="text" class="input" name="first_name" required value="{{ $actor->first_name }}">
        </div>
    </div>



    <div class="field">
        <label class="label">Last name</label>
        <input type="text" class="input" name="last_name" required value="{{ $actor->last_name }}">
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
    
    @method('DELETE')
    @csrf 

    <div class="field ">
        <div class="control "><input type="submit" value="Delete me!" class="button is-danger"></div>
    </div>
</form>



@endsection