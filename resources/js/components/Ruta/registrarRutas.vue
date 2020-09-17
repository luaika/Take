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
        <br>
        <div class="container-fluid">
            <vue-bootstrap4-table :rows="rutas" :columns="columns"  :config = "config" thead-class="green-bg bg-dark text-white">
                
                <templete slot="edit">
                    <button type="button" class="btn btn-warning"><i class="icofont-pencil-alt-1"></i></button>
                </templete>
                <templete slot="estado" >
                    <toggle-button @change="stateCupon"/>

                        <toggle-button v-model="myDataVariable"/>

                        <toggle-button :value="false"
                                    color="#82C7EB"
                                    :sync="true"
                                    :labels="true"/>

                        <toggle-button :value="true"
                                    :labels="{checked: 'Foo', unchecked: 'Bar'}"/>
                    <!--<div v-if="props.row.estado === 1">
                        
                        <toggle-button :value="true" :width="72" @change="stateCupon(props.row.idRuta, 0)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>

                    <div v-else-if="props.row.estado === 0 ">
                        <p>chao</p>
                        <toggle-button :value="false" :width="72" @change="stateCupon(props.row.idRuta, 1)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>-->
                </templete>
                
                <!--
                <templete slot="state" slot-scope="props">
                    <button type="button" class="btn btn-warning">{{props.row.estado}}</button>
                </templete> -->
            </vue-bootstrap4-table>
        </div>
    </div>



</template>
<script>
import Vue from 'vue' 
import axios from 'axios';
import router from '../../routes';
import VueBootstrap4Table from 'vue-bootstrap4-table';
import ToggleButton from 'vue-js-toggle-button';
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
                barrioTermina:[],
                show_barrios:true,
                barrio:[],
                rutas:[],
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
                columns: [
                {
                    label: "Código",
                    name: "codigo",
                    sort: false,
                },
                {
                    label: "Descripción",
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
                card_title: "RUTAS",
                show_refresh_button: false,
                show_reset_button: false,
                global_search: {
                        placeholder: "Buscar ",
                },
            },

            }

        },
    components:{
        VueBootstrap4Table,
        ToggleButton
    },
    mounted(){
            this.getListBarrios();
            this.getRutaTermina();
            this.getRutas();
            
    },
    methods:{
    //insertar ruta
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
                     this.getRutaTermina();                    
                    $("#Ruta").modal('hide');

                }).catch((error) => {
                    swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                    console.log(error.response);
                });
            };

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
                    this.message = 'No hay registro de cupones!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
        },
        
            stateCupon: function (id, state) {
            let formData = {
                id: id,
                state: state
            };
            swal({
                title: "Estas seguro ?",
                text: "Este cupón quedara " + state + " en tus registros!",
                icon: "warning",
                buttons: ["Cancelar","Ok"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    axios.post('/stateCupon', formData).then((response) => {
                        //Success
                        this.getCupons();
                        swal("OK!", "Estado actualizado", "success");

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
