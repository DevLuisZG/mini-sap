/**
 * 1. Carga de dependencias, importaciones, etc.
 */
require('../node_modules/bootstrap/dist/js/bootstrap.min.js');
require('../node_modules/jquery/dist/jquery.min.js'); //window.$ = window.jQuery = require('../node_modules/jquery/dist/jquery.min.js');
require('../node_modules/popper.js/dist/umd/popper.min.js');
/**
 * 2. Variables, constantes, etc.
 * Tambien puede ser:
 * window.vue = require('vue');
 * window.axios = require('axios');
 */
vue = require('vue');
axios = require('axios');
/**
 * 3. Registro de componentes
 * vue.component('nombre_componente', require('ruta_componente').default);
 */
vue.component('vendedor', require('./mini-sap/catalogos/vendedores/Vendedor.vue').default); //Admin super-usuario
/**
 * 4. Componente principal. 
 * En este se pueden implementar metodos que esten siempre a la escucha de eventos,
 * por ejemplo la carga de notificaciones.
 */
const app = new vue({
    el: '#app',
    data: {
        menu: 0,
        msg: 'Proyecto MiniSAP-ERP'
    },
    created() {

    }
});