const { default: Axios } = require("axios");

var app = new Vue( {
    el: '#root',
    data: {
        types: [],
        restaurants: [],
        search:'',
        searchRestaurant: [],
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
            console.log(this.types);
        },

    }

});