@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="title">Il tuo ristorante</h1>
        <div class="row margin-bottom card-body display-flex column-flex">

            <div class="col-12 col-sm-12 col-md-6 flex-items">
                <h5 class="card-title sub-title">{{$restaurant->name}}</h5>
                <div class="card-title"> <span>E-mail:</span>  {{$restaurant->email}}</div>
                <div class="card-title"> <span>Indirizzo:</span>  {{$restaurant->address}}</div>
                <div class="card-title"> <span>P.IVA:</span>  {{$restaurant->net_number}}</div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-6">
                {{-- Aggiungo l'immagine se è presente nel database --}}
                @if ($restaurant->cover)
                    <img src="{{ asset('storage/' . $restaurant->cover) }}" alt="{{ $restaurant->name }}">
                @endif
                {{-- <h4 class="card-title">{{$type->name}}</h4> --}}
            </div>
                
        </div>
    </div>
@endsection