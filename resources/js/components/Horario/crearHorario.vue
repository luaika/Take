<template>

    <div class="container contaRuta" id="Ruta">

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Horario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form-edit_product" v-on:submit.prevent="putHorario" >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label >Hora</label>
                                    <input type="time" class="form-control"  v-model="data_edit.hora">
                                </div>

                                <div class="form-group col-md-12">
                                    <label >Fecha</label>
                                    <input type="date" class="form-control"  v-model="data_edit.fecha" required>
                                </div>
                            </div>
                        </div>
                        <div v-if="show_alert.edit.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                            {{ show_alert.edit.messaje }}
                        </div>

                        <div class="row  m-t-25">
                            <div class="col">
                                <div class="form-group">

                                    <button class="btn btn-success" :disabled="buttons.edit.state">
                                        {{ buttons.edit.name }}
                                        <i v-if="buttons.edit.state" class="fa fa-spinner fa-spin"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!--Crear Horario-->
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
        <br>


        <div class="container-fluid">
            <vue-bootstrap4-table :rows="horario" :columns="columns"  :config = "config" thead-class="green-bg bg-dark text-white">

                <templete slot="edit" slot-scope="props">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  v-on:click="editHorario(props.row.idHorario)" v-bind:idHorario="props.row.idHorario">
                        <i class="icofont-edit"></i>
                    </button>
                </templete>
                <templete slot="delete" slot-scope="props">
                    <button type="button" class="btn btn-danger"   v-on:click="deleteHorario(props.row.idRuta)" v-bind:idRuta="props.row.idHorario">
                       <i class="icofont-ui-delete"></i>
                    </button>
                </templete>
            </vue-bootstrap4-table>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import router from '../../routes';
import VueBootstrap4Table from 'vue-bootstrap4-table';
import ToggleButton from 'vue-js-toggle-button';
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
                horario:[],
                ruta:[],
                show_alert: {
                    create: {
                        state: false ,
                        messaje: ''
                    } ,
                    edit: {
                    state: false ,
                    messaje: ''
                    }
                },
                buttons: {
                    create: {
                        name: 'Agregar',
                        state: false,
                    },

                    edit: {
                    name: 'Actualizar',
                    state: false
                    },
                },
                 columns: [
                {
                    label: "Hora",
                    name: "hora",
                    sort: false,
                },
                {
                    label: "Fecha",
                    name: "fecha",
                    sort: true,
                },
                {
                    label: "Ruta",
                    name: "ruta",
                    sort: false,
                },
                {
                    label: "Vehiculo",
                    name: "vehiculo",
                    sort: true,
                },
                 {
                    label: "Editar",
                    name: "edit",
                    sort: false,
                },
                 {
                    label: "Eliminar",
                    name: "delete",
                    sort: false,
                },
            ],
            config: {
                 pagination: true, // default true
                    pagination_info: true, // default true
                    num_of_visibile_pagination_buttons: 7, // default 5
                    per_page: 5, // default 10
                    per_page_options:  [5,  10,  20,  30],
                filas_seleccionables: true,
                card_title: "HORARIOS",
                show_refresh_button: false,
                show_reset_button: false,
                global_search: {
                placeholder: "Buscar ",
                },
            },

                data_edit:{
                show: true,
                contenedor: false ,
                hora: '',
                fecha: '',
            },
            }
        },
    components:{
        VueBootstrap4Table,
        ToggleButton

    },

    mounted() {
            this.getListVehiculo();
            this.getListHorario()
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

             getListHorario: function () {
            axios.get('/horario-resource').then( (response)  => {
                if (response.data.length > 0) {
                    this.horario = response.data ;
                    console.log(this.horario);
                } else {
                    this.message = 'No hay registro de horarios!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
             },

             //traer Horario
         editHorario: function (idHorario) {
            this.data_edit.idHorario = idHorario ;
            axios.get('/horario-resource/'+idHorario+'/edit').then((response) => {
                this.data_edit.contenedor= true;
                this.data_edit.show= false;
                let data = response.data;
                this.data_edit.hora = data['hora'];
                this.data_edit.fecha = data['fecha'];

            }).catch((error) => {
                console.log(error);
            });
        },

        deleteHorario: function(idHorario){
             this.data_edit.idHorario = idHorario ;
             swal("El Horario se eliminará de sus registros", "¿Desea eliminar este horario?", "warning");
             console.log('holis');
        },

        //put horario
           putHorario: function() {
            this.buttons.edit.name = 'Actualizando...';
            this.buttons.edit.state = true;

            let formData = {
                'hora': this.data_edit.hora,
                'fecha': this.data_edit.fecha,
            };
            axios.put('/updateHorario/' + this.data_edit.idHorario, formData).then((response) => {
                console.log('entro a actualizar');
                this.buttons.edit.name = 'Actualizar';
                this.buttons.edit.state = false;
                swal("OK!", "Ruta actualizado exitosamente!", "success");
                $("#ModalEditHorario").modal('hide');
                this.getRutaTermina();

            }).catch((error) => {
                console.log(error.response);
                let errors = '';
                let aux = error.response.data.errors;
                for (let i in aux) {
                    let sci = aux[i];
                    for (let j in sci) {
                        errors += '\n' + sci[j];
                    }
                }
                this.buttons.edit.name = 'Actualizar';
                this.buttons.edit.state = false;
                this.show_alert.edit.state = true;
                this.show_alert.edit.messaje = errors;
                setTimeout(() => this.show_alert.edit.state = false, 5000);
            });

        },
    }
}
</script>

