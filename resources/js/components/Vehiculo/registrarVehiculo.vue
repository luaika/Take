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
                    <label for="numeroInterno">numeroInterno</label>
                    <i class="fas fa-palette iconos"></i>
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
                                    <i class="fas fa-digital-tachograph iconos"></i>   
                                    <input type="text" class="form-control inputTeceros" id="placa" v-model="data_edit.placa">
                                </div>
                                <div class="col">
                                    <label for="idVehiculoMatricula">Matrícula</label>
                                    <i class="fas fa-city iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="idVehiculoMatricula" v-model="data_edit.idVehiculoMatricula">
                                </div>
                                <div class="col">
                                    <label for="idServicio">Servicio</label>
                                    <i class="fas fa-city iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="idServicio" v-model="data_edit.idServicio">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="idClase">Clase</label>
                                    <i class="fas fa-city iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="idClase" v-model="data_edit.idClase">
                                </div>
                                <div class="col">
                                    <label for="idMarca">Marca</label>
                                    <i class="fas fa-city iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="idMarca" v-model="data_edit.idMarca">
                                </div>
                                <div class="col">
                                    <label for="idColor">Color</label>
                                    <i class="fas fa-palette iconos"></i>
                                    <input type="text" class="form-control inputTeceros" id="idColor" v-model="data_edit.idColor">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="idCarroceria">Carroceria</label>
                                        <i class="fas fa-city iconos"></i>
                                        <input type="text" class="form-control inputTeceros" id="idCarroceria " v-model="data_edit.idCarroceria">
                                    </div>
                                    <div class="col">
                                        <label for="idCombustible">Combustible</label>
                                        <i class="fas fa-gas-pump iconos"></i>
                                        <input type="text" class="form-control inputTeceros" id="idCombustible " v-model="data_edit.idCombustible ">
                                    </div>
                                    <div class="col">
                                        <label for="linea">Linea</label>
                                        <i class="fas fa-palette iconos"></i>
                                        <input type="text" class="form-control inputTeceros" id="linea" v-model="data_edit.linea">
                                    </div>
                                            
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label for="modelo">Modelo</label>
                                    <i class="fas fa-palette iconos"></i>
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
                                    <label for="numeroInterno">numeroInterno</label>
                                    <i class="fas fa-palette iconos"></i>
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
                            <templete slot="edit" slot-scope="props">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                                    <i class="icofont-edit"></i>
                                </button>
                            </templete>
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
                            <templete slot="edit" slot-scope="props">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                                    <i class="icofont-edit"></i>
                                </button>
                            </templete>
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
                            <templete slot="edit" slot-scope="props">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                                    <i class="icofont-edit"></i>
                                </button>
                            </templete>
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
                            <templete slot="edit" slot-scope="props">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                                    <i class="icofont-edit"></i>
                                </button>
                            </templete>
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
                            <templete slot="edit" slot-scope="props">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                                    <i class="icofont-edit"></i>
                                </button>
                            </templete>
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
                            <templete slot="edit" slot-scope="props">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalVer"  v-on:click="verVehiculo(props.row.idVehiculo,0)" v-bind:idVehiculo="props.row.idVehiculo">
                                    <i class="icofont-edit"></i>
                                </button>
                            </templete>
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
                    <button type="button" class="btn btn-danger"   v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
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
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalPoliza" v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-list"></i>
                    </button>
                </templete>
                <templete slot="operacion" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalOperacion" v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                     <i class="icofont-license"></i>
                    </button>
                </templete>
                <templete slot="rtm" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalRtm" v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-mail"></i>
                    </button>
                </templete>
                <templete slot="terceros" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalTercero" v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                       <i class="icofont-users-alt-2"></i>
                    </button>
                </templete>
                <templete slot="ruta" slot-scope="props">
                    <button type="button" class="btn btn-warning botonesModal"  data-toggle="modal" data-target="#exampleModalRuta" v-on:click="deleteTercero(props.row.idVehiculo)" v-bind:idVehiculo="props.row.idVehiculo">
                      <i class="icofont-map-pins"></i>
                    </button>
                </templete>
                
            </vue-bootstrap4-table>
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
import VueBootstrap4Table from 'vue-bootstrap4-table';

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
     estado:1,
     idUsuarioCrea:1,
     idUsuarioModifica:1,
     vehiculos:[],
     editar:false,
      config: {
                 pagination: true, // default true
                    pagination_info: true, // default true
                    num_of_visibile_pagination_buttons: 7, // default 5
                    per_page: 6, // default 10
                    per_page_options:  [6,  10,  20,  30],
                //highlight_row_hover_color:"blue", over del listado
                filas_seleccionables: true,
                card_title: "VEHÍCULOS",
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
                    sort: true,
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
            label: "Estado de Matrícula",
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
            },
    };
  },
  components:{
        VueBootstrap4Table
    },
  mounted(){
      this.getVehiculo();
    },
  methods:{
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
        'idUsuarioModific':this.idUsuarioModifica
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
        swal("OK!", "Vehículo creado exitosamente!", "success"); 
            this.buttons.create.name = 'Agregar' ;
            this.buttons.create.state = false ;
      }).catch((error)=>{
         swal("Lo sentimos!", "Parece que algo salio mal!", "error");
          console.log(error.response);
      });
    },
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
   //ver vehiculo
    //ver tercero
    verVehiculo: function (idVehiculo,funcion) {
        console.log(funcion);
            if(funcion == 0){
                this.editar = true;
            }else{
                 this.editar = false;
            }
            this.data_edit.idVehiculo = idVehiculo;
            axios.get('/vehiculo-resource/'+idVehiculo+'/edit').then((response) => {
                this.data_edit.contenedor= true;
                this.data_edit.show= false;
                let data = response.data;
                this.data_edit.placa=data['placa'],
                this.data_edit.numeroInterno=data['numeroInterno'],
                this.data_edit.idVehiculoMatricula=data['idVehiculoMatricula'],
                this.data_edit.idServicio=data['idServicio'],
                this.data_edit.idClase=data['idClase'],
                this.data_edit.idMarca=data['idMarca'],
                this.data_edit.idColor=data['idColor'],
                this.data_edit.idCarroceria=data['idCarroceria'],
                this.data_edit.idCombustible=data['idCombustible'],
                this.data_edit.linea=data['linea'],
                this.data_edit.modelo=data['modelo'],
                this.data_edit.numeroSerie=data['numeroSerie'],
                this.data_edit.numeroChasis=data['numeroChasis'],
                this.data_edit.numeroMotor=data['numeroMotor'],
                this.data_edit.numeroPuertas=data['numeroPuertas'],
                this.data_edit.numeroPasajeros=data['numeroPasajeros'],
                this.data_edit.observaciones=data['observaciones'],
                this.data_edit.estado=data['estado']
            }).catch((error) => {
                console.log(error);
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