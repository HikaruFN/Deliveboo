@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="margin-top-bottom">
            <h1 class="title-section">Modifica piatto</h1>

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
            <form action="{{ route('admin.dishes.update', ['dish' => $dish->id] ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method ('PUT')
    
                <div class="form-group alignment">
                    <label for="name">Nome piatto</label>
                    <input type="text" class="form-control custom-input" id="name" name="name" value="{{ old('name', $dish->name) }}">
                </div>
    
                <div class="form-group alignment">
                    <label for="description">Descrizione piatto</label>
                    <textarea  class="form-control custom-input" id="description" name="description" cols="30" rows="10">{{ old('description', $dish->description) }}</textarea>
                </div>
    
                <div class="form-group alignment">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control custom-input" id="price" name="price" value="{{ old('price', $dish->price) }}">
                </div>
    
                <div class="form-group alignment">
                    <label for="category_id">Categoria</label>
                    <select class="form-control custom-input" name="category_id" id="category_id">
                        <option value="">Nessuna</option>
    
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $dish->category_id) == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
    
    
                {{-- RADIO BUTTON FOR VISIBILITY --}}
                <div class="form-group alignment">
                    <input type="radio"  id="option1" name="visibility" value="0" @if(old('visibility') == '0' || $dish->visibility == '0') checked @endif> Non Disponibile</label>
    
                    <input type="radio" id="option2" name="visibility" value="1" @if(old('visibility') == '1' || $dish->visibility == '1') checked @endif> Disponibile</label>
    
                </div>
                {{-- END RADIO BUTTON FOR VISIBILITY --}}
    
                {{--Cover--}}
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="cover-image" name="cover-image">
                        <label class="custom-file-label" for="cover-image">Scegli immagine di copertina</label>
                    </div>
                </div>
    
                {{-- Immagine esistente --}}
                @if ($dish->cover)
                    <img class="col-12" src="{{ asset('storage/' . $dish->cover) }}" alt="{{ $dish->name }}">
                @endif
                {{--End Cover--}}
    
                <input type="submit" class="btn-coloured wthmargin btn-success" value="Salva le modifiche">
            </form>
            <!-- end create form -->
        </div>


    </div>
@endsection