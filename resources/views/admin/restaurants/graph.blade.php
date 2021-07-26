@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
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