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
                <div class="col-8" style="width: 18rem;">
                    <div v-for="dish in dish_Array" class="card">
                        <div v-if="dish.user_id == getId" class="card-body">  {{--TO DO! Background problem--}}
                            <h5 class="card-title">@{{dish.name}}</h5> 
                            <img class="card-img-top cover-card" :src="`/storage/${dish.cover}`" :alt="dish.name">

                            <button v-on:click="setChart(dish.id)" class="btn btn-success">Aggiungi al carrello</button> 
                        </div>
                    </div>
                </div>

                {{----}}
                <div class="col-4" v-if="chartArray.length > 0" >
                    <div class="card">
                        <div class="card-body">  
                            <div v-for="(product, index) in chartArray">
                                <h5>@{{product.name}}</h5>
                                <h5>Price: @{{product.price}}€</h5>
                                <h5>Quantità: @{{product.quantity}}</h5>
                                <button v-on:click="decreaseQuantity(product, index)" class="btn btn-primary">-</button>
                                <button v-on:click="addQuantity(product, index)" class="btn btn-primary">+</button>      
                                <br>{{--TOGLIERE QUESTI MOSTRI--}}
                                <br>{{--TOGLIERE QUESTI MOSTRI--}}
                                <button v-on:click="deleteItem(index, product)" class="btn btn-danger">X</button>
                            </div>   
                            <div class="card-body">
                                <h3 v-if="sum">Total Price: @{{sum.toFixed(2)}}</h3>
                                <button  class="btn btn-success"><a href="{{route('braintree-index')}}">Vai al pagamento</a></button>
                            </div>  
                            </form>     
                        </div>
                    </div>
                </div>
                {{----}}
            </div>
        </div>
    </div>

    {{-- END ID ROOT --}}
@endsection

@section('js-script')
    <script src="{{asset('js/dish.js')}}"></script>
@endsection