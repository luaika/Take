<template>
  <div class="container contaRuta">
     <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Registrar vehículo</h5>
      </div>
      <div class="card cardRutas">
    <form method="POST" v-on:submit.prevent="setVehiculo" >
      <div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="placa">Placa</label>
                        <i class="icofont-card iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="placa" v-model="placa">
                    </div>
                    <div class="col">
                        <label for="idVehiculoMatricula">Matrícula</label>
                        <input type="text" class="form-control inputTeceros" id="idVehiculoMatricula" v-model="idVehiculoMatricula">
                    </div>
                    <div class="col">
                        <label for="idServicio">Servicio</label>
                        <select class="custom-select" v-model="idServicio" required>
                            <option value="0">Seleccionar Servicio</option>
                            <option v-for="idServicio in servicios" :value="idServicio.idServicio" v-text="idServicio.descripcionServicio" ></option>
                        </select>
                     </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="idClase">Clase</label>
                        <select class="custom-select" v-model="idClase" required>
                            <option value="0">Seleccionar Clase</option>
                            <option v-for="idClase in clase" :value="idClase.idClase" v-text="idClase.descripcionClase" ></option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="idMarca">Marca</label>
                        <select class="custom-select" v-model="idMarca" required>
                            <option value="0">Seleccionar Marca</option>
                            <option v-for="idMarca in marca" :value="idMarca.idMarca" v-text="idMarca.descripcionMarca" ></option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="idColor">Color</label>
                        <select class="custom-select" v-model="idColor" required>
                            <option value="0">Seleccionar Color</option>
                            <option v-for="idColor in color" :value="idColor.idColor" v-text="idColor.descripcionColor"  ></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="idCarroceria">Carroceria</label>
                        <select class="custom-select" v-model="idCarroceria" required>
                            <option value="0">Seleccionar Carroceria</option>
                            <option v-for="idCarroceria in carroceria" :value="idCarroceria.idCarroceria" v-text="idCarroceria.descripcionCarroceria" ></option>
                        </select>
                   </div>
                    <div class="col">
                        <label for="idCombustible">Combustible</label>
                        <select class="custom-select" v-model="idCombustible" required>
                            <option value="0">Seleccionar Combustible</option>
                            <option v-for="idCombustible in combustible" :value="idCombustible.idCombustible" v-text="idCombustible.descripcionCombustible" ></option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="linea">Linea</label>
                        <i class="icofont-car-alt-1 iconos"></i>
                        <input type="text" class="form-control inputTeceros" id="linea" v-model="linea">
                    </div>
                            
                </div>
           </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="modelo">Modelo</label>
                        <i class="fas fa-hashtag iconos"></i>
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
    <hr>
   
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
                    <label for="estado" >Estado</label>
                    <select class="custom-select" id="estado" v-model="estado" required>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="numeroInterno">Número Interno</label>
                   <i class="fas fa-hashtag iconos"></i>
                    <input type="text" class="form-control inputTeceros" id="numeroInterno" v-model="numeroInterno">       
                </div>
            </div>
        </div>  
            <br>
                <div  class="btn-width">
                    <button type="button" class="btn botonCancelar botones">Cancelar</button>
                    <button type="submit" class="btn botonAgregar botones" :disabled="buttons.create.state">{{ buttons.create.name }}</button>
                </div>
            
    </form>
    </div>

     <!-- Modal editar y ver-->
   <div class="modal fade " id="exampleModalVer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Vehículo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="POST" v-on:submit.prevent="putVehiculo">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="placa">Placa</label>
                                    <i class="icofont-card iconos"></i>   
                                    <input type="text" class="form-control inputTeceros" id="placa" v-model="data_edit.placa">
                                </div>
                                <div class="col">
                                    <label for="idVehiculoMatricula">Matrícula</label>
                                    <input type="text" class="form-control inputTeceros" id="idVehiculoMatricula" v-model="data_edit.idVehiculoMatricula">
                                </div>
                                <div class="col">
                                    <label for="idServicio">Servicio</label>
                                    <select class="custom-select" v-model="data_edit.idServicio" required>
                                        <option value="0">Seleccionar Servicio</option>
                                        <option v-for="idServicio in servicios" :value="idServicio.idServicio" v-text="idServicio.descripcionServicio" ></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="idClase">Clase</label>
                                    <select class="custom-select" v-model="data_edit.idClase" required>
                                        <option value="0">Seleccionar Clase</option>
                                        <option v-for="idClase in clase" :value="idClase.idClase" v-text="idClase.descripcionClase" ></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="idMarca">Marca</label>
                                    <select class="custom-select" v-model="data_edit.idMarca" required>
                                        <option value="0">Seleccionar Marca</option>
                                        <option v-for="idMarca in marca" :value="idMarca.idMarca" v-text="idMarca.descripcionMarca" ></option>
                                    </select>  
                               </div>
                                <div class="col">
                                    <label for="idColor">Color</label>
                                    <select class="custom-select" v-model="data_edit.idColor" required>
                                        <option value="0">Seleccionar Color</option>
                                        <option v-for="idColor in color" :value="idColor.idColor" v-text="idColor.descripcionColor" ></option>
                                    </select>
                             </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="idCarroceria">Carroceria</label>
                                        <select class="custom-select" v-model="data_edit.idCarroceria" required>
                                            <option value="0">Seleccionar Carroceria</option>
                                            <option v-for="idCarroceria in carroceria" :value="idCarroceria.idCarroceria" v-text="idCarroceria.descripcionCarroceria" ></option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="idCombustible">Combustible</label>
                                        <select class="custom-select" v-model="data_edit.idCombustible" required>
                                            <option value="0">Seleccionar Combustible</option>
                                            <option v-for="idCombustible in combustible" :value="idCombustible.idCombustible" v-text="idCombustible.descripcionCombustible" ></option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="linea">Linea</label>
                                        <i class="icofont-car-alt-1 iconos"></i>
                                        <input type="text" class="form-control inputTeceros" id="linea" v-model="data_edit.linea">
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label for="modelo">Modelo</label>
                                    <i class="fas fa-hashtag iconos"></i>
                                    <input type="number" class="form-control inputTeceros" id="modelo" v-model="data_edit.modelo">                    
                                </div>
                                <div class="col">
                                    <label for="numeroSerie">Número de serie</label>
                                    <i class="fas fa-hashtag iconos"></i>
                                    <input type="number" class="form-control inputTeceros" id="numeroSerie" v-model="data_edit.numeroSerie">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="numeroChasis">Número de chasis</label>
                                    <i class="fas fa-hashtag iconos"></i>
                                    <input type="number" class="form-control inputTeceros" id="numeroChasis" v-model="data_edit.numeroChasis">
                                </div>
                                <div class="col">
                                    <label for="numeroMotor">Número de motor</label>
                                    <i class="fas fa-hashtag iconos"></i>
                                    <input type="number" class="form-control inputTeceros" id="numeroMotor" v-model="data_edit.numeroMotor">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                                <div class="col">
                                    <label for="numeroPuertas">Número de puertas</label>
                                    <i class="fas fa-hashtag iconos"></i>
                                    <input type="number" class="form-control inputTeceros" id="numeroPuertas" v-model="data_edit.numeroPuertas">
                                </div>
                                        
                                <div class="col">
                                <label for="numeroPasajeros">Número de pasajeros</label>
                                    <i class="fas fa-users iconos"></i>
                                    <input type="number" class="form-control inputTeceros" id="numeroPasajeros" v-model="data_edit.numeroPasajeros">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="observaciones">Observaciones</label>
                                    <i class="fas fa-hand-point-right iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="observaciones" v-model="data_edit.observaciones">              
                                </div>
                                <div class="col">
                                    <label for="estado" >Estado</label>
                                    <select class="custom-select" id="estado" v-model="data_edit.estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="numeroInterno">Número Interno</label>
                                    <i class="fas fa-hashtag iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="numeroInterno" v-model="data_edit.numeroInterno">       
                                </div>
                            </div>
                        </div>
                        <div v-if="show_alert.edit.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ show_alert.edit.messaje }}
                        </div>
                        <div v-if="editar" class="modal-footer">
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

    <!--Modal Matrícula --->
    <div class="modal fade " id="exampleModalMatricula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Matrícula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Licencia de transito">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Estado de matrícula">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <input type="date" class="form-control" placeholder="Licencia de transito">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Tipo de registro">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Observaciones">
                                </div>
                            </div>
                        </div>
                        <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ show_alert.create.messaje }}
                        </div>
                        <div class="modal-footer centrar">
                                <button class="btn btn-warning botonAsctualizar" :disabled="buttons.create.state">
                                    <i class="icofont-ui-add"></i>
                                    {{ buttons.create.name }}
                                    <i v-if="buttons.create.state" class="fa fa-spinner fa-spin"></i>
                                </button>
                        </div>
                    </form>
                    <div class="container-fluid">
                        <vue-bootstrap4-table :rows="vehiculos" :columns="columnMatricula"  :config = "config" thead-class="green-bg bg-dark text-white">
                            <templete slot="delete" slot-scope="props">
                                <button type="button" class="btn btn-danger"   v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                                <i class="icofont-ui-delete"></i>
                                </button>
                            </templete>
                        </vue-bootstrap4-table>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <!-- Modal póliza -->
   <div class="modal fade " id="exampleModalPoliza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Póliza</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="setVehiculoPoliza">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Poliza</label>
                                    <select class="custom-select" v-model="data_poliza.idPoliza" required>
                                        <option value="0">Seleccionar Tipo de Póliza</option>
                                        <option v-for="idPoliza in tiposdePolizas" :value="idPoliza.idPoliza" v-text="idPoliza.descripcion"></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="estado" >Estado</label>
                                    <select class="custom-select" id="estado" v-model="data_poliza.estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>                                
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col">
                                 <label>Tercero</label>
                                    <select class="custom-select" v-model="data_poliza.idTercero" required>
                                        <option value="0">Seleccionar un Tercero</option>
                                        <option v-for="idTercero in terceros" :value="idTercero.idTercero" v-text="idTercero.numeroIdentificacion" ></option>
                                    </select>
                                </div>
                                <div class="col">
                                <label>Número de póliza</label>
                                <input type="number" class="form-control" v-model="data_poliza.numeroPoliza">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Fecha de Inicio de vigencia</label>
                                    <input type="date" class="form-control" v-model="data_poliza.fechaVigenciaInicio">
                                </div>
                                <div class="col">
                                    <label>Fecha de Finalización de vigencia</label>
                                    <input type="date" class="form-control"  v-model="data_poliza.fechaVigenciaFin" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control"  v-model="data_poliza.observaciones">
                                </div>
                                <div class="col">
                                    <label>Fecha de expedición</label>
                                    <input type="date" class="form-control"  v-model="data_poliza.fechaExpedicion">
                                </div>
                            </div>
                        </div>
    
                        <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ show_alert.create.messaje }}
                        </div>
                        <div class="modal-footer centrar">
                                <button class="btn btn-warning botonAsctualizar" :disabled="buttons.create.state">
                                    <i class="icofont-ui-add"></i>
                                    {{ buttons.create.name }}
                                    <i v-if="buttons.create.state" class="fa fa-spinner fa-spin"></i>
                                </button>
                        </div>
                    </form>
                    <div class="container-fluid">
                        <vue-bootstrap4-table :rows="polizasList" :columns="columnPoliza"  :config = "config" thead-class="green-bg bg-dark text-white">
                            <templete slot="estado" slot-scope="props">
                                <div v-if="props.row.estado === 1">
                                    Activo
                                </div>
                                <div v-else-if="props.row.estado === 0 ">
                                    Inactiva
                                </div>
                            </templete>
                            <templete slot="delete" slot-scope="props">
                                <button type="button" class="btn btn-danger"   v-on:click="deletePolizaVehiculo(props.row.idVehiculoPoliza)" v-bind:idVehiculoPoliza="props.row.idVehiculoPoliza">
                                <i class="icofont-ui-delete"></i>
                                </button>
                            </templete>
                        </vue-bootstrap4-table>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <!-- Modal operacipon-->
   <div class="modal fade " id="exampleModalOperacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Operación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form method="POST" v-on:submit.prevent="setVehiculoOperacion">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Número de tarjeta operación</label>
                                    <input type="text" class="form-control" v-model="data_operacion.numeroTarjetaOperacion">
                                </div>
                                <div class="col">
                                    <label for="estado" >Estado</label>
                                    <select class="custom-select" id="estado" v-model="data_operacion.estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>                                
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tercero</label>
                                    <select class="custom-select" v-model="data_operacion.idTercero" required>
                                        <option value="0">Seleccionar un Tercero</option>
                                        <option v-for="idTercero in terceros" :value="idTercero.idTercero" v-text="idTercero.numeroIdentificacion" ></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Fecha de expedición</label>
                                    <input type="date" class="form-control" v-model="data_operacion.fechaExpedicion" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Fecha de Inicio de vigencia</label>
                                    <input type="date" class="form-control" v-model="data_operacion.fechaVigenciaInicia">
                                </div>
                                <div class="col">
                                    <label>Fecha de Finalización de vigencia</label>
                                    <input type="date" class="form-control" v-model="data_operacion.fechaVigenciaFin">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control" v-model="data_operacion.observaciones">
                                </div>
                            </div>
                        </div>
    
                        <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ show_alert.create.messaje }}
                        </div>
                        <div class="modal-footer centrar">
                                <button class="btn btn-warning botonAsctualizar" :disabled="buttons.create.state">
                                    <i class="icofont-ui-add"></i>
                                    {{ buttons.create.name }}
                                    <i v-if="buttons.create.state" class="fa fa-spinner fa-spin"></i>
                                </button>
                        </div>
                    </form>
                    <div class="container-fluid">
                        <vue-bootstrap4-table :rows="operacionesList" :columns="columnOperacion"  :config = "config" thead-class="green-bg bg-dark text-white">
                            <templete slot="estado" slot-scope="props">
                                <div v-if="props.row.estado === 1">
                                    Activo
                                </div>
                                <div v-else-if="props.row.estado === 0 ">
                                    Inactivo
                                </div>
                            </templete>
                            <templete slot="delete" slot-scope="props">
                                <button type="button" class="btn btn-danger"  v-on:click="deleteOperacionVehiculo(props.row.idVehiculoOperacion)" v-bind:idVehiculoOperacion="props.row.idVehiculoOperacion">
                                <i class="icofont-ui-delete"></i>
                                </button>
                            </templete>
                        </vue-bootstrap4-table>
                    </div> 
                </div>
            </div>
        </div>
   </div>

   <!-- modal RTM -->
   <div class="modal fade " id="exampleModalRtm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">RTM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="setVehiculoRtm">
                         <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Número de certificado</label>
                                    <input type="text" class="form-control" placeholder="Certificado" v-model="data_rtm.numeroCertificado">
                                </div>
                                <div class="col">
                                    <label for="estado" >Estado</label>
                                    <select class="custom-select" id="estado" v-model="data_rtm.estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>                                
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tercero</label>
                                    <select class="custom-select" v-model="data_rtm.idTercero" required>
                                        <option value="0">Seleccionar un Tercero</option>
                                        <option v-for="idTercero in terceros" :value="idTercero.idTercero" v-text="idTercero.numeroIdentificacion"  ></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Fecha de expedición</label>
                                    <input type="date" class="form-control" v-model="data_rtm.fechaExpedicion">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Fecha de Inicio de vigencia</label>
                                    <input type="date" class="form-control" v-model="data_rtm.fechaVigenciaInicia">
                                </div>
                                <div class="col">
                                    <label>Fecha de Finalización de vigencia</label>
                                    <input type="date" class="form-control" v-model="data_rtm.fechaVigenciaFin" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control" v-model="data_rtm.observaciones" >
                                </div>
                            </div>
                        </div>
                        <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ show_alert.create.messaje }}
                        </div>
                        <div class="modal-footer centrar">
                                <button class="btn btn-warning botonAsctualizar" :disabled="buttons.create.state">
                                    <i class="icofont-ui-add"></i>
                                    {{ buttons.create.name }}
                                    <i v-if="buttons.create.state" class="fa fa-spinner fa-spin"></i>
                                </button>
                        </div>
                    </form>
                    <div class="container-fluid">
                        <vue-bootstrap4-table :rows="rtmList" :columns="columnRtm"  :config = "config" thead-class="green-bg bg-dark text-white">
                           <templete slot="estado" slot-scope="props">
                                <div v-if="props.row.estado === 1">
                                    Activo
                                </div>
                                <div v-else-if="props.row.estado === 0 ">
                                    Inactiva
                                </div>
                            </templete>
                           <templete slot="delete" slot-scope="props">
                                <button type="button" class="btn btn-danger"   v-on:click="deleteRtmVehiculo(props.row.idVehiculoRTM)" v-bind:idVehiculoRTM="props.row.idVehiculoRTM">
                                <i class="icofont-ui-delete"></i>
                                </button>
                            </templete>
                        </vue-bootstrap4-table>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <!-- Modal Terceros -->
   <div class="modal fade " id="exampleModalTercero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Tercero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="setVehiculoTercero">
                        
                         <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tercero</label>
                                    <select class="custom-select" v-model="data_tercero.idTercero" required>
                                        <option value="0">Seleccionar un Tercero</option>
                                        <option v-for="idTercero in terceros" :value="idTercero.idTercero" v-text="idTercero.numeroIdentificacion" ></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="estado" >Estado</label>
                                    <select class="custom-select" id="estado" v-model="data_tercero.estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>                                
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Inicio</label>
                                    <input type="date" class="form-control" v-model="data_tercero.fechaInicia">
                                </div>
                                <div class="col">
                                    <label>Fin</label>
                                    <input type="date" class="form-control" v-model="data_tercero.fechaFin" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control" v-model="data_tercero.observaciones">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer centrar">
                                <button class="btn btn-warning botonAsctualizar" :disabled="buttons.create.state">
                                    <i class="icofont-ui-add"></i>
                                    {{ buttons.create.name }}
                                    <i v-if="buttons.create.state" class="fa fa-spinner fa-spin"></i>
                                </button>
                        </div>
                    </form>
                    <div class="container-fluid">
                        <vue-bootstrap4-table :rows="terceroList" :columns="columnTercero"  :config = "config" thead-class="green-bg bg-dark text-white">
                             <templete slot="estado" slot-scope="props">
                                <div v-if="props.row.estado === 1">
                                    Activo
                                </div>
                                <div v-else-if="props.row.estado === 0 ">
                                    Inactiva
                                </div>
                            </templete>
                             <templete slot="delete" slot-scope="props">
                                <button type="button" class="btn btn-danger"   v-on:click="deleteTerceroVehiculo(props.row.idVehiculoTercero)" v-bind:idVehiculoTercero="props.row.idVehiculoTercero">
                                <i class="icofont-ui-delete"></i>
                                </button>
                            </templete>
                        </vue-bootstrap4-table>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Modal Ruta -->
   <div class="modal fade " id="exampleModalRuta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Ruta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" v-on:submit.prevent="setVehiculoRuta">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Ruta</label>
                                    <select class="custom-select" v-model="data_ruta.idRuta" required>
                                        <option value="0">Seleccionar Ruta</option>
                                        <option v-for="idRuta in rutas" :value="idRuta.idRuta" v-text="idRuta.descripcion"  ></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="estado" >Estado</label>
                                    <select class="custom-select" id="estado" v-model="data_ruta.estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>                                
                                </div>
                                <div class="col">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control" placeholder="Observación" v-model="data_ruta.observaciones">
                                </div>
                            </div>
                        </div>
                        <div v-if="show_alert.create.state" class="alert alert-danger alert-dismissible fade show"
                                role="alert">
                                {{ show_alert.create.messaje }}
                        </div>
                        <div class="modal-footer centrar">
                                <button class="btn btn-warning botonAsctualizar" :disabled="buttons.create.state">
                                    <i class="icofont-ui-add"></i>
                                    {{ buttons.create.name }}
                                    <i v-if="buttons.create.state" class="fa fa-spinner fa-spin"></i>
                                </button>
                        </div>
                    </form>
                    <div class="container-fluid">
                        <vue-bootstrap4-table :rows="rutasList" :columns="columnRuta"  :config = "config" thead-class="green-bg bg-dark text-white">
                            <templete slot="estado" slot-scope="props">
                                <div v-if="props.row.estado === 1">
                                    Activo
                                </div>
                                <div v-else-if="props.row.estado === 0 ">
                                    Inactiva
                                </div>
                            </templete>
                            <templete slot="delete" slot-scope="props">
                                <button type="button" class="btn btn-danger"   v-on:click="deleteRutaVehiculo(props.row.idVehiculoRuta)" v-bind:idVehiculoRuta="props.row.idVehiculoRuta">
                                <i class="icofont-ui-delete"></i>
                                </button>
                            </templete>
                        </vue-bootstrap4-table>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Listar vehículos -->
    <br>
     <div class="container-fluid">
            <vue-bootstrap4-table :rows="vehiculos" :columns="columns"  :config = "config" thead-class="green-bg bg-dark text-white">
                <templete slot="edit" slot-scope="props">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                        <i class="icofont-edit"></i>
                    </button>
                </templete>
                <templete slot="ver" slot-scope="props">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,1)" v-bind:idVehiculo="props.row.idVehiculo">
                        <i class="icofont-eye-alt"></i>
                    </button>
                </templete>
                <templete slot="delete" slot-scope="props">
                    <button type="button" class="btn btn-danger"   v-on:click="deleteVehiculo(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-ui-delete"></i>
                    </button>
                </templete>

                <templete slot="estado" slot-scope="props">
                    
                    <div v-if="props.row.estado === 1">
                        <toggle-button :value="true" :width="72" @change="stateTercero(props.row.idVehiculo, 0)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                    <div v-else-if="props.row.estado === 0 ">
                        <toggle-button :value="false" :width="72" @change="stateTercero(props.row.idVehiculo, 1)" :labels="{checked: 'Activo', unchecked: 'Inactive'}"/>
                    </div>
                </templete>
                <templete slot="matricula" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal" data-toggle="modal" data-target="#exampleModalMatricula" v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                      <i class="icofont-card"></i>
                    </button>
                </templete>
                <templete slot="poliza" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalPoliza" v-on:click="verPoliza(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-list"></i>
                    </button>
                </templete>
                <templete slot="operacion" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalOperacion" v-on:click="verOperacion(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                     <i class="icofont-license"></i>
                    </button>
                </templete>
                <templete slot="rtm" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalRtm" v-on:click="verRtm(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-mail"></i>
                    </button>
                </templete>
                <templete slot="terceros" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalTercero" v-on:click="verTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-users-alt-2"></i>
                    </button>
                </templete>
                <templete slot="ruta" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalRuta" v-on:click="verRuta(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                      <i class="icofont-map-pins"></i>
                    </button>
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
  name: "registrarVehiculo",
  data: function() {
    return {
     placa:'',
     numeroInterno:'',
     idVehiculoMatricula:'',
     idServicio:0,
     idClase:0,
     idMarca:0,
     idColor:0,
     idCarroceria:0,
     idCombustible:0,
     linea:'',
     idRuta:'',
     modelo:'',
     numeroSerie:'',
     numeroChasis:'',
     numeroMotor:'',
     numeroPuertas:'',
     numeroPasajeros:'',
     observaciones:'',
     estado:1,
     idUsuarioCrea:1,
     idUsuarioModifica:1,
     idPoliza:0,
     vehiculos:[],
     color:[],
     servicios:[],
     marca:[],
     clase:[],
     carroceria:[],
     combustible:[],
     tiposdePolizas:[],
     terceros:[],
     data:[],
     rutas:[],
     rutasList:[],
     polizasList:[],
     operacionesList:[],
     rtmList:[],
     terceroList:[],
     editar:false,
      config: {
                pagination: true, // default true
                pagination_info: true, // default true
                num_of_visibile_pagination_buttons: 7, // default 5
                per_page: 6, // default 10
                per_page_options:  [6,  10,  20,  30],
                //highlight_row_hover_color:"blue", over del listado
                filas_seleccionables: true,
                card_title: "Registros",
                show_refresh_button: false,
                show_reset_button: false,
                global_search: {
                        placeholder: "Buscar ",
                },
            },
      columns: [
                {
                    label: "Placa",
                    name: "placa",
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
                {
                    label: "Matrícula",
                    name: "matricula",
                    sort: false,
                },
                {
                    label: "Póliza",
                    name: "poliza",
                    sort: false,
                },
                {
                    label: "Operación",
                    name: "operacion",
                    sort: false,
                },
                {
                    label: "RTM",
                    name: "rtm",
                    sort: false,
                },
                {
                    label: "Terceros",
                    name: "terceros",
                    sort: false,
                },
                {
                    label: "Rutas",
                    name: "ruta",
                    sort: false,
                },
            ],
    columnMatricula:[
        {
            label: "Licencia",
            name: "licencia",
            sort: false,
        },
        {
            label: "Estado",
            name: "estado",
            sort: false,
        },
        {
            label: "Fecha de registro",
            name: "fecha",
            sort: false,
        },
        {
            label: "Tipo de registro",
            name: "tipo",
            sort: false,
        },
        {
            label: "Observaciones",
            name: "observacion",
            sort: false,
        },
        {
            label: "Eliminar",
            name: "delete",
            sort: false,
        },
    ],
    columnPoliza:[
        {
            label: "Poliza",
            name: "nombrePoliza",
            sort: false,
        },
        {
            label: "Estado",
            name: "estado",
            sort: false,
        },
        {
            label: "Tercero",
            name: "numeroIdentificacion",
            sort: false,
        },
        {
            label: "Número Póliza",
            name: "numeroPoliza",
            sort: false,
        },
        {
            label:'Vigencia Inicio',
            name: "fechaVigenciaInicio",
            sort: false,
        },
        {
            label: "Vigencia Fin",
            name: "fechaVegenciaFin",
            sort: false,
        },
        {
            label: "Expedición",
            name: "fechaExpedicion",
            sort: false,
        },
        {
            label: "Observaciones",
            name: "observaciones",
            sort: false,
        },
        {
            label: "Eliminar",
            name: "delete",
            sort: false,
        },
    ],
    columnOperacion:[
        {
            label: "# Tarjeta Operación",
            name: "numeroTarjetaOperacion",
            sort: false,
        },
        {
            label: "Estado",
            name: "estado",
            sort: false,
        },
        {
            label: "Tercero",
            name: "numeroIdentificacion",
            sort: false,
        },
        
        {
            label:'Vigencia Inicio',
            name: "fechaVigenciaInicia",
            sort: false,
        },
        {
            label: "Vigencia Fin",
            name: "fechaVigenciaFin",
            sort: false,
        },
        {
            label: "Expedición",
            name: "fechaExpedicion",
            sort: false,
        },
        {
            label: "Observaciones",
            name: "observaciones",
            sort: false,
        },
        {
            label: "Eliminar",
            name: "delete",
            sort: false,
        },
    ],
    columnRtm:[
        {
            label: "# Certificado",
            name: "numeroCertificado",
            sort: false,
        },
        {
            label: "Estado",
            name: "estado",
            sort: false,
        },
        {
            label: "Tercero",
            name: "numeroIdentificacion",
            sort: false,
        },
        {
            label:'Vigencia Inicio',
            name: "fechaVigenciaInicia",
            sort: false,
        },
        {
            label: "Vigencia Fin",
            name: "fechaVigenciaFin",
            sort: false,
        },
        {
            label: "Expedición",
            name: "fechaExpedicion",
            sort: false,
        },
        {
            label: "Observaciones",
            name: "observaciones",
            sort: false,
        },
        {
            label: "Eliminar",
            name: "delete",
            sort: false,
        },
    ],
    columnTercero:[
        
        {
            label: "Tercero",
            name: "numeroIdentificacion",
            sort: false,
        },
        {
            label: "Estado",
            name: "estado",
            sort: false,
        },
        {
            label:'Inicio',
            name: "fechaInicia",
            sort: false,
        },
        {
            label: "Fin",
            name: "fechaFin",
            sort: false,
        },
       {
            label: "Observaciones",
            name: "observaciones",
            sort: false,
        },
        
        {
            label: "Eliminar",
            name: "delete",
            sort: false,
        },
    ],
    columnRuta:[
        
        {
            label: "Ruta",
            name: "nombreRuta",
            sort: false,
        },
        {
            label: "Estado",
            name: "estado",
            sort: false,
        },
        {
            label: "Observaciones",
            name: "observaciones",
            sort: false,
        },
        {
            label: "Eliminar",
            name: "delete",
            sort: false,
        },
    ],
    
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
     data_edit:{
                show: true,
                contenedor: false ,
                placa:'',
                numeroInterno:'',
                idVehiculoMatricula:'',
                idServicio:0,
                descripcionServicio:0,
                descripcionServicio:'',
                idClase:0,
                descripcionClase:0,
                idMarca:0,
                descripcionMarca:0,
                idColor:0,
                descripcionColor:0,
                idCarroceria:0,
                descripcionCarroceria:0,
                idCombustible:0,
                descripcionCombustible:0,
                linea:'',
                modelo:'',
                numeroSerie:'',
                numeroChasis:'',
                numeroMotor:'',
                numeroPuertas:'',
                numeroPasajeros:'',
                observaciones:'',
                estado:'',
                idUsuarioCrea:1,
                idUsuarioModifica:1,
            },
     data_poliza:{
         idVehiculo:'',
         idPoliza:0,
         idTercero:0,
         numeroPoliza:'',
         fechaExpedicion:'',
         fechaVigenciaInicio:'',
         fechaVigenciaFin:'',
         observaciones:'',
         estado:1,
         idUsuarioCrea:1,
         idUsuarioModifica:1,
     },
     data_operacion:{
        idVehiculo:'',
        idTercero:0,
        numeroTarjetaOperacion:'',
        fechaExpedicion:'',
        fechaVigenciaInicia:'',
        fechaVigenciaFin:'',
        observaciones:'',
        estado:1,
        idUsuarioCrea:1,
        idUsuarioModifica:1,

    },
     data_ruta:{
         idVehiculo:'',
         idRuta:0,
         estado:1,
         descripcion:'',
         observaciones:'',
         idUsuarioCrea:1,
         idUsuarioModifica:1,
     },
     data_rtm:{
         idVehiculo:'',
         idTercero:0,
         numeroCertificado:'',
         estado:1,
         fechaExpedicion:'',
         fechaVigenciaInicia:'',
         fechaVigenciaFin:'',
         observaciones:'',
         idUsuarioCrea:1,
         idUsuarioModifica:1,
     },
     data_tercero:{
         idVehiculo:'',
         idTercero:0,
         estado:1,
         fechaInicia:'',
         fechaFin:'',
         observaciones:'',
         idUsuarioCrea:1,
         idUsuarioModifica:1,
     },
    };
  },
  components:{
        VueBootstrap4Table
    },
  mounted(){
      this.getColor();
      this.getMarca();
      this.getServicio();
      this.getClase();
      this.getCarroceria();
      this.getCombustible();
      this.getVehiculo();
      this.getTiposPoliza();
      this.getTercero();
      this.getRutas();
    },
  methods:{
    //INSERTAR
    //insertar vehiculo
    setVehiculo: function(){
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
        'idUsuarioModifica':this.idUsuarioModifica
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
        this.idUsuarioCrea=1,
        this.idUsuarioModifica=1,
        this.getVehiculo();
        swal("OK!", "Vehículo creado exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
    
    //insertar Ruta vehiculo
    setVehiculoRuta: function(){
      this.buttons.create.name = 'Agregando ...';
      this.buttons.create.state = true;
      let formData = {
        'idVehiculo':this.data_ruta.idVehiculo,
        'idRuta':this.data_ruta.idRuta,
        'observaciones':this.data_ruta.observaciones,
        'estado':this.data_ruta.estado,
        'idUsuarioCrea':this.data_ruta.idUsuarioCrea,
        'idUsuarioModifica':this.data_ruta.idUsuarioModifica
      }
      axios.post('/vehiculoRuta', formData).then((response) =>{
        
        
        this.data_ruta.idRuta = 0,
        this.data_ruta.observaciones = ''
        this.data_ruta.estado = 1
        this.verRuta(this.data_ruta.idVehiculo);
        swal("OK!", "Ruta agregada exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
    
    //insertar poliza
    setVehiculoPoliza: function(){
      this.buttons.create.name = 'Agregando ...';
      this.buttons.create.state = true;
      let formData = {

        'idVehiculo':this.data_poliza.idVehiculo,
        'idTercero':this.data_poliza.idTercero,
        'idPoliza':this.data_poliza.idPoliza,
        'numeroPoliza':this.data_poliza.numeroPoliza,
        'estado':this.data_poliza.estado,
        'fechaExpedicion':this.data_poliza.fechaExpedicion,
        'observaciones':this.data_poliza.observaciones,
        'fechaVigenciaInicio':this.data_poliza.fechaVigenciaInicio,
        'fechaVegenciaFin':this.data_poliza.fechaVigenciaFin,
        'idUsuarioCrea':this.data_poliza.idUsuarioCrea,
        'idUsuarioModifica':this.data_poliza.idUsuarioModifica
      }
      axios.post('/vehiculoPoliza', formData).then((response) =>{
        this.data_poliza.idTercero = 0,
        this.data_poliza.idPoliza = 0,
        this.data_poliza.numeroPoliza='',
        this.data_poliza.observaciones = '',
        this.data_poliza.fechaExpedicion='',
        this.data_poliza.fechaVigenciaInicio='',
        this.data_poliza.fechaVigenciaFin='',
        this.data_poliza.estado = 1
        this.verPoliza(this.data_poliza.idVehiculo);
        swal("OK!", "Ruta agregada exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
    
    //insertar operacion
    setVehiculoOperacion: function(){
      this.buttons.create.name = 'Agregando ...';
      this.buttons.create.state = true;
      let formData = {

        'idVehiculo':this.data_operacion.idVehiculo,
        'idTercero':this.data_operacion.idTercero,
        'numeroTarjetaOperacion':this.data_operacion.numeroTarjetaOperacion,
        'fechaExpedicion':this.data_operacion.fechaExpedicion,
        'estado':this.data_operacion.estado,
        'fechaExpedicion':this.data_operacion.fechaExpedicion,
        'observaciones':this.data_operacion.observaciones,
        'fechaVigenciaInicia':this.data_operacion.fechaVigenciaInicia,
        'fechaVigenciaFin':this.data_operacion.fechaVigenciaFin,
        'idUsuarioCrea':this.data_operacion.idUsuarioCrea,
        'idUsuarioModifica':this.data_operacion.idUsuarioModifica
      }
      axios.post('/vehiculoOperacion', formData).then((response) =>{
        this.data_operacion.idTercero = 0,
        this.data_operacion.numeroTarjetaOperacion='',
        this.data_operacion.observaciones = '',
        this.data_operacion.fechaExpedicion='',
        this.data_operacion.fechaVigenciaInicia='',
        this.data_operacion.fechaVigenciaFin='',
        this.data_operacion.estado = 1
        this.verOperacion(this.data_operacion.idVehiculo);
        swal("OK!", "Ruta agregada exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
    
    //insertar RTM
    setVehiculoRtm: function(){
      this.buttons.create.name = 'Agregando ...';
      this.buttons.create.state = true;
      let formData = {

        'idVehiculo':this.data_rtm.idVehiculo,
        'idTercero':this.data_rtm.idTercero,
        'numeroCertificado':this.data_rtm.numeroCertificado,
        'fechaExpedicion':this.data_rtm.fechaExpedicion,
        'estado':this.data_rtm.estado,
        'fechaExpedicion':this.data_rtm.fechaExpedicion,
        'observaciones':this.data_rtm.observaciones,
        'fechaVigenciaInicia':this.data_rtm.fechaVigenciaInicia,
        'fechaVigenciaFin':this.data_rtm.fechaVigenciaFin,
        'idUsuarioCrea':this.data_rtm.idUsuarioCrea,
        'idUsuarioModifica':this.data_rtm.idUsuarioModifica
      }
      axios.post('/vehiculoRtm', formData).then((response) =>{
        this.data_rtm.idTercero = 0,
        this.data_rtm.numeroCertificado='',
        this.data_rtm.observaciones = '',
        this.data_rtm.fechaExpedicion='',
        this.data_rtm.fechaVigenciaInicia='',
        this.data_rtm.fechaVigenciaFin='',
        this.data_rtm.estado = 1
        this.verRtm(this.data_rtm.idVehiculo);
        swal("OK!", "Rtm agregada exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
    
    //insertar Tercero
    setVehiculoTercero: function(){
      this.buttons.create.name = 'Agregando ...';
      this.buttons.create.state = true;
      let formData = {
        'idVehiculo':this.data_tercero.idVehiculo,
        'idTercero':this.data_tercero.idTercero,
        'estado':this.data_tercero.estado,
        'observaciones':this.data_tercero.observaciones,
        'fechaInicia':this.data_tercero.fechaInicia,
        'fechaFin':this.data_tercero.fechaFin,
        'idUsuarioCrea':this.data_tercero.idUsuarioCrea,
        'idUsuarioModifica':this.data_tercero.idUsuarioModifica
      }
      axios.post('/vehiculoTercero', formData).then((response) =>{
        this.data_tercero.idTercero = 0,
        this.data_tercero.observaciones = '',
        this.data_tercero.fechaInicia='',
        this.data_tercero.fechaFin='',
        this.data_tercero.estado = 1
        this.verTercero(this.data_tercero.idVehiculo);
        swal("OK!", "Tercero agregada exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
    
    //LISTAR
    //listar vehículos
    getVehiculo:function(){
     axios.get('/vehiculo-resource').then((response) => {
                if (response.data.length > 0) {
                    this.vehiculos  = response.data;
                } else {
                    this.message = 'No hay registro de vehículos!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
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
   //listar color
   getColor:function (){
       axios.get('/color-resource').then((response) => {
                if (response.data.length > 0) {
                    this.color  = response.data;
                } 
            }).catch((error) => {
                console.log(error.response);
            });
   },

   //listar servicio
   getServicio: function(){
       axios.get('/servicio-resource').then((response) => {
            if (response.data.length > 0) {
                this.servicios  = response.data;
            } 
        }).catch((error) => {
                console.log(error.response);
        });
   },

   //listar marca
   getMarca: function(){
      axios.get('/marca-resource').then((response) => {
            if (response.data.length > 0) {
                this.marca  = response.data;
            } 
        }).catch((error) => {
            console.log(error.response);
        }); 
   },

   //listar clase
   getClase: function(){
       axios.get('/clase-resource').then((response) => {
            if (response.data.length > 0) {
                this.clase  = response.data;
            } 
        }).catch((error) => {
            console.log(error.response);
        });
   },
   //listar carroceria
   getCarroceria: function(){
       axios.get('/carroceria-resource').then((response) => {
            if (response.data.length > 0) {
                this.carroceria  = response.data;
            } 
        }).catch((error) => {
            console.log(error.response);
        });
   },

   //listar combustible
   getCombustible: function(){
       axios.get('/combustible-resource').then((response) => {
            if (response.data.length > 0) {
                this.combustible  = response.data;
            } 
        }).catch((error) => {
            console.log(error.response);
        });
   },

   //listar tipos de polizas
   getTiposPoliza: function(){
       axios.get('/poliza-resource?Q=0').then((response) => {
            if (response.data.length > 0) {
                this.tiposdePolizas  = response.data;
            } 
        }).catch((error) => {
            console.log(error.response);
        });
   },
   

    //Listar Rutas
    getRutas: function(){
        axios.get('/rutas-resource?Q=0').then( (response)  => {
           if (response.data.length > 0) {
                this.rutas  = response.data;
            } else {
                this.message = 'No hay registro de tutas!!!';
            }
        }).catch((error) => {
                console.log(error.response);
        });
    },

   
   //ver vehiculo
    verVehiculo: function (idVehiculo,funcion) {
     
            if(funcion == 0){
                this.editar = true;
            }else{
                 this.editar = false;
            };
            this.data_edit.idVehiculo = idVehiculo;
            axios.get('/vehiculo-resource/'+idVehiculo+'/edit').then((response) => {
                this.data_edit.contenedor= true;
                this.data_edit.show= false;
                this.data_edit.placa = response.data[0].placa;
                this.data_edit.numeroInterno = response.data[0].numeroInterno;
                this.data_edit.idVehiculoMatricula = response.data[0].idVehiculoMatricula;
                this.data_edit.idServicio = response.data[0].idServicio;
                this.data_edit.descripcionServicio = response.data[0].descripcionServicio;
                this.data_edit.idClase = response.data[0].idClase;
                this.data_edit.descripcionClase = response.data[0].descripcionClase;
                this.data_edit.idMarca = response.data[0].idMarca;
                this.data_edit.descripcionMarca = response.data[0].descripcionMarca;
                this.data_edit.idColor = response.data[0].idColor;
                this.data_edit.descripcionColor = response.data[0].descripcionColor;
                this.data_edit.idCarroceria = response.data[0].idCarroceria;
                this.data_edit.descripcionCarroceria = response.data[0].descripcionCarroceria;
                this.data_edit.idCombustible = response.data[0].idCombustible;
                this.data_edit.descripcionCombustible = response.data[0].descripcionCombustible;
                this.data_edit.linea = response.data[0].linea;
                this.data_edit.modelo = response.data[0].modelo;
                this.data_edit.numeroSerie = response.data[0].numeroSerie;
                this.data_edit.numeroChasis = response.data[0].numeroChasis;
                this.data_edit.numeroMotor = response.data[0].numeroMotor;
                this.data_edit.numeroPuertas = response.data[0].numeroPuertas;
                this.data_edit.numeroPasajeros = response.data[0].numeroPasajeros;
                this.data_edit.observaciones = response.data[0].observaciones;
                this.data_edit.estado = response.data[0].estado;

            }).catch((error) => {
                console.log(error);
            });
        },

    //ver ruta
     verRuta: function (idVehiculo){
            axios.get('/vehiculo-listarRuta/'+idVehiculo).then((response) => {
                if (response.data.length > 0) {
                    this.rutasList  = response.data;
                    this.data_ruta.idVehiculo = response.data[0].idVehiculo;
                } else {
                    
                    this.rutasList  = [];
                    this.message = 'No hay registro de vehículos!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
    },

    //ver poliza
     verPoliza: function (idVehiculo){
            axios.get('/vehiculo-listarPoliza/'+idVehiculo).then((response) => {
                if (response.data.length > 0) {
                    this.polizasList  = response.data;
                    this.data_poliza.idVehiculo = response.data[0].idVehiculo;
                } else {
                     this.polizasList  = [];
                    this.message = 'No hay registro de vehículos!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
    },

    // ver operacion
    verOperacion: function (idVehiculo){
            axios.get('/vehiculo-listarOperacion/'+idVehiculo).then((response) => {
                if (response.data.length > 0) {
                    this.operacionesList  = response.data;
                    this.data_operacion.idVehiculo = response.data[0].idVehiculo;
                } else {
                    this.operacionesList  = [];
                    this.message = 'No hay registro de vehículos!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
    },
    //ver rtm
    verRtm: function (idVehiculo){
            axios.get('/vehiculo-listarRtm/'+idVehiculo).then((response) => {
                if (response.data.length > 0) {
                    this.rtmList  = response.data;
                    this.data_rtm.idVehiculo = response.data[0].idVehiculo;
                } else {
                     this.rtmList  = [];
                    this.message = 'No hay registro de vehículos!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
    },
    //ver tercero
    verTercero: function (idVehiculo){
            axios.get('/vehiculo-listarTerceros/'+idVehiculo).then((response) => {
                if (response.data.length > 0) {
                     this.terceroList  = response.data;
                    this.data_tercero.idVehiculo = response.data[0].idVehiculo;
                } else {
                    this.terceroList  = [];
                    this.message = 'No hay registro de vehículos!!!';
                }
            }).catch((error) => {
                console.log(error.response);
            });
    },

    //ACTUALIZAR O EDITAR
    //cambiar estado de vehiculo
    stateTercero: function (idVehiculo, estado) {
        
                    let formData = {
                    idVehiculo: idVehiculo,
                    estado: estado
                     };
    
                     if(estado == 1 ){
                         var nomState = "Activo";
                     }else{
                         var nomState = "Inactivo";
                     }
                    swal({
                        title: "Estado de vehículo",
                        text: "Este tercero quedará " + nomState + " en tus registros!",
                        icon: "success",
                        dangerMode: false,
                    }).then((willDelete) => {
                        if (willDelete) {
                            axios.post('/stateVehiculo', formData).then((response) => {
                                //Success
                                swal("OK!", "Estado actualizado exitosamente", "success");
    
                            }).catch((error) => {
                                swal("Oops!", "Parece que algo salio mal!", "error");
                                console.log(error.response);
                            });
                        }
                    });
    
            },
    
    //editar vehículo
    putVehiculo: function(){
       this.buttons.edit.name = 'Actualizando...';
            this.buttons.edit.state = true;
             
             let formData = {
            'placa':this.data_edit.placa,
            'numeroInterno':this.data_edit.numeroInterno,
            'idVehiculoMatricula':this.data_edit.idVehiculoMatricula,
            'idServicio':this.data_edit.idServicio,
            'idClase':this.data_edit.idClase,
            'idMarca':this.data_edit.idMarca,
            'idColor':this.data_edit.idColor,
            'idCarroceria':this.data_edit.idCarroceria,
            'idCombustible':this.data_edit.idCombustible,
            'linea':this.data_edit.linea,
            'modelo':this.data_edit.modelo,
            'numeroSerie':this.data_edit.numeroSerie,
            'numeroChasis':this.data_edit.numeroChasis,
            'numeroMotor':this.data_edit.numeroMotor,
            'numeroPuertas':this.data_edit.numeroPuertas,
            'numeroPasajeros':this.data_edit.numeroPasajeros,
            'observaciones':this.data_edit.observaciones,
            'estado':this.data_edit.estado,
            'idUsuarioCrea':this.data_edit.idUsuarioCrea,
            'idUsuarioModifica':this.data_edit.idUsuarioModifica,
             
          }
            axios.put('/updateVehiculo/' + this.data_edit.idVehiculo, formData).then((response) => {
                this.buttons.edit.name = 'Actualizar';
                this.buttons.edit.state = false;
                swal("OK!", "Tercero actualizado exitosamente!", "success");
                $("#exampleModalVer").modal('hide');
                this.getVehiculo();
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

    //eliminar vehiculo
    deleteVehiculo: function(idVehiculo){
        swal({
         title: "Estas seguro ?",
         text: "Este Vehiculo quedará eliminado de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_edit.idVehiculo = idVehiculo;
             axios.delete('/vehiculo-delete/' + this.data_edit.idVehiculo).then((response) => {
                 swal("OK!", "El tercero se elimino exitosamente", "success");
                 this.getVehiculo();
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },

    //eliminar ruta
    deleteRutaVehiculo: function(idVehiculoRuta){
        swal({
         title: "Estas seguro ?",
         text: "Esta Ruta quedará eliminada de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_edit.idVehiculoRuta = idVehiculoRuta;
             axios.delete('/vehiculoRuta-delete/' + this.data_edit.idVehiculoRuta).then((response) => {
                 swal("OK!", "La Ruta se elimino exitosamente", "success");
                 this.verRuta(this.data_ruta.idVehiculo);
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },
    
    //eliminar poliza
     deletePolizaVehiculo: function(idVehiculoPoliza){
        swal({
         title: "Estas seguro ?",
         text: "Esta poliza quedará eliminada de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_poliza.idVehiculoPoliza = idVehiculoPoliza;
             axios.delete('/vehiculoPoliza-delete/' + this.data_poliza.idVehiculoPoliza).then((response) => {
                 swal("OK!", "La Poliza se elimino exitosamente", "success");
                 this.verPoliza(this.data_poliza.idVehiculo);
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },

    //eliminar Operacion
    deleteOperacionVehiculo: function(idVehiculo){
        swal({
         title: "Estas seguro ?",
         text: "Esta operación quedará eliminada de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_operacion.idVehiculoOperacion = idVehiculo;
             axios.delete('/vehiculoOperacion-delete/' + this.data_operacion.idVehiculoOperacion).then((response) => {
                 swal("OK!", "La Operación se elimino exitosamente", "success");
                 this.verOperacion(this.data_operacion.idVehiculo);
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },
    
     //eliminar Rtm
    deleteRtmVehiculo: function(idVehiculo){
        swal({
         title: "Estas seguro ?",
         text: "Este RTM quedará eliminado de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_rtm.idVehiculoRtm = idVehiculo;
             axios.delete('/vehiculoRtm-delete/' + this.data_rtm.idVehiculoRtm).then((response) => {
                 swal("OK!", "La rtm se elimino exitosamente", "success");
                 this.verRtm(this.data_rtm.idVehiculo);
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },
    
     //eliminar Tercero
    deleteTerceroVehiculo: function(idVehiculo){
        swal({
         title: "Estas seguro ?",
         text: "Este Tercero quedará eliminado de tus registros!",
         icon: "warning",
         buttons: ["Cancelar","Confirmar"],
         dangerMode: true,
      }).then((willDelete) => {
         if (willDelete) {
             this.data_tercero.idVehiculoTercero = idVehiculo;
             axios.delete('/vehiculoTercero-delete/' + this.data_tercero.idVehiculoTercero).then((response) => {
                 swal("OK!", "El tercero se elimino exitosamente", "success");
                 this.verTercero(this.data_tercero.idVehiculo);
             }).catch((error)=>{
                 swal("Lo sentimos", "Parece que algo salio mal!", "error");
             });
         }
     });
    },
    


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