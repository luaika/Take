<template>
  <div >
    <div class="buttons-options">
      <button
        v-for="tab in tabs "
        :key="tab"
        @click="selected = tab;"
        :class="['tab-btn', { active: selected === tab }]"
      >
        {{ tab }}
     <!--  <li  v-for="icono in iconos"
      v-bind:key="icono"
      v-bind:class="icono"
      >
        </li> -->
      </button>
    <component :is="selected" class="tab"></component>

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
import Vehículo from "./PestanasVehiculos/contenedor1";
import Capacidad from "./PestanasVehiculos/contenedor2";

export default {
  name: "registrarVehiculo",
  data: function() {
    return {
      tabs: ["Vehículo", "Capacidad"],
/*       iconos: ["icofont-ui-user","icofont-building-alt"],
 */      selected: "Vehículo"
    };
  },
  components: {
    Vehículo,
    Capacidad
  }
};
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
