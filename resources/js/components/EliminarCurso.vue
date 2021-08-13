<template>
    <input type="submit" value="Eliminar x" class="btn btn-danger" @click="eliminarCurso">
</template>

<script>
    import Swal from 'sweetalert2'

    export default {
        props: ['cursoId'],
        mounted() {},
        methods:{
            eliminarCurso(){
                Swal.fire({
                    title: '¿Desea eliminar el curso?',
                    text: "Una vez eliminado no se podra recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, chingatelo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const params = {
                            id: this.cursoId
                        }

                        //Enviar peticion al servidor
                        axios.post(`/cursos/${this.cursoId}`, {params, _method: 'delete'}).then( res => {
                            Swal.fire(
                              'Curso eliminado!',
                              'Se elimino el curso.',
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
