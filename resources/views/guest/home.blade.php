@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
    {{-- ID ROOT --}}
    <div id="root">
        <div class="container">
            <h1>HOME PUBBLICA</h1>
        </div>

        {{--Restaurants list--}}
        <div class="container">
            <h2>LISTA RISTORANTI</h2>
            <div>
                <label for="search">Cerca Ristorante:</label>
                <input v-on:keyup="searchRestaurantFunction()" type="text" v-model="search" name="" id="search">
            </div>
            {{--All Restaurants--}}
           <div v-if=" search == '' " class="row">            
                <div v-for="restaurant in restaurants" class="card col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" :src="restaurant.cover" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">@{{restaurant.name}}</h5>
                        <h4 class="card-title">@{{restaurant.address}}</h4>
                    </div>
                </div>
           </div>
           <div v-else class="row">
                <div v-for="restaurant in searchRestaurant" class="card col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" :src="restaurant.cover" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">@{{restaurant.name}}</h5>
                        <h4 class="card-title">@{{restaurant.address}}</h4>
                    </div>
                </div>
           </div>
            {{--All Restaurants--}}

        </div>
        {{--End Restaurants list--}}
    </div>
    {{--END ID ROOT --}}
@endsection

@section('js-script')
    <script src="{{asset('js/restaurants.js')}}"></script>
@endsection