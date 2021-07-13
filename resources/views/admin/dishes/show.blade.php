@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <a href="{{ route('admin.dishes.edit', ['dish' => $dish->id]) }}" class="btn btn-success">Modifica piatto</a> --}}
        
        

        <h1>{{ $dish->name }}</h1>

        {{-- @if($dish->cover)
        <div class="mt-2 mb-2">
        <img src="{{ asset('storage/' . $dish->cover) }}" alt="{{ $dish->title }}"></div>
        @endif --}}

        <p>Descrizione: {{ $dish->description }}</p>

        @if($dish->category)

            <div class="mt-2 mb-2">Categoria: {{ $dish_category->name }}</div>
        @endif

        <p>Prezzo: {{ $dish->price }}</p>

        <p>Disponibilità: {{ $dish->visibility ? 'Disponibile' : 'Non disponibile' }}</p>
    </div>
@endsection