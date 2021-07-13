@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Crea un nuovo piatto</h1>

        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
        <!-- create form -->
        <form action="{{ route('admin.dishes.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method ('POST')

            <div class="form-group">
                <label for="name">Nome piatto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="description">Descrizione piatto</label>
                <textarea  class="form-control" id="description" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Nessuna</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- TO DO : VALIDATION RADIO BUTTON PER VISIBILITY --}}
            <div class="form-group">
                <input type="radio"  id="option1" name="visibility" value="0"> Non Disponibile</label>

                <input type="radio" id="option2" name="visibility" value="1"> Disponibile</label>

            </div>

            <input type="submit" class="btn btn-success" value="Salva piatto">
        </form>
        <!-- end create form -->
    </div>
@endsection