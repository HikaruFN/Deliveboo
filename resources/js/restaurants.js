const { default: Axios } = require("axios");

var app = new Vue( {
    el: '#root',
    data: {
        restaurants: [],
        search:'',
        searchRestaurant: [],
    },
    mounted(){
        axios.get('http://localhost:8889/api/restaurant')
        .then(result => {
            this.restaurants = result.data.restaurant
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
            console.log(this.searchRestaurant);
        },

    }

});