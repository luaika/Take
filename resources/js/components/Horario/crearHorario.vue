<template>
    <div class="container contaRuta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Habilitar Horario</h5>
        </div>
    <div class="card cardRutas"> 

              <div class="form-group col-md-12">
                            <label >Hora</label>
                            <i class="fas fa-clock iconos"></i>
                            <input type="time" class="form-control inputTeceros" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Fecha</label>
                            <i class="far fa-calendar-alt iconos"></i> 
                            <input type="date" class="form-control inputTeceros" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Ruta</label>
                            <i class="fas fa-route iconos"></i>
                            <input type="text" class="form-control inputTeceros" >
                        </div>
                        <div class="form-group col-md-12">
                            <label >Vehiculo</label>
                            <i class="fas fa-bus iconos"></i>
                            <input type="text" class="form-control inputTeceros" >
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