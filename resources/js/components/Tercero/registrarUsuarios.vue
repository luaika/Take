<template>
    <div class="container contaRuta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Registrar Usuarios</h5>
        </div>
    <div class="card cardRutas">

        <form method="POST" id="form-usuario" v-on:submit.prevent="setUsuario" >

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
                    <option value="-1">Seleccionar Estado</option>
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
    name:'Usuarios',
     data(){
            return {
                idTercero : 0,
                estado : -1,
                codigo: '',
                clave:'',
                show_tercero:true,
                tercero:[],
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
            this.getListTercero();
    },
    methods:{
       setUsuario:function() {
            if (this.idTercero == 0 || this.estado == -1) {
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
                this.estado = '';
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

            // Lista Categorias
            getListTercero: function () {
                axios.get('/tercero-resource').then((response) => {
                    console.log('response_ '+JSON.stringify(response.data));
                    this.tercero = response.data;
                }).catch((error) => {
                    console.log(error.response);
                });
            },
    }
}
</script>

