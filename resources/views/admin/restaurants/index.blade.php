@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="title">Il tuo ristorante</h1>
        <div class="card margin-bottom" style="width: 65rem;">
            <div class="card-body display-flex">
                <div class="flex-items">
                    <h5 class="card-title sub-title">{{$restaurant->name}}</h5>
                    <div class="card-title"> <span>E-mail:</span>  {{$restaurant->email}}</div>
                    <div class="card-title"> <span>Indirizzo:</span>  {{$restaurant->address}}</div>
                    <div class="card-title"> <span>P.IVA:</span>  {{$restaurant->net_number}}</div>
                </div>
            

                {{-- Aggiungo l'immagine se è presente nel database --}}
                @if ($restaurant->cover)
                    <img src="{{ asset('storage/' . $restaurant->cover) }}" alt="{{ $restaurant->name }}">
                @endif
                {{-- <h4 class="card-title">{{$type->name}}</h4> --}}
            
            </div>
        </div>
    </div>
@endsection