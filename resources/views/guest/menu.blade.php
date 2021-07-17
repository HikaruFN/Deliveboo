@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestisci i tuoi piatti</h1>

        <div class="row">
            @foreach($dishes as $dish)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5>piatti Ristorante</h5>
                            {{-- @if ($dish->cover)
                                <img src="{{ asset('storage/' . $dish->cover) }}" alt="{{ $dish->name }}">
                            @endif

                            <h5 class="card-title">{{ $dish->name }}</h5>
                             --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection