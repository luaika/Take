<template>
<div class="container contaRuta">
  <!-- Modal ver -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Tercero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div >
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="numeroIdentificacion" >Identificación</label>
                        <i class="far fa-address-card iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="numeroIdentificacion" v-model="data_edit.numeroIdentificacion" required>
                      </div>
      
                    <div class="form-group col-md-6">
                      <label >Tipo de Identificación:</label>
                      <input type="text" class="form-control inputRutas"  v-if="data_edit.tipoIdentificacion===1" placeholder="CC">
                      <input type="text" class="form-control inputRutas"  v-if="data_edit.tipoIdentificacion===2" placeholder="TI">
                      <input type="text" class="form-control inputRutas"  v-if="data_edit.tipoIdentificacion===3" placeholder="RC">
                    </div> 
                  </div>
              
                    
              <div class="row" >                
                <div class="form-group col-md-6">
                    <label for="nombres">Nombres</label>
                    <i class="icofont-ui-user iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="nombres" v-model="data_edit.nombres" >
                </div>
                <div class="form-group col-md-6">
                    <label for="apellidos" >Apellidos</label>
                  <i class="icofont-ui-user iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="apellidos" v-model="data_edit.apellidos" >
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="fechaNacimiento">Fecha Nacimiento</label>
                  <input type="date" class="form-control" value="2020-01-01" id="fechaNacimiento" v-model="data_edit.fechaNacimiento" >
                </div>
                <div class="form-group col-md-6">
                  <label for="genero" >Genero</label>
                  <input type="text" class="form-control inputRutas"  v-if="data_edit.genero===1" placeholder="Masculino">
                  <input type="text" class="form-control inputRutas"  v-if="data_edit.genero===2" placeholder="Femenino">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono</label>
                    <i class="icofont-telephone iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="telefono" v-model="data_edit.telefono" >
                </div>
                <div class="form-group col-md-6">
                    <label for="celular">Celular</label>
                    <i class="fas fa-mobile-alt iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="celular" v-model="data_edit.celular" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="direccion">Dirección</label>
                  <i class="fas fa-map-marker-alt iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="direccion" v-model="data_edit.direccion">
                </div>
                <div class="form-group col-md-6">
                  <label for="idMunicipio">Ciudad</label>
                  <i class="fas fa-city iconos"></i>
                  <input type="text" class="form-control inputTeceros"  v-model="data_edit.municipio" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                    <label for="email">Correo</label>
                    <i class="far fa-envelope iconos"></i>
                    <input type="email" class="form-control inputTeceros" id="email" v-model="data_edit.email" >
                </div>
              </div>
            </div>
            <hr>
            <div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="razonSocial">Razon social</label>
                  <i class="fas fa-city iconos"></i>
                  <input type="text" class="form-control inputTeceros"  id="razonSocial" v-model="data_edit.razonSocial" >
                </div>
                <div class="form-group col-md-6">
                  <label for="nombreComercial">Nombre comercial</label>
                  <i class="fas fa-city iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="nombreComercial" v-model="data_edit.nombreComercial" >
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  
  <!-- Modal editar -->
   <div class="modal fade " id="exampleModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Tercero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form  method="POST" v-on:submit.prevent="putTercero">
                   <div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="numeroIdentificacion" >Identificación</label>
                        <i class="far fa-address-card iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="numeroIdentificacion" v-model="data_edit.numeroIdentificacion" required>
                      </div>
      
                    <div class="form-group col-md-6">
                      <label for="tipoIdentificacion">Tipo Documento</label>
                      <select class="custom-select" id="tipoIdentificacion" v-model="data_edit.tipoIdentificacion" required>
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                        <option value="3">RC</option>
                      </select>
                    </div> 
                  </div>
              
                    
              <div class="row" >                
                <div class="form-group col-md-6">
                    <label for="nombres">Nombres</label>
                    <i class="icofont-ui-user iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="nombres" v-model="data_edit.nombres" >
                </div>
                <div class="form-group col-md-6">
                    <label for="apellidos" >Apellidos</label>
                  <i class="icofont-ui-user iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="apellidos" v-model="data_edit.apellidos" >
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="fechaNacimiento">Fecha Nacimiento</label>
                  <input type="date" class="form-control"  id="fechaNacimiento" v-model="data_edit.fechaNacimiento" >
                </div>
                <div class="form-group col-md-6">
                  <label for="genero" >Genero</label>
                  <select class="custom-select" id="genero" v-model="data_edit.genero" >
                    <option value="0">Seleccione una opción</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono</label>
                    <i class="icofont-telephone iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="telefono" v-model="data_edit.telefono" >
                </div>
                <div class="form-group col-md-6">
                    <label for="celular">Celular</label>
                    <i class="fas fa-mobile-alt iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="celular" v-model="data_edit.celular" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="direccion">Dirección</label>
                  <i class="fas fa-map-marker-alt iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="direccion" v-model="data_edit.direccion">
                </div>
                <div class="form-group col-md-6">
                  <label for="idMunicipio">Ciudad</label>
                  <i class="fas fa-city iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="idMunicipio" v-model="data_edit.idMunicipio" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Correo</label>
                    <i class="far fa-envelope iconos"></i>
                    <input type="email" class="form-control inputTeceros" id="email" v-model="data_edit.email" >
                </div>
                <div class="form-group col-md-6">
                   <label for="estado" >Estado</label>
                    <select class="custom-select" id="estado" v-model="data_edit.estado" required>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>                   
                  </div>
              </div>
            </div>
            <hr>
            <div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="razonSocial">Razon social</label>
                  <i class="fas fa-city iconos"></i>
                  <input type="text" class="form-control inputTeceros"  id="razonSocial" v-model="data_edit.razonSocial" >
                </div>
                <div class="form-group col-md-6">
                  <label for="nombreComercial">Nombre comercial</label>
                  <i class="fas fa-city iconos"></i>
                  <input type="text" class="form-control inputTeceros" id="nombreComercial" v-model="data_edit.nombreComercial" >
                </div>
              </div>
            </div> 
            <div v-if="show_alert.edit.state" class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                {{ show_alert.edit.messaje }}
            </div>
            <div class="modal-footer centrar">
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

 <!-- crear vehículo -->
  <div class="modal-header encabezadoFormulario" >
      <h5 class="text-center text-white" id="exampleModalLabel">Registrar Tercero</h5>
  </div>

  <div class="card cardRutas">
    <form method="POST" v-on:submit.prevent="setTercero" enctype="multipart/form-data">
      <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ show_alert.create.messaje }}
      </div>
      <div class=" primerContenedor">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="numeroIdentificacion" >Identificación</label>
            <i class="far fa-address-card iconos"></i>
            <input type="text" class="form-control inputTeceros" id="numeroIdentificacion" v-model="numeroIdentificacion" required>
          </div>
          <div class="form-group col-md-6">
            <label for="tipoIdentificacion">Tipo Documento</label>
            <select class="custom-select" id="tipoIdentificacion" v-model="tipoIdentificacion" required>
              <option value="1">CC</option>
              <option value="2">TI</option>
              <option value="3">RC</option>
            </select>
          </div>
        </div>               
        <div class="row" >                
          <div class="form-group col-md-6">
              <label for="nombres">Nombres</label>
              <i class="icofont-ui-user iconos"></i>
              <input type="text" class="form-control inputTeceros" id="nombres" v-model="nombres" >
          </div>
          <div class="form-group col-md-6">
              <label for="apellidos" >Apellidos</label>
            <i class="icofont-ui-user iconos"></i>
            <input type="text" class="form-control inputTeceros" id="apellidos" v-model="apellidos" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="fechaNacimiento">Fecha Nacimiento</label>
            <input type="date" class="form-control" value="2020-01-01" id="fechaNacimiento" v-model="fechaNacimiento" >
          </div>
          <div class="form-group col-md-6">
            <label for="genero" >Genero</label>
            <select class="custom-select" id="genero" v-model="genero" >
              <option value="0">Seleccione una opción</option>
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
              <label for="telefono">Teléfono</label>
              <i class="icofont-telephone iconos"></i>
              <input type="text" class="form-control inputTeceros" id="telefono" v-model="telefono" >
          </div>
          <div class="form-group col-md-4">
              <label for="celular">Celular</label>
              <i class="fas fa-mobile-alt iconos"></i>
              <input type="text" class="form-control inputTeceros" id="celular" v-model="celular" >
          </div>
          <div class="form-group col-md-4">
              <label for="email">Correo</label>
              <i class="far fa-envelope iconos"></i>
              <input type="email" class="form-control inputTeceros" id="email" v-model="email" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <i class="fas fa-map-marker-alt iconos"></i>
            <input type="text" class="form-control inputTeceros" id="direccion" v-model="direccion">
          </div>
          <div class="form-group col-md-6">
            <label for="nombreComercial">Nombre comercial</label>
            <i class="fas fa-city iconos"></i>
            <input type="text" class="form-control inputTeceros" id="nombreComercial" v-model="nombreComercial" >
          </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
              <label for="direccion">Departamento</label>
              <select class="custom-select"  >
                  <option value="0">Seleccionar un Departamento</option>
                  <option id="idDepartamento" v-for="idDepartamento in departamentos" v-on:click="getMunicipio(idDepartamento.idDepartamento)" v-bind:idDepartamento="idDepartamento">{{idDepartamento.descripcion}}</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="idMunicipio">Municipio</label>
              <select class="custom-select" v-model="idMunicipio" required>
                  <option value="0">Seleccionar un Municipio</option>
                  <option v-for="idMunicipio in municipios" :value="idMunicipio.idMunicipio" v-text="idMunicipio.descripcion"></option>
              </select>
            </div>
        </div>
      </div>
      <hr>
      <div class="segundoContenedor form-group">
        <div class="row">
          <div class="col">
            <label for="razonSocial">Razon social</label>
            <i class="fas fa-city iconos"></i>
            <input type="text" class="form-control inputTeceros"  id="razonSocial" v-model="razonSocial" >
          </div>
          <div class="col">
            <label>Estado</label>
            <select class="custom-select" id="estado" v-model="estado" required>
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>          
            </div>
        </div>
      </div>
    
     <div class="btn-width ">
     <button class="btn  botonCancelar botones" v-on:click="cancelarRegistro()">Cancelar</button>
     <button class="btn botonAgregar botones"  :disabled="buttons.create.state">{{ buttons.create.name }}</button>
     </div>
  </form>  
    </div>
    <br>
     <div class="container-fluid">
            <vue-bootstrap4-table :rows="terceros" :columns="columns"  :config = "config" thead-class="green-bg bg-dark text-white">
                
                <templete slot="edit" slot-scope="props">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalEditar"  v-on:click="verTercero(props.row.idTercero)" v-bind:idTercero="props.row.idTercero">
                        <i class="icofont-edit"></i>
                    </button>
                </templete>
                <templete slot="ver" slot-scope="props">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  v-on:click="verTercero(props.row.idTercero)" v-bind:idTercero="props.row.idTercero">
                        <i class="icofont-eye-alt"></i>
                    </button>
                </templete>
                <templete slot="delete" slot-scope="props">
                    <button type="button" class="btn btn-danger"   v-on:click="deleteTercero(props.row.idTercero)" v-bind:idTercero="props.row.idTercero">
                       <i class="icofont-ui-delete"></i>
                    </button>
                </templete>

                <templete slot="estado" slot-scope="props">
                    
                    <div v-if="props.row.estado === 1">
                        <toggle-button :value="true" :width="72" @change="stateTercero(props.row.idTercero, 0)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                    <div v-else-if="props.row.estado === 0 ">
                        <toggle-button :value="false" :width="72" @change="stateTercero(props.row.idTercero, 1)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                </templete>
                
            </vue-bootstrap4-table>
     </div>
