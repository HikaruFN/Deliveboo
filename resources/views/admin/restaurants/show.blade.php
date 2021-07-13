@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <h1>Gestisci i tuoi ristoranti</h1>
            @foreach($restaurants as $item)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{ $item->name }}</h2>
                            <h5 class="card-title">{{ $item->address }}</h5>

                            <a href="{{ route('admin.restaurants.edit', ['restaurant' => $item->id]) }}" class="btn btn-warning">Edit restaurant</a>
                            
                            {{-- <form action="{{ route('admin.restaurants.destroy', ['restaurant' => $item->id]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete restaurant">
                            </form> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection