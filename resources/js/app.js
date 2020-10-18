import Vue from 'vue';
import axios from 'axios';
import router from './routes.js';
import App from './components/App';
import swal from 'sweetalert';
import ToggleButton from 'vue-js-toggle-button';

Vue.use(ToggleButton);
window.axios = axios;

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});

export default app;
