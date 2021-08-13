<template>
    <canvas :id="idcanvas" width="400" height="400"></canvas>
</template>

<script>
import Chart from 'chart.js/auto';

export default {
    props: ['info','label'],
    data(){
        return{
            infodata: JSON.parse(this.info),
            idcanvas: this.label + '-canvas'
        }
    },
    mounted(){
        const labels = ['Nuevo','Abierto','Cerrado','Finalizado'];

        const dataChart = {
            labels: labels,
            datasets: [{
                axis: 'y',
                label: '',
                data: this.infodata,
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                ],
                borderWidth: 1
            }]
        };

        const ctx = document.getElementById(this.idcanvas);

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: dataChart,
            options: {
                indexAxis: 'y',
            }
        });
    }
}
</script>
