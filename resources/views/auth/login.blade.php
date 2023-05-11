@extends('layouts.app')

@section('content')
<ons-toolbar>
    <div class="left">
        <a href="{{route('welcome')}}">
            <ons-back-button style="color:#ec4d37">Back</ons-back-button>
        </a>
    </div>

    <div class=" center">{{__('Login')}}
    </div>
</ons-toolbar>
<ons-page>
    <div class="position-absolute start-50 top-50 translate-middle text-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p>
                <ons-input id="email" type="email" modifier="material" float class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus></ons-input>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>

            <p>
                <ons-input id="password" type="password" modifier="material" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password"></ons-input>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>

            <ons-row class="justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </ons-row>


            <ons-col class="mt-3">
                <ons-button type="submit">
                    {{ __('Login') }}
                </ons-button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </ons-col>
        </form>
    </div>
</ons-page>
@endsection