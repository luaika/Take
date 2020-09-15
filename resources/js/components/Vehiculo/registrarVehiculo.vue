<template>
  <div class="container contaRuta">
     <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Registrar vehículo</h5>
      </div>
      <div class="card cardRutas">
    <form method="POST" v-on:submit.prevent="setTercero" >
      <div>
             <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="placa">Placa</label>
                        <i class="fas fa-digital-tachograph iconos"></i>   
                        <input type="text" class="form-control inputTeceros" id="placa" v-model="placa">
                    </div>
                    <div class="col">
                        <label for="idVehiculoMatricula">Matrícula</label>
                        <i class="fas fa-city iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idVehiculoMatricula" v-model="idVehiculoMatricula">
                    </div>
                    <div class="col">
                        <label for="idServicio">Servicio</label>
                        <i class="fas fa-city iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idServicio" v-model="idServicio">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="idClase">Clase</label>
                        <i class="fas fa-city iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idClase" v-model="idClase">
                    </div>
                    <div class="col">
                        <label for="idMarca">Marca</label>
                        <i class="fas fa-city iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idMarca" v-model="idMarca">
                    </div>
                    <div class="col">
                        <label for="idColor">Color</label>
                        <i class="fas fa-palette iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idColor" v-model="idColor">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="idCarroceria">Carroceria</label>
                        <i class="fas fa-city iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idCarroceria " v-model="idCarroceria">
                    </div>
                    <div class="col">
                        <label for="idCombustible">Combustible</label>
                        <i class="fas fa-gas-pump iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="idCombustible " v-model="idCombustible ">
                    </div>
                    <div class="col">
                        <label for="linea">Linea</label>
                        <i class="fas fa-palette iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="linea" v-model="linea">
                    </div>
                            
                </div>
           </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="modelo">Modelo</label>
                        <i class="fas fa-palette iconos"></i>
                        <input type="number" class="form-control inputTeceros" id="modelo" v-model="modelo">                    
                    </div>
                    <div class="col">
                        <label for="numeroSerie">Número de serie</label>
                        <i class="fas fa-hashtag iconos"></i>
                        <input type="number" class="form-control inputTeceros" id="numeroSerie" v-model="numeroSerie">
                    </div>
                </div>
            </div>
    </div>

      <div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="numeroChasis">Número de chasis</label>
                    <i class="fas fa-hashtag iconos"></i>
                    <input type="number" class="form-control inputTeceros" id="numeroChasis" v-model="numeroChasis">
                </div>
                <div class="col">
                    <label for="numeroMotor">Número de motor</label>
                    <i class="fas fa-hashtag iconos"></i>
                    <input type="number" class="form-control inputTeceros" id="numeroMotor" v-model="numeroMotor">
                </div>
            </div>
        </div>

 
        <div class="form-group">
           <div class="row">
                <div class="col">
                    <label for="numeroPuertas">Número de puertas</label>
                    <i class="fas fa-hashtag iconos"></i>
                    <input type="number" class="form-control inputTeceros" id="numeroPuertas" v-model="numeroPuertas">
                </div>
                           
                <div class="col">
                   <label for="numeroPasajeros">Número de pasajeros</label>
                    <i class="fas fa-users iconos"></i>
                    <input type="number" class="form-control inputTeceros" id="numeroPasajeros" v-model="numeroPasajeros">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="observaciones">Observaciones</label>
                    <i class="fas fa-hand-point-right iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="observaciones" v-model="observaciones">              
                </div>
                <div class="col">
                    <label for="estado">Estado</label>
                    <i class="fas fa-palette iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="estado" v-model="estado">       
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="idUsuarioCrea">idUsuarioCrea</label>
                    <i class="fas fa-hand-point-right iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="idUsuarioCrea" v-model="idUsuarioCrea">              
                </div>
                <div class="col-md-4">
                    <label for="idUsuarioModifica">idUsuarioModifica</label>
                    <i class="fas fa-palette iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="idUsuarioModifica" v-model="idUsuarioModifica">       
                </div>
                <div class="col-md-4">
                    <label for="numeroInterno">numeroInterno</label>
                    <i class="fas fa-palette iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="numeroInterno" v-model="numeroInterno">       
                </div>
              </div>
            </div>



            <div class="form-group">
                <div  class="btn-width row">
                    <button type="button" class="btn botonCancelar botones">Cancelar</button>
                    <button type="submit" class="btn botonAgregar botones" :disabled="buttons.create.state">{{ buttons.create.name }}</button>
                </div>
            </div>     
    </form>
    </div>
            <div class="form-goup listado">
                <div class="">
                    <ul class="tabs">
                        <li><a href="#tab1"><span class="fas fa-digital-tachograph "></span><span class="tab-text">Matrícula</span></a></li>
                        <li><a href="#tab2"><span class="fas fa-file-alt"></span><span class="fas fa-search"></span><span class="tab-text">Póliza</span></a></li>
                        <li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Operación</span></a></li>
                        <li><a href="#tab4"><span class="fas fa-screwdriver"></span><span class="tab-text">RTM</span></a></li>
                        <li><a href="#tab5"><span class="fas fa-users "></span><span class="tab-text">Terceros</span></a></li>
                        <li><a href="#tab6"><span class="fas fa-route "></span><span class="tab-text">Rutas</span></a></li>
                   </ul>

                    <div class="secciones">
                        <div id="tab1">
                                <table class="table md-7" >
                                <thead class=" encabezadoFormulario text-white " >
                                    <tr>
                                    <th scope="col"># Licencia Transito</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Tipo Registro</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha Creación</th>
                                    <th scope="col">Fecha Modificación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="tab2">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                                    <tr>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Aseguradora</th>
                                    <th scope="col">Número</th>
                                    <th scope="col">Fecha expide</th>
                                    <th scope="col">Fecha inicio</th>
                                    <th scope="col">Fecha vence</th>
                                    <th scope="col">Observación</th>
                                    <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    <td >@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div id="tab3">
                            <table class="table">
                            <thead class=" encabezadoFormulario text-white " >
                                <tr>
                                <th scope="col" rowspan="2"># Tarjeta Operación</th>
                                <th scope="col" colspan="4" style="border:2px solid white !important; text-align:center !important;">Fecha</th>
                                <th scope="col" rowspan="2">Observaciones</th>
                                <th scope="col" rowspan="2">Estado</th>
                                </tr>
                                <tr>
                                <th scope="col">Vigencia Inicia</th>
                                <th scope="col">Vigencia Fin</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                              
                                </tr>
                            </tbody>
                            </table>
                        </div>

                        <div id="tab4">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                            <tr>
                                <th scope="col" rowspan="2"># Certificado</th>
                                <th scope="col" colspan="5" style="border:2px solid white !important; text-align:center !important;">Fecha</th>
                                <th scope="col" rowspan="2">Observaciones</th>
                                <th scope="col" rowspan="2">Estado</th>
                                </tr>
                                <tr>
                                <th scope="col">Expedición</th>
                                <th scope="col">Vigencia Inicia</th>
                                <th scope="col">Vigencia Fin</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>


                        <div id="tab5">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                            <tr>
                                <th scope="col" colspan="4" style="border:2px solid white !important; text-align:center !important;">Fecha</th>
                                <th scope="col" rowspan="2">Observaciones</th>
                                <th scope="col" rowspan="2">Estado</th>
                                </tr>
                                <tr>
                                <th scope="col">Inicio</th>
                                <th scope="col">Fin</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Modificación</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                <td >@mdo</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>


                        <div id="tab6">
                            <table class="table md-7" >
                            <thead class=" encabezadoFormulario text-white " >
                                <tr>
                                <th scope="col">Observaciones</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha Creación</th>
                                <th scope="col">Fecha Modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td >@mdo</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  </div>
