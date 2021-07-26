@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
    <div id="root">
        <div class="container">
            <h1 class="title green-txt">Acquisto avvenuto con successo</h1>
            
            
            
            <div class="row" style="justify-content:center;">
                <div style="text-align:center; padding:20px 0; margin-bottom:50px;" class=" col-4 "> 
                
                    <h4 class="black-txt bold">Riepilogo ordine</h4>
                        <ul style="padding: 20px 0px 20px 0px;" v-for ="element in prodottiSuccess">
                            <li>Piatto: <span class="black-txt bold">@{{element.name}}</span> </li>
                            <li>Quantità: <span class="black-txt bold">@{{element.quantity}}</span> </li>
                        </ul>
                    <h4 class="red-txt bold" style="padding-bottom:30px;">Totale Ordine: @{{total.toFixed(2)}}&euro;</h4>
    
                    <img style="width: 130px; height:auto; margin:auto;" src="{{ asset('img/delivebo.png') }}" alt="deliveboo">

                    
    
                </div>
            </div>
            
            <p style="text-align:center;">Grazie per aver acquistato da Deliveboo, riceverai una email di notifica quando il driver partirà dal locale! </p>
            
        </div>
    </div>
@endsection

@section('js-script')
    <script src="{{asset('js/success.js')}}"></script>
@endsection