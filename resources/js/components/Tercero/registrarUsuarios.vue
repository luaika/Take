<template>
    <div class="container contaRuta">

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Editar Horario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form-edit_product" v-on:submit.prevent="putUsuario" >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-12">
                                <label>Estado</label>
                                <select class="custom-select" v-model="data_edit.estado" required>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label >Codigo</label>
                                    <input type="text" class="form-control"  v-model="data_edit.codigo" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Clave</label>
                                    <input type="text" class="form-control"  v-model="data_edit.clave" required>
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

    <!--Crear Usuario-->
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalUsuario">Registrar Usuarios</h5>
        </div>
    <div class="card cardRutas">
        <form method="POST" id="form-ruta" v-on:submit.prevent="setUsuario" >

            <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ show_alert.create.messaje }}
            </div>

              <div class="row">
                <div class="form-group col-md-6">
                        <label>Tercero <span class="text-danger">*</span></label>
                        <select class="custom-select" v-model="idTercero" required>
                        <option value="0">Seleccionar Tercero</option>
                         <option v-for="idTercero in tercero" :value="idTercero.idTercero" v-text="idTercero.nombres" v-bind:key="idTercero"></option>
                    </select>
                      </div>

            <!--
            <div class="form-group col-md-6">
                <label for="validationServer01">Usuario</label>
                <i class="icofont-ui-user iconosRutas"></i>
                <input type="text" class="form-control inputRutas" v-model="usuario" id="validationServer01" required>
            </div>
            -->

            <div class="form-group col-md-6">
                <label>Estado</label>
                <select class="custom-select" v-model="estado">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
                </div>

            </div>
                <div class="row">
                    <div class="form-group col-md-6">
                <label for="codigo">Codigo</label>
                <i class="fas fa-asterisk iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="codigo" v-model="codigo" required>
            </div>
                  <div class="form-group col-md-6">
                <label for="validationServer01">Contraseña</label>
                <i class="icofont-eye-blocked iconosRutas"></i>
                <input type="password" class="form-control inputRutas" v-model="clave" id="clave" required>
               </div>
            </div>
            <div class="btn-width">
                <button class="btn  botonCancelar botones" v-on:click="cancelarRegistro()" >Cancelar</button>
                <button class="btn botonAgregar botones"  :disabled="buttons.create.state">{{ buttons.create.name }}</button>
            </div>
            </form>
        </div>
        <br>

        <!--Formulario-->
        <div class="container-fluid">
            <vue-bootstrap4-table :rows="usuario" :columns="columns"  :config = "config">
                <templete slot="edit" slot-scope="props">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"  v-on:click="editUsuario(props.row.idUsuario)" v-bind:idUsuario="props.row.idUsuario">
                        <i class="icofont-edit"></i>
                    </button>
                </templete>
                <templete slot="delete" slot-scope="props">
                    <button type="button" class="btn btn-danger" v-on:click="deleteUsuario(props.row.idUsuario)" v-bind:idUsuario="props.row.idUsuario">
                       <i class="icofont-ui-delete"></i>
                    </button>
                </templete>
                <templete slot="estado" slot-scope="props">

                    <div v-if="props.row.estado === 1">
                        <toggle-button :value="true" :width="72" @change="stateUsuario(props.row.idUsuario, 0)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                    <div v-else-if="props.row.estado === 0 ">
                        <toggle-button :value="false" :width="72" @change="stateUsuario(props.row.idUsuario, 1)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
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
    name:'Usuarios',
     data(){
            return {
                idTercero : 0,
                estado : 1,
                codigo: '',
                clave:'',
                show_tercero:true,
                tercero:[],
                usuario:[],
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
                    label: "idTercero",
                    name: "idTercero",
                    sort: false,
                },
                {
                    label: "Codigo",
                    name: "codigo",
                    sort: false,
                },
                {
                    label: "Clave",
                    name: "clave",
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
                    per_page: 6, // default 10
                    per_page_options:  [6,  10,  20,  30],
                //highlight_row_hover_color:"blue", over del listado
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
                codigo: '',
                clave: '',
                estado: '',
            },
            }


        },
    components:{
        VueBootstrap4Table
    },

    mounted() {
            this.getListTercero();
            this.getListUsuario();
    },
    methods:{
       setUsuario:function() {
            if (this.idTercero == 0 || this.estado == 1) {
                this.show_alert.create.state = true;
                this.show_alert.create.messaje = 'Debe seleccionar tercero y estado ';
                setTimeout(() => this.show_alert.create.state = false, 2000);
            }
            else {
                this.buttons.create.name = 'Agregando ...';
                this.buttons.create.state = true;
                let formData = {
                    'idTercero': this.idTercero,
                    'estado': this.estado,
                    'codigo': this.codigo,
                    'clave': this.clave
                }

            axios.post('/setUsuario', formData).then((response) =>{
                this.idTercero = 0;
                this.estado = '1';
                this.codigo = '';
                this.clave = '';
                    swal("OK!", "Usuario creado exitosamente!", "success");
                    this.buttons.create.name = 'Agregar' ;
                    this.buttons.create.state = false ;
                    $("#Usuario").modal('hide');
                }).catch((error) => {
                    swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                    console.log(error.response);
                });
            };
       },

       deleteUsuario: function(idUsuario){
            swal({
                title: "Estas seguro ?",
                text: "Este usuario quedará eliminado de tus registros!",
                icon: "warning",
                buttons: ["Cancelar","Confirmar"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    this.data_edit.idUsuario= idUsuario;
                    axios.delete('/usuario-delete/' + this.data_edit.idUsuario).then((response) => {
                        swal("OK!", "El usuario se elimino exitosamente", "success");
                        this.getListUsuario();
                    }).catch((error)=>{
                        swal("Lo sentimos", "Parece que algo salio mal!", "error");
                    });
                }
            });
        },
         //Cancelar registro
        cancelarRegistro:function (){
            this.show_alert.create.state = false;
            this.idTercero = 0;
            this.estado = 1;
            this.codigo ='' ;
            this.clave = '';
        },
            //Lista terceros
            getListTercero: function () {
                axios.get('/tercero-resource').then((response) => {
                    console.log('response_ '+JSON.stringify(response.data));
                    this.tercero = response.data;
                }).catch((error) => {
                    console.log(error.response);
                });
            },

            //traer Usuarios
            editUsuario: function (idUsuario) {
                this.data_edit.idUsuario= idUsuario ;
                axios.get('/usuario-resource/'+idUsuario+'/edit').then((response) => {
                this.data_edit.contenedor= true;
                this.data_edit.show= false;
                let data = response.data;
                this.data_edit.codigo = data['codigo'];
                this.data_edit.estado = data['estado'];
                  this.data_edit.clave = data['clave'];

            }).catch((error) => {
                console.log(error);
            });
        },
            getListUsuario: function () {
            axios.get('/usuario-resource').then( (response)  => {
                if (response.data.length > 0) {
                    this.usuario = response.data ;
                    console.log(this.usuario);
                } else {
                    this.message = 'No hay registro de usuarios!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
        },

        //Put usuario
           putUsuario: function() {
            this.buttons.edit.name = 'Actualizando...';
            this.buttons.edit.state = true;

            let formData = {
                'estado': this.data_edit.estado,
                'codigo': this.data_edit.codigo,
                'clave': this.data_edit.clave,
            };
            axios.put('/updateUsuario/' + this.data_edit.idUsuario, formData).then((response) => {
                this.buttons.edit.name = 'Actualizar';
                this.buttons.edit.state = false;
                swal("OK!", "Usuario actualizado exitosamente!", "success");
                $("#exampleModal").modal('hide');
                this.getListUsuario();

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

        //Cambiar estado
         stateUsuario: function (idUsuario, estado) {

                let formData = {
                idUsuario: idUsuario,
                estado: estado
                 };

                 if(estado == 1 ){
                     var nomState = "Activo";
                 }else{
                     var nomState = "Inactivo";
                 }
                swal({
                    title: "Estado de usuario",
                    text: "Este usuario quedará " + nomState + " en tus registros!",
                    icon: "success",
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        axios.post('/stateUsuario', formData).then((response) => {
                            //Success
                            this.getListUsuario();
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

