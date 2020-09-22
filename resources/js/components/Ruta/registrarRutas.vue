<template>

<div class="container contaRuta" id="Ruta">
<!-- Modal Editar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Ruta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form-edit_product" v-on:submit.prevent="putRuta" >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label >Codigo</label>
                                    <i class="fas fa-asterisk iconosRutas"></i>
                                    <input type="text" class="form-control inputRutas"  v-model="data_edit.codigo" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label >Nombre:</label>
                                    <i class="icofont-location-pin iconosRutas"></i>
                                    <input type="text" class="form-control inputRutas"  v-model="data_edit.descripcion" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                <label>Estado</label>
                                <select class="custom-select" v-model="data_edit.estado" required>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div v-if="show_alert.edit.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                            {{ show_alert.edit.messaje }}
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning botonAsctualizar" :disabled="buttons.edit.state">
                                {{ buttons.edit.name }}
                                <i v-if="buttons.edit.state" class="fa fa-spinner fa-spin"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Crear Ruta -->
   <div>
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" >Registrar Rutas</h5>
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
                <label for="descripcion">Nombre:</label>
               <i class="icofont-location-pin iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="descripcion" v-model="descripcion" required>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                     <label>Barrio de origen: <span class="text-danger">*</span></label>
                    <select class="custom-select" v-model="idBarrioInicia" required>
                        <option value="0">Seleccionar Barrio</option>
                         <option v-for="idBarrioInicia in barrio" :value="idBarrioInicia.idBarrio" v-text="idBarrioInicia.nombreBarrio" v-bind:key="idBarrioInicia" ></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                     <label>Barrio de Destino: <span class="text-danger">*</span></label>
                    <select class="custom-select" v-model="idBarrioTermina" required>
                        <option value="0">Seleccionar Barrio</option>
                         <option v-for="idBarrioTermina in barrio" :value="idBarrioTermina.idBarrio" v-text="idBarrioTermina.nombreBarrio" v-bind:key="idBarrioTermina"></option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-md-6">
                <label>Estado</label>
                <select class="custom-select" v-model="estado">
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
                <button class="btn  botonCancelar botones" v-on:click="cancelarRegistro()" >Cancelar</button>
                <button class="btn botonAgregar botones"  :disabled="buttons.create.state">{{ buttons.create.name }}</button>
            </div>
        </form>
        </div>
    <!-- End crear ruta -->
        <br>

        <div class="container-fluid">
            <vue-bootstrap4-table :rows="rutas" :columns="columns"  :config = "config" thead-class="green-bg bg-dark text-white">

                <templete slot="edit" slot-scope="props">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"  v-on:click="editRuta(props.row.idRuta)" v-bind:idRuta="props.row.idRuta">
                        <i class="icofont-edit"></i>
                    </button>
                </templete>
                <templete slot="delete" slot-scope="props">
                    <button type="button" class="btn btn-danger"   v-on:click="deleteRuta(props.row.idRuta)" v-bind:idRuta="props.row.idRuta">
                       <i class="icofont-ui-delete"></i>
                    </button>
                </templete>

                <templete slot="estado" slot-scope="props">

                    <div v-if="props.row.estado === 1">
                        <toggle-button :value="true" :width="72" @change="stateRuta(props.row.idRuta, 0)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                    <div v-else-if="props.row.estado === 0 ">
                        <toggle-button :value="false" :width="72" @change="stateRuta(props.row.idRuta, 1)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                </templete>
            </vue-bootstrap4-table>
        </div>
    </div>

    </div>

</template>

<script>
import Vue from 'vue'
import axios from 'axios';
import router from '../../routes';
import VueBootstrap4Table from 'vue-bootstrap4-table';

