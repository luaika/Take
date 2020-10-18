import Vue from "vue";
import VueRouter from "vue-router";
//Inicio - se importan todos los componentes
import CrearHorario from './components/Horario/crearHorario';
import CrearTercero from './components/Tercero/registrarTerceros';
import RegitrarVehiculo from './components/Vehiculo/registrarVehiculo';
import RegistrarRuta from './components/Ruta/registrarRutas';
import ConsultarRutasVehiculos from './components/Ruta/consultarRutaVehiculo';
import Despacho from './components/Vehiculo/despacho';
import CantidadPasajeros from './components/Pasajero/cantidadPasajeros';
import RegistrarUsuarios from './components/Tercero/registrarUsuarios';

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
