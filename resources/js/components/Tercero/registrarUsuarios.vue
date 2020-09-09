<template>
    <div class="container contaRuta">
        <div class="modal-header encabezadoFormulario" >
            <h5 class="text-center text-white" id="exampleModalLabel">Registrar Usuarios</h5>
        </div>
    <div class="card cardRutas">

              <div class="row">

            <div class="form-group col-md-6">
                <label for="validationServer01">Usuario</label>
                <i class="icofont-ui-user iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="validationServer01" required>
            </div>

            <div class="form-group col-md-6">
                <label for="validationServer01">Contraseña</label>
                <i class="icofont-eye-blocked iconosRutas"></i>
                <input type="text" class="form-control inputRutas" id="validationServer01" required>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                        <label> Tercero</label>
                          <select class="custom-select" required>
                            <option>Pepito</option>
                            <option>Juan</option>
                            <option>Jose</option>
                          </select>
                      </div>


                <div class="form-group col-md-6">
                <label for="validationServer01">Email</label>
                <i class="icofont-email iconosRutas"></i>
                <input type="email" class="form-control inputRutas" required>
                </div>
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
    name:'Usuarios'
}
</script>
