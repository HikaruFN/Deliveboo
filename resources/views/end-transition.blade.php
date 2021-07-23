@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
    <div id="root">
        <div class="container">
            <h1>Acquisto avvenuto con successo</h1>
            <p>Grazie per aver acquistatro da Deliveboo, ricerverei una Email di notifica quando il dirver partirà dal locale!. </p>
            <h2>Riepilogo ordine:</h2>
            <ul v-for ="element in prodottiSuccess">
                <li> Piatto: @{{element.name}}</li>
                <li> Quantità: @{{element.quantity}}</li>
            </ul>
            <h3>Totale Ordine: @{{total.toFixed(2)}}&euro;</h3>
        </div>
    </div>
@endsection

@section('js-script')
    <script src="{{asset('js/success.js')}}"></script>
@endsection