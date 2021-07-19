const { default: Axios } = require("axios");
const { sum } = require("lodash");

var app = new Vue( {
    el: '#root',
    data: {
        dish_Array: [],
        chartArray: [],
        getId: null,
        sum: 0
    },  
    methods: {
        setChart(id){
            axios.get(`http://localhost:8889/api/dish/${id}`)
        .then(result => {
            result.data.dish.forEach(element => {
                this.chartArray.push(element);
                this.sum = this.sum + element.price;
            }); 
        })
        },

        deleteItem(index, product){
            this.chartArray.splice(index,1);
            this.sum = this.sum - product.price;
        },
    },
    created(){
        const [a, b, c, d, id] = window.location.href.split('/');
        this.getId = id;
    },
    mounted(){
        axios.get(`http://localhost:8889/api/dish`)
        .then(result => {
            this.dish_Array = result.data.dish
    })
    }

})