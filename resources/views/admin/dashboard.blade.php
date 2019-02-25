@extends('layouts.admin') 
@section('title', 'Admin Dashboard') 
@section('content')

<div class="columns">
    <div class="column is-three-quarters">
        Admin Panel
    </div>
    <div class="column">
        <h1 class="title is-4"><a href="/movies/create" class="button is-link">New movie</a></h1>
    </div>
</div>
@endsection