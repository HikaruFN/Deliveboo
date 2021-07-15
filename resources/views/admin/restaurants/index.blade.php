@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Il tuo ristorante</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Nome: {{$restaurant->name}}</h5>
            <div class="card-title">e-mail: {{$restaurant->email}}</div>
            <div class="card-title">Indirizzo: {{$restaurant->address}}</div>
            <div class="card-title">P.IVA: {{$restaurant->net_number}}</div>
            {{-- <h4 class="card-title">{{$type->name}}</h4> --}}
            
            </div>
        </div>
    </div>
@endsection