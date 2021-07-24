@extends('layouts.app')


@section('header-scripts')
    <!-- ChartJS CDN -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


@section('content')
    <div class="container">
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

    <div id="root">
        <canvas id="myChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </div>

    <!-- ChartJs -->
    <script>
        let myChart = document.getElementById("myChart").getContext("2d");
    
        // Opzioni globali per valori di default
        /* Chart.defaults.global.defaultFontFamily = 'Inter', sans-serif; */
        /* Chart.defaults.global.defaultFontSize = size; */
        /* Chart.defaults.global.defaultFontColor = "#color"; */
    
        // Creiamo un nuovo oggeto, come secondo parametro prende tutte le proprietà
        let ordersChart = new Chart(myChart, {
            type: "bar", 
            // Altri stili disponibili: horizontalBar, pie, line, doughnut, radar, polarArea, bubble, scatter

            data: {
                labels: [ 
                    'Gennaio',
                    'Febbraio',
                    'Marzo',
                    'Aprile',
                    'Maggio',
                    'Giugno',
                    'Luglio',
                    'Agosto',
                    'Settembre',
                    'Ottobre',
                    'Novembre',
                    'Dicembre'
                ],

                datasets: [{
                    label: 'Totale vendite',
                    data: "@{{ chart }}",

                    /* univoco o diverso per ogni data inserito */
                    backgroundColor: [
                        /* 
                        *	#colore1,
                        *	#colore2,
                        *	#colore3,
                        *	#colore4,
                        *	#colore5,
                        */
                    ],
                    
                    // Altri stili personalizzati
                    borderWidth: 4,
                    /* borderColor: "#color", */

                    // Hover
                    hoverBorderWidth: 3,
                    /* hoverBorderColor: "#color", */
                }]
            },
        
            options:{
                // Possiamo dare un titolo al grafico
                title: {
                    display: true,
                    text: "Ordini dal 01/01 al 31/12",
                    fontSize: 30,
                },

                // Opzioni per la legenda
                legend: {
                    // La visibilità ha valore di default TRUE
                    // oppure -> display: false

                    // Posizione
                    position: "right",
                    /* labels: {
                        fontColor:  #color
                    } */
                },

                // Mostriamo le statistiche all'hover sulla singola colonna
                tooltips: {
                    enabled: true
                }
            }
        });
    </script>
    <!-- End ChartJs -->
@endsection


@section('js-script')
    <script src="{{asset('js/chart.js')}}"></script>
@endsection