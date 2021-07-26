@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="margin-top-bottom">
            <h1 class="title-section">Crea un nuovo piatto</h1>

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

            <div class="form-group alignment">
                <label for="name">Nome piatto</label>
                <input type="text" class="form-control custom-input" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group alignment">
                <label for="description">Descrizione piatto</label>
                <textarea  class="form-control custom-input" id="description" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>

            <div class="form-group alignment">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control custom-input" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="form-group alignment">
                <label for="category_id">Categoria</label>
                <select class="form-control custom-input" name="category_id" id="category_id">
                    <option value="">Nessuna</option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- RADIO BUTTON FOR VISIBILITY --}}
            <div class="form-group">
                <div>
                    <input type="radio"  id="option1" name="visibility" value="0" @if(old('visibility') == '0') checked @endif>
                    <label for="option1">Non Disponibile</label>
                </div>
                
                <div>
                    <input type="radio" id="option2" name="visibility" value="1" @if(old('visibility') == '1') checked @endif>
                    <label for="option2">Disponibile</label>
                </div>
            </div>

            {{--Cover--}}
            <div class="input-group mb-3">
                <label class="sub-title" for="cover-image">Scegli immagine di copertina</label>
                <input type="file" id="cover-image" name="cover-image">
            </div>
            {{--End Cover--}}

            <input type="submit" class="btn-coloured wthmargin btn-success" value="Salva piatto">
        </form>
        <!-- end create form -->
        </div>

        
    </div>
@endsection