@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestisci i tuoi piatti</h1>

        <div class="row">
            @foreach($dishes as $dish)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dish->name }}</h5>
                            <a href="{{ route('admin.dishes.show', ['dish' => $dish->id]) }}" class="btn btn-primary">Vai al piatto</a>

                            {{-- <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}" class="btn btn-success">Modifica piatto</a>
                        
                            <form action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}" method="post">
                            @csrf
                            @method ('DELETE')
                            <input type="submit" class="btn btn-danger" value="Cancella dish">
                            </form> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection