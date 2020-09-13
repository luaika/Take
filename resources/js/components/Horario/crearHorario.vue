<template>
    <div class="container contaRuta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Habilitar Horario</h5>
        </div>
    <div class="card cardRutas">

                 <form method="POST" id="form-ruta"  v-on:submit.prevent="setHorario" >

            <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ show_alert.create.messaje }}
            </div>

              <div class="form-group col-md-12">
                            <label >Hora</label>
                            <!--<i class="fas fa-clock iconos"></i>-->
                            <input type="time" v-model="hora" class="form-control" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Fecha</label>
                            <!--<i class="far fa-calendar-alt iconos"></i>-->
                            <input type="date"  v-model="fecha"  class="form-control" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Ruta<span class="text-danger">*</span></label>
                            <select class="custom-select" v-model="idRuta">
                                <option value="0">Seleccionar Ruta</option>
                                <option v-for="idRuta in ruta" :value="idRuta.idRuta" v-text="idRuta.descripcion" v-bind:key="idRuta"></option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label >Vehiculo <span class="text-danger">*</span> </label>
                            <select class="custom-select" v-model="idVehiculo" required>
                                <option value="0">Seleccionar Vehiculo</option>
                                <option v-for="idVehiculo in vehiculo" :value="idVehiculo.idVehiculo" v-text="idVehiculo.placa" v-bind:key="idVehiculo"></option>
                            </select>
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
        name: "crearHorario",
        data(){
            return {
                hora : '',
                fecha : '',
                idRuta : 0,
                idVehiculo : 0,
                show_ruta:true,
                show_vehiculo:true,
                vehiculo:[],
                ruta:[],
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
            this.getListVehiculo();
            this.getListRuta();
    },

    methods:{
       setHorario:function() {
            if (this.idRuta == 0 || this.idVehiculo == 0) {
                this.show_alert.create.state = true;
                this.show_alert.create.messaje = 'Debe seleccionar Ruta y Vehiculo';
                setTimeout(() => this.show_alert.create.state = false, 2000);
            }
            else {
                this.buttons.create.name = 'Agregando ...';
                this.buttons.create.state = true;
                let formData = {
                    'fecha': this.fecha,
                    'hora': this.hora,
                    'idRuta': this.idRuta,
                    'idVehiculo': this.idVehiculo
                }

            axios.post('/setHorario', formData).then((response) =>{
                this.fecha = '';
                this.hora = '';
                this.idRuta = 0;
                this.idVehiculo = 0;
                    swal("OK!", "Horario creado exitosamente!", "success");
                    this.buttons.create.name = 'Agregar' ;
                    this.buttons.create.state = false ;
                    $("#Horario").modal('hide');
                }).catch((error) => {
                    swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                    console.log(error.response);
                });
            };
       },
             // Lista Categorias
            getListVehiculo: function () {
                axios.get('/vehiculo-resource').then((response) => {
                    console.log('response_ '+JSON.stringify(response.data));
                    this.vehiculo = response.data;
                }).catch((error) => {
                    console.log(error.response);
                });
            },

             // Lista Categorias
                getListRuta: function () {
                axios.get('/rutas-resource?Q=1').then((response) => {
                    console.log('response_ '+JSON.stringify(response.data));
                    this.ruta = response.data;
                }).catch((error) => {
                    console.log(error.response);
                });
            },
    }
}
</script>
