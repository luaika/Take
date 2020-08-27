<template>
  <div class="card segundoContenedor">
   <div class="row">
      <div class="form-group col-md-6">
        <label>Razon social</label>
        <i class="fas fa-users iconos"></i>
        <input type="text" class="form-control inputTeceros" required>
      </div>
      <div class="form-group col-md-6">
        <label>Nombre comercial</label>
        <i class="fas fa-hotel iconos"></i>
        <input type="text" class="form-control inputTeceros" required>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label>Tipo Tercero</label>
        <select class="custom-select" required>
          <option></option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label >Estado</label>
        <select class="custom-select" required>
          <option>Activo</option>
          <option>Inactivo</option>
          <option></option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
         <label>Fecha Creación</label>
         <input type="date" class="form-control" value="2020-01-01" required>
      </div>
      <div class="form-group col-md-6">
        <label>Fecha Modificación</label>
        <input type="date" class="form-control" value="2020-01-01" required>
      </div>
    </div>

     <div class="btn-width ">
       <button class="btn botonCancelar botones" type="submit" style="margin-left:10%;">Cancelar</button>
       <button class="btn  botonAgregar botones" type="submit">Agregar</button>
     </div>
</div>

                
</template>

<script>
export default {};
</script>