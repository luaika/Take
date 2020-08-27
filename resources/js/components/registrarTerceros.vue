<template>
  <div>
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
  </div>
</template>

<script>
import Usuario from "./PestanasTerceros/contenedor1";
import Empresa from "./PestanasTerceros/contenedor2";

export default {
  name: "Tercero",
  data: function() {
    return {
      tabs: ["Usuario", "Empresa"],
/*       iconos: ["icofont-ui-user","icofont-building-alt"],
 */      selected: "Usuario"
    };
  },
  components: {
    Usuario,
    Empresa
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

</style>