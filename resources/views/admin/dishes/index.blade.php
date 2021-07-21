@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title">Gestisci i tuoi piatti</h1>

        <div class="row no-flex">
            @foreach($dishes as $dish)
                <div class="col-lg-8" style="margin:auto;">
                    <div class="card margin-bottom" style="width: 100%;">
                        <div class="card-body display-flex dish-section">

                            
                             @if ($dish->cover)
                                <img src="{{ asset('storage/' . $dish->cover) }}" alt="{{ $dish->name }}">
                            @endif

                            <div class="flex-items">

                                <h5 class="card-title sub-title">{{ $dish->name }}</h5>
                                <a href="{{ route('admin.dishes.show', ['dish' => $dish->id]) }}" class="btn-coloured blue">Vai al piatto</a>

                                <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}" class="btn-coloured yellow">Modifica piatto</a>
                            
                                <form action="{{ route('admin.dishes.destroy', ['dish' => $dish->id]) }}" method="post">
                                    @csrf
                                    @method ('DELETE')
                                    <input type="submit" class="btn-coloured red" value="Cancella piatto">
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection