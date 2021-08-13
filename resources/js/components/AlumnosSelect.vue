<template>
    <div>
        <div class="form-group">
            <label for="alumno">Alumnos</label>
            <select name="alumno_id" id="alumno" class="form-control" :class="clase" @change="verOpcion()">
                <option value="" selected disabled>-- Seleccione --</option>
                <option v-for="alumno in alumnsArray" :key="alumno.id" :value="alumno.id">{{alumno.nombre}} {{alumno.ap_paterno}} {{alumno.ap_materno}}</option>
            </select>
            <div class="invalid-feedback animate__animated animate__flash">Escoja un alumno para asignar</div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['alumnos', 'inscritos'],
    data(){
        return{
            alumns: JSON.parse(this.alumnos),
            inscrits: JSON.parse(this.inscritos),
            alumnosarray: [],
            clase: 'is-invalid'
        }
    },
    mounted(){},
    methods: {
        verOpcion(){
            const select = document.querySelector('#alumno').value;
            if (select > 0) {
                this.clase = 'is-valid';
            }
        }
    },
    computed: {
        alumnsArray(){
            this.alumns.forEach(element => {
                const found = this.inscrits.find(alumno => alumno.id == element.id);
                if(!found){
                    this.alumnosarray.push(element)
                }
            });

            return this.alumnosarray
        }
    },
    destroyed(){
        console.log('me fui');
    }
}
</script>
