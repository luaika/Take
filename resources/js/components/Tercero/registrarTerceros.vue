<template>
<div class="container contaRuta">
  <div class="modal-header encabezadoFormulario" >
      <h5 class="text-center text-white" id="exampleModalLabel">Registrar Tercero</h5>
  </div>
  <div class="card cardRutas">
    <form method="POST" v-on:submit.prevent="setTercero" enctype="multipart/form-data">
      <div class=" primerContenedor">
        <div class="row">
          <div class="form-group col-md-4">
            <label for="numeroIdentificacion" >Identificación</label>
            <i class="far fa-address-card iconos"></i>
            <input type="text" class="form-control inputTeceros" id="numeroIdentificacion" v-model="numeroIdentificacion" required>
          </div>
                  <!-- <div class="form-group col-md-1">
                      <label for="tipoIdentificacion">D.V</label>
                      <input type="text" class="form-control inputTeceros" id="tipoIdentificacion" v-model="tipoIdentificacion" required>
                </div> -->
          <div class="form-group col-md-4">
            <label for="tipoIdentificacion">Tipo Documento</label>
            <select class="custom-select" id="tipoIdentificacion" v-model="tipoIdentificacion" required>
              <option value="1">CC</option>
              <option value="2">TI</option>
              <option value="3">RC</option>
            </select>
          </div>
          <!--examinar-->    
          <div class="form-group col-md-3 " style="margin-top:2rem;">
            <div class="custom-file ">
              <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile"  required>
              <label class="custom-file-label" for="validatedInputGroupCustomFile"></label>
            </div>       
          </div>
        </div>
        
               
        <div class="row" >                
          <div class="form-group col-md-4">
              <label for="nombres">Nombres</label>
              <i class="icofont-ui-user iconos"></i>
              <input type="text" class="form-control inputTeceros" id="nombres" v-model="nombres" >
          </div>
          <div class="form-group col-md-4">
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
                <option></option>
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
            <label for="idMunicipio">Ciudad</label>
            <i class="fas fa-city iconos"></i>
            <input type="text" class="form-control inputTeceros" id="idMunicipio" v-model="idMunicipio" >
          </div>
        </div>
      </div>
      <hr>
      <div class="segundoContenedor">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="razonSocial">Razon social</label>
            <i class="fas fa-city iconos"></i>
            <input type="text" class="form-control inputTeceros"  id="razonSocial" v-model="razonSocial" >
          </div>
          <div class="form-group col-md-6">
            <label for="nombreComercial">Nombre comercial</label>
            <i class="fas fa-city iconos"></i>
            <input type="text" class="form-control inputTeceros" id="nombreComercial" v-model="nombreComercial" >
          </div>
        </div>
          
        <div class="row">
      <!-- <div class="form-group col-md-6">
        <label>Tipo Tercero</label>
        <select class="custom-select" v-model="" required>
          <option></option>
        </select>
      </div> -->
          <div class="form-group col-md-4">
            <label for="estado" >Estado</label>
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
</div>
  
</template>
<script>
import axios from 'axios';
import router from '../../routes';
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
      idMunicipio:'',
      estado:0,
      idUsuarioCrea:1,
      idUsuarioModifica:1,
      imagenMiniatura:'',
      buttons: {
        create: {
          name: 'Agregar',
            state: false,
        },
      },

    }
  },
  methods:{
    //agregar tercero
    setTercero: function(){
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
            'foto':  this.image_dish,
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
            this.estado='',
            this.idUsuarioCrea='',
            this.idUsuarioModifica='',
            swal("OK!", "Tercero creado exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;           
            }).catch((error) => {
                swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                console.log(error.response);
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
      this.genero=0,
      this.fechaNacimiento='',
      this.telefono='',
      this.celular='',
      this.email='',
      this.direccion='',
      this.idMunicipio='',
      this.foto='',
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