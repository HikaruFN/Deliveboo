var app = new Vue( {
    el: '#root',
    data: { 
        prodotti: JSON.parse(localStorage.getItem("prodotti")),
        prodottiToJson: "",
        total : 0,
    },
    methods: {   

    },
    mounted(){
        this.prodotti.forEach(element => {
            this.total += element.price * element.quantity;
        });
        this.prodottiToJson = JSON.stringify(this.prodotti);
        return(this.total);     
    },

})