<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Tarea creada en 12-23-2020</div>

            <div class="card-body">
            
                <input v-if="modoeditar" type="text" class="form-control" v-model="tarea.nombre">
                <h3 v-else>{{tarea.nombre}}</h3>                    

                <input v-if="modoeditar" type="text" class="form-control" v-model="tarea.descripcion">
                <p v-else>{{tarea.descripcion}}</p>                                            

            </div>
            <div class="card-footer">
                    <button v-if="modoeditar" type="submit" 
                            :class="['btn btn-success']"
                            @click="guardarCambios"
                            >Guardar cambios</button>

                    <button v-else type="submit" 
                            :class="['btn btn-success']"
                            @click="editar">Editar</button>

                    <button type="submit" class="btn btn-danger" @click="eliminar">Eliminar</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['tarea'],
        data(){
            return {
                modoeditar : false
            }
        },
        methods:{
            editar(){
                this.modoeditar = true
            },
            guardarCambios(){
                    this.modoeditar = false
                    this.$emit('guardarcambios', this.tarea);
            },
            eliminar(){
                this.$emit('eliminar');
            }
        }

    }
</script>