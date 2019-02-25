@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
            <h3 class="title has-text-grey">{{ __('Login') }}</h3>
            <p class="subtitle has-text-grey">Please login to proceed.</p>

            <div class="box">
                <figure class="avatar">
                    <img src="https://placehold.it/128x128">
                </figure>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="field">
                        <div class="control">
                            <input id="email" type="email" class="input is-large {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{ __('E-Mail Address') }}" autofocus="" value="{{ old('email') }} ">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> 
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input is-large {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="{{ __('Password') }}"> 
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> 
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="checkbox">
                  <input type="checkbox"  name="remember" id="remember"  {{ old( 'remember') ? 'checked' : '' }}>
                  {{ __('Remember Me') }}
                </label>
                    </div>
                    <button type="submit" class="button is-block is-info is-large is-fullwidth">{{ __('Login') }}</button>
                            
                   
                </form>
            </div>
            <p class="has-text-grey">
                <a href="../register">Sign Up</a> &nbsp;·&nbsp;
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }} &nbsp;·&nbsp;
                    </a> @endif
                    <a href="../">Need Help?</a>
                </p>
        </div>



        </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection