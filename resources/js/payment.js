var app = new Vue( {
    el: '#root',
    data: { 
        prodotti: JSON.parse(localStorage.getItem("prodotti")),
        total : 0,
    },
    methods: {   
       
    },
    mounted(){

        console.log(this.prodotti);
        this.prodotti.forEach(element => {
            this.total += element.price * element.quantity;
        });
        return(this.total);
        console.log(this.total);
        
        
    },

})