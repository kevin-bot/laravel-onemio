<template>
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿Cúal es la Nueva tarea?</div>

                <div class="card-body">
                    <form action="" v-on:submit.prevent = "nuevaTarea()">
                        <input type="text" class="form-control" placeholder="Nombre de la tarea..." v-model="nombre">
                        <input type="text" class="form-control mt-2" placeholder="Descripción de la tarea..." v-model="descripcion">
                        <button type="submit" class="btn btn-success mt-2">Guardar</button>
                    </form>                    
                </div>
            </div>
        </div>
</template>

<script>
    export default {
         data(){
            return {
                nombre : '',
                descripcion : '',
            }
        },
        methods:{
            nuevaTarea(){
                let tarea = {
                    id: 2,
                    nombre: this.nombre,
                    descripcion: this.descripcion
                }
                this.$emit('nueva',tarea)
                this.nombre = ''
                this.descripcion = ''
            }
        }
    }
</script>