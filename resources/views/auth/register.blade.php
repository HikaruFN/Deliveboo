@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center margin-top-bottom">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header title-section">{{ __('Registra il tuo ristorante') }}</div>

                <div class="card-body padding">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        {{-- NAME --}}
                        <div class="form-group row alignment">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror yellow-inp" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Pizzeria da Mario">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- END NAME --}}

                        {{-- EMAIL --}}
                        <div class="form-group row alignment">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror yellow-inp" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="pizzeriadamario@mail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- END EMAIL --}}

                        {{-- ADDRESS --}}
                        <div class="form-group row alignment">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror yellow-inp" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Via dei Pini 14, Milano">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- END ADDRESS --}}

                        {{-- P.IVA --}}
                        <div class="form-group row alignment">
                            <label for="net_number" class="col-md-4 col-form-label text-md-right">{{ __('Partita Iva') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="net_number" type="text" class="form-control @error('net_number') is-invalid @enderror yellow-inp" name="net_number" value="{{ old('net_number') }}" required autocomplete="net_number" placeholder="12345678910">

                                @error('net_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- End P.IVA --}}


                        {{-- PASSWORD --}}
                        <div class="form-group row alignment">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror yellow-inp" name="password" required autocomplete="new-password" placeholder="cjgLDoP3459C">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- END PASSWORD --}}


                        {{-- CONFERMA PASSWORD --}}
                        <div class="form-group row alignment">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}</label>

                            <div class="col-md-6 col-lg-12">
                                <input id="password-confirm" type="password" class="form-control yellow-inp" name="password_confirmation" required autocomplete="new-password" placeholder="cjgLDoP3459C">
                            </div>
                        </div>
                        {{-- END CONFERMA PASSWORD --}}

                        {{-- Checkboxes Types --}}
                        
                        <div class="form-group text-align:center">
                            <div class="sub-title">Scegli il tipo di cucina</div>
                            @foreach( $types as $type )
                                <div class="form-check black-text">
                                    <input class="form-check-input" type="checkbox" name="types[]" value="{{$type->id}}" id="type-{{$type->id}}" {{ in_array($type->id, old('types', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label " for="type-{{$type->id}}">
                                        {{ $type->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('types')
                            <div class="error_field_required">{{ $message }}</div>
                        @enderror
                        {{-- End Checkboxes Types --}}

                        {{--Cover--}}
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="cover-image" name="cover-image">
                                <label class="custom-file-label" for="cover-image">Scegli immagine di copertina</label>
                            </div>
                        </div>
                        {{--End Cover--}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-coloured blue">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
