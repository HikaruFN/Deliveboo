@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
    {{-- ID ROOT --}}
    <div id="root">
        
       {{--Jumbotron--}}
        <div class="jumbo">
            <img src="{{ asset('img/burger.jpg') }}" alt="burger">
            <div class="jumbo-text">
                <p>I piatti che ami, <br>
                    a domicilio.
                </p>
            </div>

            {{--Ricerca Per Nome--}}
            <div class="ricerca-ristorante">
                <label for="search">Sai già cosa cercare?</label>
                <input v-on:keyup="searchRestaurantFunction()" type="text" v-model="search" name="" id="search" placeholder="Inserisci il nome del tuo ristorante preferito...">
            </div>
            {{--Fine Ricerca Per Nome--}}
        </div>
        

        {{--Type List--}}
        <div class="container">
            <ul>
                <button type="button" class="btn btn-primary" v-for="type in types" v-on:click="searchRestaurantForType(type.id)" v-model="typeId">@{{type.name}}</button>
            </ul>
            {{--Print Filtered Restaurants--}}
            <div v-if=" search == '' " class="row">            
                <div v-for="restaurant in searchRestaurantType" class="card col-lg-4" style="width: 18rem;">
                    <a :href="`menu/${restaurant.id}`">
                        <img class="card-img-top cover-card" :src="`storage/${restaurant.cover}`" :alt="restaurant.name">
                        <div class="card-body">
                            <h5 class="card-title">@{{restaurant.name}}</h5>
                            <p class="card-text address-grey">
                                <i class="fas fa-map-marker-alt"></i>
                                @{{restaurant.address}}
                            </p>
                        </div>
                    </a>
                </div>
           </div>
           {{--End Print Filtered Restaurants--}}
        </div>
        {{--End Type List--}}

        {{--Restaurants list--}}
        <div class="container ">

            <div class="margin-top-bottom">
                <h2 class="title">I nostri ristoranti</h2>
     
                {{--All Restaurants--}}
                <div v-if=" search == '' " class="row">            
                    <div v-for="restaurant in restaurants" class="card col-lg-4 no-padding" style="width: 18rem;">
                        <a :href="`menu/${restaurant.id}`">
                            <img class="card-img-top cover-card" :src="`storage/${restaurant.cover}`" :alt="restaurant.name">

                            <div class="card-body">
                                <h5 class="card-title black-txt">@{{restaurant.name}}</h5>
                                <h4 class="card-title">@{{restaurant.type[0].name}}</h4>
                                <p class="card-text address-grey">
                                    <i class="fas fa-map-marker-alt"></i>
                                    @{{restaurant.address}}
                                </p>              
                            </div>
                        </a>
                    </div>
                </div>
                <div v-else class="row">
                    <div v-for="restaurant in searchRestaurant" class="card col-lg-4 no-padding" style="width: 18rem;">
                        <a :href="`menu/${restaurant.id}`">
                            <img class="card-img-top cover-card" :src="`storage/${restaurant.cover}`" :alt="restaurant.name">

                            <div class="card-body">
                                <h5 class="card-title black-txt"> @{{restaurant.name}}</h5>
                                <p class="card-text address-grey">
                                    <i class="fas fa-map-marker-alt"></i>
                                    @{{restaurant.address}}
                                </p>           
                            </div>
                        </a>
                    </div>
                </div>
                {{--End All Restaurants--}}
            </div>
        </div>
        {{--End Restaurants list--}}
    </div>
    {{--END ID ROOT --}}
@endsection

@section('js-script')
    <script src="{{asset('js/restaurants.js')}}"></script>
@endsection