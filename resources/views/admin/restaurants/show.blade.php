@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Il tuo ristorante</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$restaurant->name}}</h5>
              <h4 class="card-title">{{$restaurant->address}}</h4>
              <h4 class="card-title">{{$type[$restaurant->type_id-1]->name}}</h4>
              <a href="{{ route('admin.restaurants.edit', [ 'restaurant' => $restaurant -> id ])}}" class="btn btn-primary">Modifica i tuoi dati</a>
            </div>
          </div>
    </div>
@endsection