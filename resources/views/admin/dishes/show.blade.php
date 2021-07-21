@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}" class="btn btn-success">Modifica piatto</a> --}}
        <h1 class="title"> <span>{{ $dish->name }}</span> </h1>

        <div class="card margin-bottom" style="width: 65rem;">
            <div class="card-body display-flex">
                

                @if ($dish->cover)
                    <img src="{{ asset('storage/' . $dish->cover) }}" alt="{{ $dish->name }}">
                @endif

                <div class="flex-items">

                    <p> <span>Descrizione:</span>  {{ $dish->description }}</p>

                    @if($dish->category)

                        <p> <span>Categoria:</span>  {{ $dish_category->name }}</p>
                    @endif

                    <p> <span>Prezzo:</span>  {{ $dish->price }}</p>

                    <p> <span>Disponibilità:</span>  {{ $dish->visibility ? 'Disponibile' : 'Non disponibile' }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection