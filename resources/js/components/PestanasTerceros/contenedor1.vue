<template>
            <div class="card primerContenedor">
               <div class="row">
                <div class="form-group col-md-4">
                     <label>Identificación</label>
                        <i class="far fa-address-card iconos"></i>
                        <input type="text" class="form-control inputTeceros" required>
                </div>
                <div class="form-group col-md-1">
                    <label>D.V</label>
                    <input type="text" class="form-control inputTeceros" required>
               </div>
                <div class="form-group col-md-4">
                  <label>Tipo Documento</label>
                  <select class="custom-select" id="validationServer04" required>
                    <option>CC</option>
                    <option>TI</option>
                    <option>RC</option>
                  </select>
                </div>
                
                <div class="form-group col-md-3 divFoto">
                    <input id="inputFoto" placeholder="Foto" class="form-control col-md-6" required>
                </div>
               </div>
               
                <div class="row" >                
                 <div class="form-group col-md-4">
                     <label>Nombres</label>
                     <i class="far fa-edit iconos"></i>
                     <input type="text" class="form-control inputTeceros" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="validationServer02">Apellidos</label>
                    <i class="far fa-edit iconos"></i>
                    <input type="text" class="form-control inputTeceros" required>
                </div>
                <div class="form-group col-md-5 examinar ">
                  <button style="background:red; margin-left:8rem;" class="btn  botonAgregar botones" type="submit">Examinar</button>
                  </div>
                </div>
            <div class="row">

              <div class="form-group col-md-6">
                <label>Fecha Nacimiento</label>
                <input type="date" class="form-control" value="2020-01-01" required>
              </div>
                    <div class="form-group col-md-6">
                        <label >Genero</label>
                          <select class="custom-select" required>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option></option>
                          </select>
                      </div>
                    </div>
                <div class="row">
                   <div class="form-group col-md-6">
                      <label>Celular</label>
                      <i class="fas fa-mobile-alt iconos"></i>
                      <input type="text" class="form-control inputTeceros" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Correo</label>
                         <i class="far fa-envelope iconos"></i>
                         <input type="email" class="form-control inputTeceros" required>
                    </div>
                </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label>Dirección</label>
                         <i class="fas fa-map-marker-alt iconos"></i>
                         <input type="text" class="form-control inputTeceros" required>
                    </div><div class="form-group col-md-6">
                        <label>Ciudad</label>
                        <i class="fas fa-city iconos"></i>
                         <input type="text" class="form-control inputTeceros" required>
                    </div>
                    </div>
                </div>

</template>
<script>
export default {};
</script>

<style>
  .examinar{
    margin-top:4%;
    min-width:3rem !important;
  }
</style>