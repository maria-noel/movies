@extends('layouts.app') 

@section('title', 'Actors | Create ') 

@section('content')

<form action="/actor" method="POST">
    @csrf
    <input type="text" name="first_name" required>
    <input type="text" name="last_name" required>

    <input type="button" value="Save">

</form>
@endsection