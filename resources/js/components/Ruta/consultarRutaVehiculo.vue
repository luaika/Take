<template>
<div class="container">
   <div>
        <form >
            <div class="row">
                <div class="col">
                <select class="form-control" id="exampleFormControlSelect1" placeholder="Ruta">
                    <option>Ruta 1</option>
                    <option>Ruta 2</option>
                    <option>Ruta 3</option>
                    <option>Ruta 4</option>
                    <option>Ruta 5</option>
                </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Vehiculo">
                </div>
                <div class="col">
                  
                    <button type="button" class="btn botonAgregar botones"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>


    <div class="listado">
    <table class="table md-7" >
      <thead class=" encabezadoFormulario text-white " >
        <tr>
          <th scope="col">#</th>
          <th scope="col">Placa</th>
          <th scope="col">Ruta</th>
          <th scope="col">Hora</th>
          <th scope="col" style="width:13%;">Acción</th>
        </tr>
      </thead>
      <tbody style="background:white;">
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td >@mdo</td>
          <td style="width:auto;"> 
            
              <button type="button" class="btn botonAgregar text-white"><i class="fas fa-pen"></i></button> 
              <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td style="width:auto;">
              <button type="button" class="btn botonAgregar text-white"><i class="fas fa-pen"></i></button> 
              <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </td>  
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td style="width:auto;"> 
              <button type="button" class="btn botonAgregar text-white"><i class="fas fa-pen"></i></button> 
              <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        </td>
        </tr>
      </tbody>
    </table>
    </div>
</div>
</template>

<script>
export default {
    name:'consultarRutasVehiculo',
    methods:{
           
    }
}
</script>