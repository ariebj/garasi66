@extends('layouts.app')

@section('content')
<ons-toolbar>
    <div class="left">
        <a href="{{route('welcome')}}">
            <ons-back-button style="color:#ec4d37">Back</ons-back-button>
        </a>
    </div>

    <div class=" center">{{__('Register')}}
    </div>
</ons-toolbar>
<ons-page>
    <div class="position-absolute start-50 top-50 translate-middle text-center">
        <form method="POST" action="{{ route('register') }}">
            @csrf


            <p>
                <ons-input id="name" type="text" modifier="material" placeholder="Nama Lengkap" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></ons-input>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>


            <p>
                <ons-input id="email" type="email" modifier="material" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></ons-input>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>


            <p>
                <ons-input id="password" type="password" modifier="material" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password"></ons-input>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>



            <p>
                <ons-input id="password-confirm" type="password" modifier="material" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password"></ons-input>
            </p>


            <ons-button type="submit">
                {{ __('Register') }}
            </ons-button>
        </form>
    </div>
</ons-page>
@endsection