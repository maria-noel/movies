@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
            <h3 class="title has-text-grey">{{ __('Reset Password') }}</h3>

            <div class="box">
                <figure class="avatar">
                    <img src="https://placehold.it/128x128">
                </figure>

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="field">
                        <div class="control">
                            <input id="email" type="email" class="input is-large {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{ __('E-Mail Address') }}"
                                autofocus="" value="{{ old('email') }} "> @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-block is-info ">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection