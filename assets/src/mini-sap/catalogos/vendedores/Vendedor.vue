<template>
  <div class="container">
    {{ info }}
      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <label for="nombreVendedor">Nombre del vendedor:</label>
                  <input type="text" class="form-control" placeholder="Nombre(s) y apellidos">
              </div>
              <div class="col-md-3"></div>
          </div>
          &nbsp;
          <div class="col text-center">
              <button type="button" class="btn btn-success">Resgitrar</button>
          </div>  
          &nbsp;
      </form>
  </div>
</template>

<script>
  export default {
    /* 
      Contiene (retorna) las variables que son utilizadas en elementos de la vista.
    */
    data() {
      return {
        info: null
      };
    },
    /**
     * 
     */
    watch:{

    },
    /**
     * 
     */
    components: {
        
    },
    /*
      Metodos computados, gestionan la paginacion
    */
    computed: {
      
    },
    /*
      Contiene los metodos con los que se realizan la gestión de información en la vista.
    */
    methods: {
   
    },
    /* 
      Se ejcuta al cargar la vista 
    */
    mounted() {
      axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response))
    }
  };
</script> 

<style>

</style>