<template>
    
    <div class="row justify-content-center">        
        <formulario-component @nueva = 'creartarea'></formulario-component>
        <tarea-component v-for = "(tarea,index) in tareasvec" :key="tarea.id"
                        :tarea = 'tarea'
                        @guardarcambios = "guardarcambios(index, ...arguments)"
                        @eliminar = "eliminar(index)"
        ></tarea-component>
    </div>
    

</template>

<script>
    export default {    
        data(){
            return {
                tareasvec :  []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            creartarea(tarea){
                this.tareasvec.push(tarea)
            },
            guardarcambios(index, tarea){
                this.tareasvec[index] = tarea;
            },
            eliminar(index){
                this.tareasvec.splice(index,1);
            }
        }
    }
</script>
