<template>
    <input type="submit" value="Eliminar x" class="btn btn-danger" @click="eliminarAlumno">
</template>

<script>
    import Swal from 'sweetalert2'

    export default {
        props: ['alumnoId'],
        mounted() {},
        methods:{
            eliminarAlumno(){
                Swal.fire({
                    title: '¿Desea eliminar el alumno?',
                    text: "Una vez eliminado no se podra recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, adelante!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const params = {
                            id: this.alumnoId
                        }

                        //Enviar peticion al servidor
                        axios.post(`/alumnos/${this.alumnoId}`, {params, _method: 'delete'}).then( res => {
                            Swal.fire(
                              'Alumno eliminado!',
                              'Se elimino el alumno.',
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
