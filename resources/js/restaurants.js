const { default: Axios } = require("axios");
const { types } = require("sass");

var app = new Vue( {
    el: '#root',
    data: {
        restaurants: [],
        types_array: [],
        search:'',
        searchRestaurant: [],
    },
    mounted(){
        const restaurant_api = axios.get('http://localhost:8889/api/restaurant')
        .then(result => {
            this.restaurants = result.data.restaurant;
        });
        const type_api = axios.get('http://localhost:8889/api/type')
        .then(result => {
            this.types_array = result.data.types;
        });
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

    }

});