export default {
    name: "registrarRutas",
     data(){
            return {
                codigo : '',
                descripcion : '',
                idBarrioInicia : 0,
                idBarrioTermina : 0,
                estado :1,
                idUsuarioModifica: '',
                idUsuarioCrea:'',
                barrioTermina:[],
                show_barrios:true,
                barrio:[],
                rutas:[],
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
                    label: "Código",
                    name: "codigo",
                    sort: false,
                },
                {
                    label: "Nombre",
                    name: "descripcion",
                    sort: true,
                },
                {
                    label: "Inicio",
                    name: "barrio_inicia",
                    sort: false,
                },
                {
                    label: "Destino",
                    name: "barrio_termina",
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
                {
                    label: "Estado",
                    name: "estado",
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
                card_title: "USUARIOS",
                show_refresh_button: false,
                show_reset_button: false,
                global_search: {
                placeholder: "Buscar ",
                },
            },

            data_edit:{
                show: true,
                contenedor: false ,
                estado: '',
                codigo: '',
                clave: '',
            },
            }
        },
      components:{
        VueBootstrap4Table

    },
    mounted(){
            this.getListBarrios();
            this.getRutaTermina();
            this.getRutas();

    },
    methods:{
    //insertar ruta
       setRuta:function() {
            if (this.idBarrioInicia == 0 || this.idBarrioTermina == 0 ) {
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
                this.estado = 1;
                this.idUsuarioModifica = '';
                this.idUsuarioCrea = '';

                    swal("OK!", "Ruta creada exitosamente!", "success");
                    this.buttons.create.name = 'Agregar' ;

                    this.buttons.create.state = false ;

                    this.getRutas();
                    this.getBarrioTermina();
                    $("#Ruta").modal('hide');


                swal("OK!", "Ruta creada exitosamente!", "success");
                this.buttons.create.name = 'Agregar' ;
                this.buttons.create.state = false ;
                     this.getRutaTermina();
                    $("#Ruta").modal('hide');

                }).catch((error) => {
                    swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                    console.log(error.response);
                });
            };

       },
        //cancelar registro
        cancelarRegistro:function (){
            this.codigo = '';
                this.descripcion = '';
                this.idBarrioInicia = 0;
                this.idBarrioTermina = 0;
                this.estado = 1;
                this.idUsuarioModifica = '';
                this.idUsuarioCrea = '';
        },
        // Lista Barrios
        getListBarrios: function () {
            axios.get('/barrio-resource').then((response) => {
               // console.log('response_ '+JSON.stringify(response.data));
                this.barrio = response.data;
            }).catch((error) => {
                    console.log(error.response);
            });
        },

        //listar destino
        getRutaTermina: function(){
             axios.get('/rutas-resource?Q=2').then((response) => {
                if (response.data.length > 0) {
                    this.barrioTermina = response.data;
                    this.getRutas();
                } else {
                    this.message = 'No hay registro de cupones!!!';

                }
            }).catch((error) => {
                console.log(error.response);
            });
        },

        //Listar Rutas
        getRutas: function () {
            axios.get('/rutas-resource?Q=0').then( (response)  => {
                if (response.data.length > 0) {
                    const rutasTotal = response.data;
                    const des = this.barrioTermina;

                    this.rut = rutasTotal.concat(des);
                    let rutasAndDestino = [];
                    for (var i=0; i<des.length;i++){
                        rutasAndDestino[i] = Object.assign(des[i],this.rut[i]);
                    }

                    //this.rutas = Object.assign(des[0],this.rut[0]);
                    this.rutas = rutasAndDestino;
                } else {
                    this.message = 'No hay registro de tutas!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
        },
        //traer rutas
         editRuta: function (idRuta) {
            this.data_edit.idRuta = idRuta ;
            axios.get('/rutas-resource/'+idRuta+'/edit').then((response) => {
                this.data_edit.contenedor= true;
                this.data_edit.show= false;
                let data = response.data;
                this.data_edit.codigo = data['codigo'];
                this.data_edit.descripcion = data['descripcion'];
                this.data_edit.estado = data['estado'];

            }).catch((error) => {
                console.log(error);
            });
        },
        //eliminar Ruta
        deleteRuta: function(idRuta){
             swal({
                title: "Estas seguro ?",
                text: "Esta ruta quedará eliminada de tus registros!",
                icon: "warning",
                buttons: ["Cancelar","Confirmar"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    this.data_edit.idRuta = idRuta;
                    axios.delete('/rutas-delete/' + this.data_edit.idRuta).then((response) => {
                        swal("OK!", "La ruta se elimino exitosamente", "success");
                        this.getRutaTermina();
                    }).catch((error)=>{
                        swal("Lo sentimos", "Parece que algo salio mal!", "error");
                    });
                }
            });
        },
          //put ruta
        putRuta: function() {
            this.buttons.edit.name = 'Actualizando...';
            this.buttons.edit.state = true;

            let formData = {
                'codigo': this.data_edit.codigo,
                'descripcion': this.data_edit.descripcion,
                'estado': this.data_edit.estado,
            };


            axios.put('/updateRuta/' + this.data_edit.idRuta, formData).then((response) => {
                console.log('entro a actualizar');
                this.buttons.edit.name = 'Actualizar';
                this.buttons.edit.state = false;
                swal("OK!", "Ruta actualizado exitosamente!", "success");
                $("#exampleModal").modal('hide');
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

       // cambiar estado
         stateRuta: function (idRuta, estado) {

                let formData = {
                idRuta: idRuta,
                estado: estado
                 };

                 if(estado == 1 ){
                     var nomState = "Activo";
                 }else{
                     var nomState = "Inactivo";
                 }
                swal({
                    title: "Estado de ruta",
                    text: "Esta ruta quedará " + nomState + " en tus registros!",
                    icon: "success",
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        axios.post('/stateRuta', formData).then((response) => {
                            //Success
                            this.getRutaTermina();
                            swal("OK!", "Estado actualizado exitosamente", "success");

                        }).catch((error) => {
                            swal("Oops!", "Parece que algo salio mal!", "error");
                            console.log(error.response);
                        });
                    }
                });
        },


    }
}
</script>
