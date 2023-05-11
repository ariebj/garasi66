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
                <!-- <ons-input id="email" type="email" modifier="underbar" float class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus></ons-input>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror -->
                <label for="phone">Nomor Telepon</label>
                <ons-input id="phone" type="tel" modifier="underbar" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus></ons-input>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>

            <p>
                <label for="password">Password</label>
                <ons-input id="password" type="password" modifier="underbar" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></ons-input>
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
                <button type="submit" class="btn btn-orange" ripple>
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link text-decoration-none text-orange" href="{{ route('password.request') }}">
                    {{ __('Lupa sandi?') }}
                </a>
                @endif
            </ons-col>
        </form>
    </div>
</ons-page>

@endsection