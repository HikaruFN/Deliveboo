@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Gestisci il tuo ristorante</h1>
        <div class="row">      
            <a href="{{ route('admin.restaurants.show', [ 'restaurant' => $restaurant -> id ])}}" class="btn btn-primary">Vedi Dettagli</a>
        </div>
    </div>
    
@endsection