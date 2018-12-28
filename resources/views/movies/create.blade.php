@extends('layouts.app') 

@section('title', 'Movies ') 

@section('content')

<form action="/movie" method="POST">
    @csrf
    <input type="text" name="title" required>
    <input type="text" name="rating" required>

    <input type="button" value="Save">

</form>
@endsection