</template>

<script>
import axios from 'axios';
import router from '../../routes';

export default {
  name: "registrarVehiculo",
  data: function() {
    return {
      placa:'',
     numeroInterno:'',
     idVehiculoMatricula:'',
     idServicio:'',
     idClase:'',
     idMarca:'',
     idColor:'',
     idCarroceria:'',
     idCombustible:'',
     linea:'',
     modelo:'',
     numeroSerie:'',
     numeroChasis:'',
     numeroMotor:'',
     numeroPuertas:'',
     numeroPasajeros:'',
     observaciones:'',
     estado:'',
     idUsuarioCrea:'',
     idUsuarioModifica:'',
     buttons: {
        create: {
          name: 'Agregar',
            state: false,
        },
      },
    };
  },
  methods:{
    setTercero: function(){
      this.buttons.create.name = 'Agregando ...';
      this.buttons.create.state = true;
      let formData = {
       
        'placa':this.placa,
        'numeroInterno':this.numeroInterno,
        'idVehiculoMatricula':this.idVehiculoMatricula,
        'idServicio':this.idServicio,
        'idClase':this.idClase,
        'idMarca':this.idMarca,
        'idColor':this.idColor,
        'idCarroceria':this.idCarroceria,
        'idCombustible':this.idCombustible,
        'linea':this.linea,
        'modelo':this.modelo,
        'numeroSerie':this.numeroSerie,
        'numeroChasis':this.numeroChasis,
        'numeroMotor':this.numeroMotor,
        'numeroPuertas':this.numeroPuertas,
        'numeroPasajeros':this.numeroPasajeros,
        'observaciones':this.observaciones,
        'estado':this.estado,
        'idUsuarioCrea':this.idUsuarioCrea,
        'idUsuarioModific':this.idUsuarioModifica,
      }
      axios.post('/setVehiculo', formData).then((response) =>{
        this.placa='',
        this.numeroInterno='',
        this.idVehiculoMatricula='',
        this.idServicio='',
        this.idClase='',
        this.idMarca='',
        this.idColor='',
        this.idCarroceria='',
        this.idCombustible='',
        this.linea='',
        this.modelo='',
        this.numeroSerie='',
        this.numeroChasis='',
        this.numeroMotor='',
        this.numeroPuertas='',
        this.numeroPasajeros='',
        this.observaciones='',
        this.estado='',
        this.idUsuarioCrea='',
        this.idUsuarioModifica='',
        swal("OK!", "Vehículo creado exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    }
  }
}
</script>

<style>
.tab-btn {
  padding: 12px 22px;
  background: #ffffff;
  cursor: pointer;
  background:#00031c;
  color: white;
  border:none;
  outline: none;
  margin-top:5%;
  font-family: "Open Sans", sans-serif;
   
}

.buttons-options{
   margin-left:5%;
}
.active {
  background: #c78900;
}

.tab {
  border: 1px solid #ccc;
  padding: 20px;
  background:#F1F1EF;
  min-height:250px;
  min-width:95%;
  margin-top:1%;
  width:90%;
}

.listado{
    margin-top: 3%;
    width:96%;
    margin-left:1%;
}

</style>