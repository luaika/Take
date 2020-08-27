import Vue from "vue";
import VueRouter from "vue-router";

//Inicio - se importan todos los componentes
import CrearHorario from './components/crearHorario';
import CrearTercero from './components/registrarTerceros';
import RegitrarVehiculo from './components/registrarVehiculo';
import RegistrarRuta from './components/registrarRutas';
import ConsultarRutasVehiculos from './components/consultarRutaVehiculo';
import Despacho from './components/despacho';
import CantidadPasajeros from './components/cantidadPasajeros';
import RegistrarUsuarios from './components/registrarUsuarios'
Vue.use(VueRouter);

const router =  new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/crearHorario',
            name: 'crearHorario',
            component: CrearHorario
        },
        {
            path: '/registrarTercero',
            name: 'Tercero',
            component: CrearTercero
        },
        {

            path:'/registrarVehiculo',
            name:'registrarVehiculo',
            component: RegitrarVehiculo
        },
        {
            path:'/registrarRutas',
            name:'registrarRutas',
            component: RegistrarRuta
        },
        {
            path:'/consultarRutasVehiculos',
            name: 'consultarRutasVehiculo',
            component: ConsultarRutasVehiculos
        },
        {
            path:'/despacho',
            name:'Despacho',
            component: Despacho
        },
        {
            path:'/cantidadPasajeros',
            name:'Pasajeros',
            component: CantidadPasajeros
        },
        {
            path:'/registrarUsuarios',
            name:'Usuarios',
            component: RegistrarUsuarios
        },
    ]

});

export default router;