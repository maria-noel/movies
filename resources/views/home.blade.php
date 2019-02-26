@extends('layouts.app') 
@section('content')
<section class="section">
    <div class="container  has-text-centered">
        <div class="box">

            <h3 class="title">Dashboard</h3>
            <h2 class="subtitle"> Welcome {{ Auth::user()->name }}</h2>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif 
                <p>You are logged in!</p>
            </div>
        </div>
    </div>
</section>
@endsection