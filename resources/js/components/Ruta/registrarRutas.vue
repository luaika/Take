<template>

    <div class="container contaRuta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Registrar Rutas</h5>
        </div>
    <div class="card cardRutas"> 
       <form method="POST" id="form-ruta"  v-on:submit.prevent="setRuta" >
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
                <label for="idBarrioInicia">Origen</label>
                <i class="fas fa-map-marker-alt iconosRutas"></i>
                <input type="text" id="idBarrioInicia" class="form-control inputRutas" v-model="idBarrioInicia" required>
                </div>

                <div class="form-group col-md-6">
                <label for="idBarrioTermina">Destino</label>
                <i class="fas fa-map-marked-alt iconosRutas"></i>
                <input type="text" id="idBarrioTermina" class="form-control inputRutas" v-model="idBarrioTermina" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                <label for="estado">Estado</label>
                <i class="fas fa-map-marker-alt iconosRutas"></i>
                <input type="text" id="estado" class="form-control inputRutas" v-model="estado" required>
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
                <button class="btn botonAgregar botones" type="submit">Agregar</button>
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
                idBarrioInicia : '',
                idBarrioTermina : '',
                estado : '',
                idUsuarioModifica: '',
                idUsuarioCrea:'',
               
            }
        },
    methods:{
       setRuta:function() {
           let formData = {
                'codigo': this.codigo,
                'descripcion': this.descripcion,
                'idBarrioInicia': this.idBarrioInicia,
                'idBarrioTermina': this.idBarrioTermina,
                'estado': this.estado,
                'idUsuarioModifica': this.idUsuarioModifica,
                'idUsuarioCrea': this.idUsuarioModifica
           };
            axios.post('/setRuta', formData).then((response) =>{
                this.codigo = '';
                this.descripcion = '';
                this.idBarrioInicia = '';
                this.idBarrioTermina = '';
                this.estado = '';
                this.idUsuarioModifica = '';
                this.idUsuarioCrea = '';

                    swal("OK!", "Ruta creada exitosamente!", "success");
                    
                }).catch((error) => {
                   swal("Lo sentimos!", "Parece que algo salio mal!", "error");
                   alert("Error");
                    console.log(error.response);
                });           
       }, 
    }
}
</script>