</div>
  
</template>
<script>
import axios from 'axios';
import router from '../../routes';
import VueBootstrap4Table from 'vue-bootstrap4-table';
export default {

  data(){
    return {
      numeroIdentificacion:'',
      tipoIdentificacion:1,
      nombres:'',
      apellidos:'',
      razonSocial:'',
      nombreComercial:'',
      genero:0,
      fechaNacimiento:'',
      telefono:'',
      celular:'',
      email:'',
      foto:'ninguna',
      direccion:'',
      idMunicipio:0,
      estado:1,
      idDepartamento:0,
      idUsuarioCrea:1,
      idUsuarioModifica:1,
      imagenMiniatura:'',
      terceros:[],
      departamentos:[],
      municipios:[],
      buttons: {
        create: {
          name: 'Agregar',
            state: false,
        },
      },
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
                    label: "Nombre",
                    name: "nombres",
                    sort: false,
                },
                {
                    label: "Identificación",
                    name: "numeroIdentificacion",
                    sort: false,
                },
                {
                    label: "Celular",
                    name: "celular",
                    sort: false,
                },
                {
                    label: "Dirección",
                    name: "direccion",
                    sort: false,
                },
                {
                    label: "Ver",
                    name: "ver",
                    sort: false,
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
                card_title: "TERCEROS",
                show_refresh_button: false,
                show_reset_button: false,
                global_search: {
                  placeholder: "Buscar ",
                },
            },
            data_edit:{
                show: true,
                contenedor: false ,
                numeroIdentificacion:'',
                tipoIdentificacion:'',
                nombres:'',
                apellidos:'',
                razonSocial:'',
                nombreComercial:'',
                genero:'',
                fechaNacimiento:'',
                telefono:'',
                celular:'',
                email:'',
                foto:'',
                direccion:'',
                idMunicipio:'',
                estado:'',
                municipio:'',
                departamento:'',
                nombreMunicipio:'',
                idUsuarioModifica:1,
                idUsuarioCrea:1,
                departamentos:[],
                municipios:[],
            },
    }
  },
  components:{
        VueBootstrap4Table
    },
  
   mounted(){
      this.getTercero();
      this.getDepartamento();
    },
  methods:{
    //agregar tercero
    setTercero: function(){
       if (this.idMunicipio == 0) {
          this.show_alert.create.state = true;
          this.show_alert.create.messaje = 'Debe seleccionar Departamento y Municipio ';
          setTimeout(() => this.show_alert.create.state = false, 2000);
            }
      else {
       this.buttons.create.name = 'Agregando ...';
       this.buttons.create.state = true;
          let formData = {
            'numeroIdentificacion': this.numeroIdentificacion,
            'tipoIdentificacion': this.tipoIdentificacion,
            'nombres': this.nombres,
            'apellidos': this.apellidos,
            'razonSocial': this.razonSocial,
            'nombreComercial': this.nombreComercial,
            'genero': this.genero,
            'fechaNacimiento': this.fechaNacimiento,
            'telefono': this.telefono,
            'celular': this.celular,
            'email': this.email,
            'direccion': this.direccion,
            'idMunicipio': this.idMunicipio,
            'foto':  this.foto,
            'estado': this.estado,
            'idUsuarioCrea': this.idUsuarioCrea,
            'idUsuarioModifica': this.idUsuarioModifica,
            
          }
          axios.post('/setTercero', formData).then((response) =>{

            this.numeroIdentificacion='',
            this.tipoIdentificacion='',
            this.nombres='',
            this.apellidos='',
            this.razonSocial='',
            this.nombreComercial='',
            this.genero='',
            this.fechaNacimiento='',
            this.telefono='',
            this.celular='',
            this.email='',
            this.direccion='',
            this.idMunicipio='',
            this.foto='ninguna',
            this.estado=1,
            this.idUsuarioCrea=1,
            this.idUsuarioModifica=1,
             this.getTercero();
            swal("OK!", "Tercero creado exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;           
            }).catch((error) => {
                swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                console.log(error.response);
            });
      }
    },

    //listar terceros
    getTercero:function(){
     axios.get('/tercero-resource').then((response) => {
                if (response.data.length > 0) {
                    this.terceros = response.data;
                } else {
                    this.message = 'No hay registro de terceros!!!';
                    
                }
            }).catch((error) => {
                console.log(error.response);
            });
    },
    
    //listar departamentos
    getDepartamento:function(){
      axios.get('/departamento').then((response) => {
                this.departamentos = response.data;
                console.log(this.departamentos);
            }).catch((error) => {
                    console.log(error.response);
            });
    },

    //listar municipio
    getMunicipio:function(idDepartamento){
      console.log(idDepartamento);
     axios.get('/municipio/'+idDepartamento).then((response) => {
             this.municipios = response.data; 
        }).catch((error) => {
              console.log(error.response);
        });
    },
    
    //ver tercero
    verTercero: function (idTercero) {
            this.data_edit.idTercero = idTercero ;
            axios.get('/tercero-resource/'+idTercero+'/edit').then((response) => {
                this.data_edit.contenedor= true;
                this.data_edit.show= false;
                console.log(response.data);
                let data = response.data;
                this.data_edit.numeroIdentificacion = response.data[0].numeroIdentificacion;
                this.data_edit.tipoIdentificacion = response.data[0].tipoIdentificacion;
                this.data_edit.nombres = response.data[0].nombres;
                this.data_edit.apellidos = response.data[0].apellidos;
                this.data_edit.razonSocial = response.data[0].razonSocial;
                this.data_edit.nombreComercial = response.data[0].nombreComercial;
                this.data_edit.genero = response.data[0].genero;
                this.data_edit.fechaNacimiento = response.data[0].fechaNacimiento;
                this.data_edit.telefono = response.data[0].telefono;
                this.data_edit.celular = response.data[0].celular;
                this.data_edit.email =response.data[0].email;
                this.data_edit.foto = response.data[0].foto;
                this.data_edit.direccion = response.data[0].direccion;
                this.data_edit.idMunicipio = response.data[0].idMunicipio;
                this.data_edit.municipio = response.data[0].municipio;
                this.data_edit.departamento = response.data[0].departamento;
                this.data_edit.estado = response.data[0].estado;               
            }).catch((error) => {
                console.log(error);
            });
        },

    //editar Tercero
    putTercero: function(){
       this.buttons.edit.name = 'Actualizando...';
            this.buttons.edit.state = true;
             
             let formData = {
              'numeroIdentificacion': this.data_edit.numeroIdentificacion,
              'tipoIdentificacion': this.data_edit.tipoIdentificacion,
              'nombres': this.data_edit.nombres,
              'apellidos': this.data_edit.apellidos,
              'razonSocial': this.data_edit.razonSocial,
              'nombreComercial': this.data_edit.nombreComercial,
              'genero': this.data_edit.genero,
              'fechaNacimiento': this.data_edit.fechaNacimiento,
              'telefono': this.data_edit.telefono,
              'celular': this.data_edit.celular,
              'email': this.data_edit.email,
              'direccion': this.data_edit.direccion,
              'idMunicipio': this.data_edit.idMunicipio,
              'foto':  this.data_edit.foto,
              'estado': this.data_edit.estado,
              'idUsuarioCrea': this.data_edit.idUsuarioCrea,
              'idUsuarioModifica': this.data_edit.idUsuarioModifica,
          }
            axios.put('/updateTercero/' + this.data_edit.idTercero, formData).then((response) => {
                console.log('entro a actualizar');
                this.buttons.edit.name = 'Actualizar';
                this.buttons.edit.state = false;
                swal("OK!", "Tercero actualizado exitosamente!", "success");
                $("#exampleModalEditar").modal('hide');
                this.getTercero();
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
    //elimiar tercero
    deleteTercero: function(idTercero){
     swal({
         title: "Estas seguro ?",
         text: "Este tercero quedará eliminado de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_edit.idTercero = idTercero;
             axios.delete('/tercero-delete/' + this.data_edit.idTercero).then((response) => {
                 swal("OK!", "El tercero se elimino exitosamente", "success");
                 this.getTercero();
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },
    
    // cambiar estado 
    stateTercero: function (idTercero, estado) {
    
                let formData = {
                idTercero: idTercero,
                estado: estado
                 };

                 if(estado == 1 ){
                     var nomState = "Activo";
                 }else{
                     var nomState = "Inactivo";
                 }
                swal({
                    title: "Estado de tercero",
                    text: "Este tercero quedará " + nomState + " en tus registros!",
                    icon: "success",
                    dangerMode: false,
                }).then((willDelete) => {
                    if (willDelete) {
                        axios.post('/stateTerceros', formData).then((response) => {
                            //Success
                            swal("OK!", "Estado actualizado exitosamente", "success");

                        }).catch((error) => {
                            swal("Oops!", "Parece que algo salio mal!", "error");
                            console.log(error.response);
                        });
                    }
                });

        },


    //cancelar registro
    cancelarRegistro:function (){
      this.numeroIdentificacion='',
            this.tipoIdentificacion='',
            this.nombres='',
            this.apellidos='',
            this.razonSocial='',
            this.nombreComercial='',
            this.genero='',
            this.fechaNacimiento='',
            this.telefono='',
            this.celular='',
            this.email='',
            this.direccion='',
            this.idMunicipio='',
            this.foto='ninguna',
            this.estado=1,
            this.idUsuarioCrea=1,
            this.idUsuarioModifica=1
    }
  },
  computed:{
    foto(){
      return this.imagenMiniatura;
    }
  },
}
</script>

<style>
  .examinar{
    margin-top:4%;
    min-width:3rem !important;
  }
</style>