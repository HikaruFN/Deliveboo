const { default: Axios } = require("axios");
const { result } = require("lodash");

var app = new Vue( {
    el: '#root',
    data: {
        types: [],
        restaurants: [],
        search:'',
        typeId: 0,
        searchRestaurant: [],
        searchRestaurantType: [],
    },
    mounted(){
        axios.get('http://localhost:8000/api/restaurant')
        .then(result => {
            this.restaurants = result.data.restaurant
        })
        axios.get('http://localhost:8000/api/type')
        .then(result => {
            this.types = result.data.type
        })
    },
    methods: {
        searchRestaurantFunction(){ 
            this.searchRestaurant = [];
            this.restaurants.forEach(restaurant => {
                if(restaurant.name.toLowerCase().includes(this.search.toLowerCase())){
                    this.searchRestaurant.push(restaurant);
                }              
            });
        },
        searchRestaurantForType(id){
           this.searchRestaurantType = [];
           this.typeId = id;
            console.log(this.typeId);
            axios.get(`http://localhost:8000/api/restaurantfilter/${this.typeId}`)
            .then(result => {
                result.data.restaurants.forEach(element => {
                    this.searchRestaurantType.push(element); 
                });
            })
            console.log(this.searchRestaurantType);
        }

    }

});