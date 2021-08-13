<template>
    <input type="submit" value="Activar" class="btn btn-outline-success" @click="activarGrupo">
</template>

<script>
import Swal from 'sweetalert2'

export default {
    props: ['grupoId'],
    methods:{
        activarGrupo(){
            Swal.fire({
                title: '¿Desea activar el grupo?',
                text: "Una vez activado no se podra editar o eliminar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si'
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.grupoId
                    }

                    //Enviar peticion al servidor
                    axios.post(`/grupos/${this.grupoId}/change`, {params, _method: 'post'}).then( res => {
                        location.reload();
                    }).catch(error => console.log(error));
                }
            })
        }
    }
}
</script>
