var app = new Vue( {
    el: '#root',
    data: { 
        prodottiSuccess: JSON.parse(localStorage.getItem("prodotti")),
        total: 0,
    },
    mounted(){
        this.prodottiSuccess.forEach(element => {
            this.total += element.price * element.quantity;
        });
        return(this.total);     
    },

})