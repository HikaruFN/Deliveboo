@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center margin-top-bottom">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header title-section">{{ __('Login') }}</div>

                <div class="card-body padding">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row alignment">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo E-Mail') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror yellow-inp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row alignment">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror yellow-inp" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- CHECKBOX: remind me--}}
                        <div class="form-group row ">
                            <div class="col-md-6  col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input check-inp" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label black-txt" for="remember">
                                        {{ __('Ricorda la mia password') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- END CHECKBOX --}}

                        {{-- BUTTON LOGIN --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn-coloured yellow">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link custom-margin-left" href="{{ route('password.request') }}">
                                        {{ __('Hai dimenticato la password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        {{-- END BUTTON LOGIN --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
