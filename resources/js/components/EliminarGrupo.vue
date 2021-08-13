<template>
    <input type="submit" value="Eliminar x" class="btn btn-danger" @click="eliminarReceta">
</template>

<script>
    import Swal from 'sweetalert2'

    export default {
        props: ['grupoId'],
        mounted() {},
        methods:{
            eliminarReceta(){
                Swal.fire({
                    title: '¿Desea eliminar el grupo?',
                    text: "Una vez eliminado no se podra recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, chingatelo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const params = {
                            id: this.grupoId
                        }

                        //Enviar peticion al servidor
                        axios.post(`/grupos/${this.grupoId}`, {params, _method: 'delete'}).then( res => {
                            Swal.fire(
                              'Grupo eliminado!',
                              'Se elimino el grupo.',
                              'success'
                            )

                            //Eliminar receta del DOM
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                        }).catch(error => console.log(error));
                    }
                })
            }
        }

    }
</script>
