const { default: Axios } = require("axios");
const { sum } = require("lodash");

var app = new Vue( {
    el: '#root',
    data: {
        dish_Array: [],
        chartArray: [],
        getId: null,
        sum: 0,
    },  
    methods: {
        setChart(dish){
            if (!this.chartArray.includes(dish)) {
                this.chartArray.push(dish);
                this.sum = this.sum + dish.price;
            }else{
                dish.quantity++;
                this.sum = this.sum + dish.price;
            }
        },
        addQuantity(product, index){
            product.quantity ++;
            this.sum = this.sum + product.price;
        },

        decreaseQuantity(product, index){
            if(product.quantity >= 1){
                product.quantity --;
                this.sum = this.sum - product.price;
                if(product.quantity < 1){
                    product.quantity = 1;
                    this.$delete(this.chartArray, index);
                    console.log(this.chartArray);
                }   
            } 
        },


        deleteItem(){
            this.sum = 0;
            this.chartArray = [];
        },

        setLocalStorage: function () {
            localStorage.clear();
            localStorage.setItem("prodotti", JSON.stringify(this.chartArray));
       },
    },
    watch:{
        chartArray: {
            handler(newNotes) {
                localStorage.chartArray = JSON.stringify(newNotes);
            },
            deep: true            
        },
        sum(newSum){
            localStorage.sum = newSum;
        }
    },
    created(){
        const [a, b, c, d, id] = window.location.href.split('/');
        this.getId = id;
        if(localStorage.chartArray){
            this.chartArray = JSON.parse(localStorage.chartArray);
        }
        if(localStorage.sum){
            this.sum = JSON.parse(localStorage.sum);
        }
    },
    mounted(){
        axios.get(`http://localhost:8000/api/dish`)
        .then(result => {
            this.dish_Array = result.data.dish
    })
    }

})