const { default: Axios } = require("axios");

var app = new Vue( {
    el: '#root',
    data: {
        chartArray: [],
    },  
    methods: {
        setChart(id){
            axios.get('http://localhost:8889/api/restaurant')
        .then(result => {
            this.restaurants = result.data.restaurant
        })
        }
    }

});