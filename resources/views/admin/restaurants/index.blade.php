@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <div class="container" >
        <h1 class="title">Il tuo ristorante</h1>
        <div class="row col-12 col-sm-12 margin-bottom" style="width: 65rem;">
            <div class="col-12 col-sm-12 card-body display-flex">
                <div class="col-12 col-sm-12  col-md-5 flex-items">
                    <h5 class="card-title sub-title">{{$restaurant->name}}</h5>
                    <div class="card-title"> <span>E-mail:</span>  {{$restaurant->email}}</div>
                    <div class="card-title"> <span>Indirizzo:</span>  {{$restaurant->address}}</div>
                    <div class="card-title"> <span>P.IVA:</span>  {{$restaurant->net_number}}</div>
                </div>
            
                <div class="row col-sm-12">
                    {{-- Aggiungo l'immagine se è presente nel database --}}
                    @if ($restaurant->cover)
                        <img src="{{ asset('storage/' . $restaurant->cover) }}" alt="{{ $restaurant->name }}">
                    @endif
                    {{-- <h4 class="card-title">{{$type->name}}</h4> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <canvas id="canvas">

            </canvas>
        </div>
    </div>
@endsection


@section('js-script')
    <script src="{{asset('js/custom.js')}}"></script>
@endsection