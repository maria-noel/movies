@extends('layouts.app') 
@section('content')
<div class="container has-text-centered">
    <div class="column is-4 is-offset-4">
        <h3 class="title has-text-grey">{{ __('Register') }}</h3>
        <p class="subtitle has-text-grey">Register to our website</p>

        <div class="box">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <div class="control">
                        <input id="name" type="text" class="input is-large {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                            placeholder="{{ __('Name') }}" required autofocus> 
                            @if ($errors->has('name'))
                                <span class="help is-danger" role="alert">
                                   <strong>{{ $errors->first('name') }}</strong>
                                </span> 
                            @endif
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input id="email" type="email" class="input is-large {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            placeholder="{{ __('Email') }}" required> 
                            @if ($errors->has('email'))
                            <span class="help is-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> 
                        @endif
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input id="password" type="password" class="input is-large {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" 
                            placeholder="{{ __('Password') }}"    required> 
                            @if ($errors->has('password'))
                                <span class="help is-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                 </span> 
                            @endif
                    </div>
                </div>

                <div class="field ">
                    <div class="control">
                        <input id="password-confirm" type="password" class="input is-large" name="password_confirmation" required  placeholder="{{ __('Repeat password') }}"  >
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">

                        <button type="submit" class="button is-block is-info is-large is-fullwitdh">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection