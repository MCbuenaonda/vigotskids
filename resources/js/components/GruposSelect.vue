<template>
    <div>
        <div class="form-group">
            <label for="grupo">Grupos</label>
            <select name="grupo_id" id="grupo" class="form-control" :class="clase" @change="verOpcion()">
                <option value="" selected disabled>-- Seleccione --</option>
                <option v-for="grupo in grupsArray" :key="grupo.id" :value="grupo.id">{{grupo.nombre}}</option>
            </select>
            <div class="invalid-feedback animate__animated animate__flash">Escoja un grupo para asignar</div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['grupos', 'inscritos'],
    data(){
        return{
            grups: JSON.parse(this.grupos),
            inscrits: JSON.parse(this.inscritos),
            gruposarray: [],
            clase: 'is-invalid'
        }
    },
    mounted(){},
    methods: {
        verOpcion(){
            const select = document.querySelector('#grupo').value;
            if (select > 0) {
                this.clase = 'is-valid';
            }
        }
    },
    computed: {
        grupsArray(){
            console.log('asdas');
            console.log(this.inscrits);
            this.grups.forEach(element => {
                const found = this.inscrits.find(grupo => grupo.id == element.id);
                if(!found){
                    this.gruposarray.push(element)
                }
            });

            return this.gruposarray
        }
    }
}
</script>
