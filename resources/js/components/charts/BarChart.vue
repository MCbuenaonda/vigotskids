<template>
    <canvas :id="idcanvas" width="400" height="400"></canvas>
</template>

<script>
import Chart from 'chart.js/auto';

export default {
    props: ['info','labels','bgColor','bdColor','titleId'],
    data(){
        return{
            infodata: JSON.parse(this.info),
            infolabels: JSON.parse(this.labels),
            infobgcolor: JSON.parse(this.bgColor),
            infobdcolor: JSON.parse(this.bdColor),
            idcanvas: this.titleId + '-canvas'
        }
    },
    mounted(){
        const labels = this.infolabels;

        const dataChart = {
            labels: labels,
            datasets: [{
                axis: 'y',
                label: '',
                data: this.infodata,
                fill: false,
                backgroundColor: this.infobgcolor,
                borderColor: this.infobdcolor,
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
