<template>
    <input type="submit" value="Activar curso" class="btn btn-outline-dark" @click="activarCurso">
</template>

<script>
import Swal from 'sweetalert2'

export default {
    props: ['cursoId'],
    methods:{
        activarCurso(){
            Swal.fire({
                title: '¿Desea activar el curso?',
                text: "Una vez activado no se podra editar o eliminar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si'
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.cursoId
                    }

                    //Enviar peticion al servidor
                    axios.post(`/cursos/${this.cursoId}/change`, {params, _method: 'post'}).then( res => {
                        location.reload();
                    }).catch(error => console.log(error));
                }
            })
        }
    }
}
</script>
