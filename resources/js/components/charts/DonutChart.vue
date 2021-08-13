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
        const dataChart = {
            labels: [
                'Activos',
                'Inactivos',
            ],
            datasets: [{
                label: this.label,
                data: this.infodata,
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)',
                ],
                hoverOffset: 4
            }]
        };

        var ctx = document.getElementById(this.idcanvas);
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: dataChart
        });
    }
}
</script>
