const { default: Axios } = require("axios");
const { result, defaultsDeep } = require("lodash");

var app = new Vue({
    el: '#root',

    data: {
        orders: [],
        chart: []
    },
    
    mounted() {
        axios
            .get('http://localhost:8000/api/stats')
            .then(result => {
                this.chart = result.data.order;
                console.log(this.chart);

                this.chart.forEach(result => {
                    this.orders.push(result);
                });
        })
    },

    methods: {}
});