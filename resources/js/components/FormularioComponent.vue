<template>
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿Cúal es la Nueva tarea?</div>

                <div class="card-body">

                    <form action="" enctype="multipart/form-data" v-on:submit.prevent = "nuevaTarea()">
                        <input type="text" class="form-control" placeholder="Nombre de la tarea..." v-model="nombre">
                        <input type="text" class="form-control mt-2" placeholder="Descripción de la tarea..." v-model="descripcion">

                        <input type="file" class="form-control-file mt-2" @change="cargarImagen_Of_disco">             
                        <figure>
                            <img :src="imagen_miniatura" alt="Imagen" width="100" height="100" class="mt-2">
                        </figure>           
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
                nombre_imagen: '',
                imagen_miniatura: ''
            }
        },
        methods:{
            nuevaTarea(){
                let tarea = {                    
                    titulo: this.nombre,
                    descripcion: this.descripcion,
                    nombre_imagen: this.nombre_imagen,
                    imagen: this.imagen_miniatura
                }
                axios.post('/tarea', tarea). then( (response) => {
                    console.log(response.data);
                }) .catch ((e) =>{

                } ) 
                //this.$emit('nueva',tarea)

                this.nombre = ''
                this.descripcion = ''
            },
            cargarImagen_Of_disco(e){
                let file = e.target.files[0];
                this.nombre_imagen = file.name;
                this.mostrar_imagen(file)
            },
            mostrar_imagen(file){
                let reader = new FileReader()
                reader.onload = (e) => {
                    this.imagen_miniatura = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
    }
</script>