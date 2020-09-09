<template>
    <div class="container contaRuta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Habilitar Horario</h5>
        </div>
    <div class="card cardRutas">

              <div class="form-group col-md-12">
                            <label >Hora</label>
                            <!--<i class="fas fa-clock iconos"></i>-->
                            <input type="time"  v-model="hora"  class="form-control" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Fecha</label>
                            <!--<i class="far fa-calendar-alt iconos"></i>-->
                            <input type="date"  v-model="fecha"  class="form-control" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Ruta <span class="text-danger">*</span> </label>
                            <select class="custom-select" v-model="ruta"  required>
                                <option value="0">Seleccionar Ruta</option>
                                <option v-for="ruta in ruta" :value="ruta.idRuta" v-text="ruta.descripcion" v-bind:key="ruta"></option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label >Vehiculo</label>
                            <select class="custom-select" v-model="vehiculo" required>
                                <option value="0">Seleccionar Vehiculo</option>
                                <option v-for="vehiculo in vehiculo" :value="vehiculo.idVehiculo" v-text="vehiculo.placa" v-bind:key="vehiculo"></option>
                            </select>
                        </div>
            <div class="btn-width">
                <button class="btn  botonCancelar botones" type="submit">Cancelar</button>

                <button class="btn botonAgregar botones" type="submit">Agregar</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
        name: "crearHorario",

        created: function () {

        },
        mounted() {

        },
        destroyed() {

        },
        data: function () {
            return {


            }
        },
        methods:{

        }
    }
</script>
