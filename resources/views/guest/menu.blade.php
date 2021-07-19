@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
    {{-- ID ROOT --}}
    <div id="root">
        <div class="container">
            <h5>Piatti Ristorante</h5>

            <div class="row">
                @foreach($dishes as $dish)
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">  
                                @if ($dish->cover)
                                    <img src="{{ asset('storage/' . $dish->cover) }}" alt="{{ $dish->name }}">
                                @endif
                                <h5 class="card-title">{{ $dish->name }}</h5>    
                                <button v-on:click="printecho()" class="btn btn-success">Aggiungi al carrello</button>       
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">  
                            <h5 class="card-title">prova</h5>           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- END ID ROOT --}}
@endsection

@section('js-script')
    <script src="{{asset('js/dish.js')}}"></script>
@endsection