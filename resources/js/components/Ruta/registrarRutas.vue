<template>

    <div class="container contaRuta" id="Ruta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Registrar Rutas</h5>
        </div>
    <div class="card cardRutas">
       <form method="POST" id="form-ruta"  v-on:submit.prevent="setRuta" >

            <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ show_alert.create.messaje }}
            </div>
            <div class="row">

            <div class="form-group col-md-6">
                <label for="codigo">Codigo</label>
                <i class="fas fa-asterisk iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="codigo" v-model="codigo" required>
            </div>

            <div class="form-group col-md-6">
                <label for="descripcion">Descripción</label>
                <i class="far fa-edit iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="descripcion" v-model="descripcion" required>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                     <label>Barrio de origen: <span class="text-danger">*</span></label>
                    <select class="custom-select" v-model="idBarrioInicia" required>
                        <option value="0">Seleccionar Barrio</option>
                         <option v-for="idBarrioInicia in barrio" :value="idBarrioInicia.idBarrio" v-text="idBarrioInicia.descripcion" v-bind:key="idBarrioInicia"></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                     <label>Barrio de Destino: <span class="text-danger">*</span></label>
                    <select class="custom-select" v-model="idBarrioTermina" required>
                        <option value="0">Seleccionar Barrio</option>
                         <option v-for="idBarrioTermina in barrio" :value="idBarrioTermina.idBarrio" v-text="idBarrioTermina.descripcion" v-bind:key="idBarrioTermina"></option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                <label>Estado</label>
                <select class="custom-select" v-model="estado">
                    <option value="-1">Seleccionar Estado</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
                </div>

                <div class="form-group col-md-6">
                <label for="idUsuarioModifica">idUsuarioModifica</label>
                <i class="fas fa-map-marked-alt iconosRutas"></i>
                <input type="text" id="idUsuarioModifica" class="form-control inputRutas" v-model="idUsuarioModifica" required>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-4">
                <label for="idUsuarioCrea">idUsuarioCrea</label>
                <i class="fas fa-map-marked-alt iconosRutas"></i>
                <input type="text" id="idUsuarioCrea" class="form-control inputRutas" v-model="idUsuarioCrea" required>
                </div>
            </div>
            <div class="btn-width">
                <button class="btn  botonCancelar botones" >Cancelar</button>
                <button class="btn botonAgregar botones"  :disabled="buttons.create.state">{{ buttons.create.name }}</button>
            </div>
        </form>
        </div>

    </div>

</template>
<script>
import axios from 'axios';
import router from '../../routes';
export default {
    name: "registrarRutas",
     data(){
            return {
                codigo : '',
                descripcion : '',
                idBarrioInicia : 0,
                idBarrioTermina : 0,
                estado : -1,
                idUsuarioModifica: '',
                idUsuarioCrea:'',
                show_barrios:true,
                barrio:[],
                show_alert: {
                    create: {
                        state: false ,
                        messaje: ''
                    } ,
                },
                buttons: {
                    create: {
                        name: 'Agregar',
                        state: false,
                    },
                },
            }

        },
    mounted() {
            this.getListBarrios();
    },
    methods:{
       setRuta:function() {
            if (this.idBarrioInicia == 0 || this.idBarrioTermina == 0 || this.estado == -1) {
                this.show_alert.create.state = true;
                this.show_alert.create.messaje = 'Debe seleccionar origen, destino y estado ';
                setTimeout(() => this.show_alert.create.state = false, 2000);
            }
            else {
                this.buttons.create.name = 'Agregando ...';
                this.buttons.create.state = true;
                let formData = {
                    'codigo': this.codigo,
                    'descripcion': this.descripcion,
                    'idBarrioInicia': this.idBarrioInicia,
                    'idBarrioTermina': this.idBarrioTermina,
                    'estado': this.estado,
                    'idUsuarioModifica': this.idUsuarioModifica,
                    'idUsuarioCrea': this.idUsuarioModifica
                }

            axios.post('/setRuta', formData).then((response) =>{
                this.codigo = '';
                this.descripcion = '';
                this.idBarrioInicia = 0;
                this.idBarrioTermina = 0;
                this.estado = '';
                this.idUsuarioModifica = '';
                this.idUsuarioCrea = '';
                    swal("OK!", "Ruta creada exitosamente!", "success");
                    this.buttons.create.name = 'Agregar' ;
                    this.buttons.create.state = false ;
                    $("#Ruta").modal('hide');
                }).catch((error) => {
                    swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                    console.log(error.response);
                });
            };
       },

            // Lista Categorias
            getListBarrios: function () {
                axios.get('/barrio-resource').then((response) => {
                    console.log('response_ '+JSON.stringify(response.data));
                    this.barrio = response.data;
                }).catch((error) => {
                    console.log(error.response);
                });
            },
    }
}
</script>
