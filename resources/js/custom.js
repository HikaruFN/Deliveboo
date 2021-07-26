
const dataForData = [];
const api_url = 'http://localhost:8000/api/order';
chartIt();
getData();
async function chartIt(){
    await getData();
    const ctx = document.getElementById('canvas').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: [   
                'Gennaio',
                'Febbraio',
                'Marzo',
                'Aprile',
                'Maggio',
                'Giugno',
                'Luglio',
                'Agosto',
                'Settembre',
                'Ottobre',
                'Novembre',
                'Dicembre'
            ],
            datasets: [{
                label: 'Entrate per Data',
                data: dataForData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 3
            }]
        },
        options: {
            plugins:{
                legend:{
                    
                    position : 'left',
                },          
            },
            scales: {
                y: {
                    beginAtZero: true
                },
                x: {
                    beginAtZero: true
                }
            }   
        }
    });
};

async function getData(){
    //Chiamo dati da Api
   const response = await fetch(api_url);
   //converte risposta in json
   const data = await response.json();
   if(dataForData == 0){
    data.order.forEach(element => {
        dataForData.push(element.amount);  
    });
   }
   console.log(data);
}



