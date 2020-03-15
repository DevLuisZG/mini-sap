<template>
  <main class="main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
    </ol>

    <!--Contenedor princial [Vista inicial del componente Vendedor]-->
    <div class="container-fluid">
      <div class="card"> 
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Vendedores
          <button type="button" @click="abrirModal('vendedor','registrar')" class="btn btn-success" title="Registrar un vendedor">
            <i class="icon-plus"></i>&nbsp;Nuevo
          </button>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <button type="button" class="btn btn-warning btn-sm"  title="Permite actualizar los datos del vendedor" @click="abrirModal('vendedor','actualizar', vendedor)">
                <i class="icon-pencil"></i>
              </button>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!--Modal Para agregar y actualizar datos de un objeto Vendedor-->
    <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-secondary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">&nbsp;
            <h5 v-text="tituloModal" class="text-dark"></h5>
            <button type="button" title="Cerrar" class="close" @click="cerrarModal()" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <label for="text-input">Nombre del vendedor:</label>
                  <input type="text" class="form-control" placeholder="Nombre(s) y apellidos" v-model="nombreVendedor">
                </div>
                <div class="col-md-3"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" title="Cancela la operación actual" @click="cerrarModal()">Cancelar</button>
            <button type="button" class="btn btn-success" title="Registra vendedor" v-if="tipoAccion==1" @click="registrarVendedor()">Guardar</button>
            <button type="button" class="btn btn-success" title="Guarda los cambios" v-if="tipoAccion==2" @click="actualizarVendedor()">Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!--Test data axios-->
      <div class="container">
        {{ info }}
      </div>
    </div>
  </main>
  
</template>

<script>
  export default {
    /* 
      Contiene (retorna) las variables que son utilizadas en elementos de la vista.
    */
    data() {
      return {
        /**
         * Variables para datos
         */
        info: null,       // Test de AXIOS
        nombreVendedor: "",
        /**
         * Variables para el modal
         */
        modal: 0,         // Muestra u oculta ventana modal
        tituloModal: "",  // Determina si el titulo es de registro o de modificación
        tipoAccion: 0,    // Accion a realizar, 1 = Registrar, 2 = actualizar
      };
    },
    /**
     * Logica de negocio, manipulacion de informacion
     */
    watch:{

    },
    /**
     * Componentes del Vendedores.vue
     */
    components: {
        
    },
    /*
      Metodos computados (gestionan la paginacion)
    */
    computed: {
      
    },
    /*
      Contiene los metodos con los que se realizan la gestión de información en la vista.
    */
    methods: {
      /**
       * Método que permite registrar a un nuevo vendedor
       */
      registrarVendedor(){
        console.log("Registrar un nuevo vendedor - registrarVendedor()" + this.nombreVendedor);
        this.cerrarModal();
      },
      /**
       * Método que permite registrar a un nuevo vendedor
       */
      actualizarVendedor(){
        console.log("Actualizar un vendedor - actualizarVendedor()");
        this.cerrarModal();
      },
      /* 
        Cierra el modal, setea los valores de los campos del formulario, los pone vacios
      */
      cerrarModal() {
        this.modal = 0;
        this.tituloModal = "";
        this.nombreVendedor = "";
      },
      /*
        Abre el modal, dependiendo de si se registrara o actualizara un elemento, se muestran la información en los elementos 
        de formulario. 
        modelo: Que es el modelo
      */
      abrirModal(modelo, accion, data = []) {
        switch (modelo) {
          case "vendedor": {
            switch (accion) {
              case "registrar": {
                this.modal = 1; 
                this.tipoAccion = 1;
                this.tituloModal = "Registrar vendedor";   
                this.nombreVendedor = "";      
                break;
              }
              case "actualizar": {
                this.modal = 1;
                this.tipoAccion = 2;
                this.tituloModal = "Actualizar vendedor";
                this.nombreVendedor = data["nombreVendedor"];           
                break;
              }
            }
          }
        }
      }
    },
    /* 
      Se ejcuta al cargar la vista 
    */
    mounted() {
      //Test axios
      axios.get('https://api.coindesk.com/v1/bpi/currentprice.json').then(response => (this.info = response))
    }
  };
</script> 

<!-- Estilos extras -->
<style>
  .modal-content {
    width: 100% !important;
    position: absolute !important;
  }
  .mostrar {
    display: list-item !important;
    opacity: 1 !important;
    position: absolute !important;
    background-color: #3c29297a !important;
  }
  .div-error {
    display: flex;
    justify-content: center;
  }
  .text-error {
    color: red !important;
    font-weight: bold;
  }
</style>