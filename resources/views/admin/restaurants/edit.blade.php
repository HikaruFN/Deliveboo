@extends('layouts.app')

@section('content')
    <div class="container">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.restaurants.update', ['restaurant' => $restaurant->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $restaurant->name) }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $restaurant->email) }}">
            </div>

            <div class="form-group">
                <label for="address">Indirizzo</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $restaurant->address) }}">
            </div>

            <div class="form-group">
                <label for="">Tipo</label>
                <select class="form-control" name="type_id" id="type_id">

                    <option value="">Nessuna</option>

                    @foreach ( $types as $type)
                        <option value="{{ $type->id }}" {{ (old('user_id', $restaurant->user_id == $type->id) ? 'selected' : '') }}>{{ $type['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-success" value="Salva le modifiche">
        </form>
    </div>
@endsection