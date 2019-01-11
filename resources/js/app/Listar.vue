<template>
    <div class="container">
      <br>
      <br>
      <br>
        <div class="row justify-content-center mt-auto">
            <div class="col-md-12">


                <div class="card card-default">
                    <div class="card-header">Recursos

                          <input class="form-control mr-sm-2" type="text" placeholder="Buscar"  v-model ='TextoBsqda'
                              @change     ="BuscarRecurso()"
                              @input      ="BuscarRecurso()"
                          >

                   </div>

                    <div class="card-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead >
                      <tr>
                        <th>  CATEGORIA  </th>
                        <th>  COMENTARIO  </th>
                        <th>  PALABRAS CLAVE </th>
                        <th>  URL </th>
                      </tr>
                    </thead>
                    <tbody >

                      <tr v-for="link in links">
                        <td v-text="link.categoria"></td>
                        <td v-text="link.comentario"></td>
                        <td v-text="link.keys"></td>
                        <td ><a :href="link.link"><small>{{ link.link }}</small></a></td>
                      </tr>
                    </tbody>
                  </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
                  links :[],
                  TextoBsqda :''
          }
        },
        mounted() {
            this.listado();
        },
        methods:{
            listado(){
                axios.get('/listado')
                .then(response =>{
                 this.links= response.data ;
                });
            },
            BuscarRecurso(){
                let Me = this;
                if ( Me.TextoBsqda.length<3){
                  this.listado();
                  return ;
                }
                let Url  = '/buscar' + '?filtro='+Me.TextoBsqda;
                axios.get(Url)
                .then( response=>{
                   this.links= response.data ;
                });
            },
        }
    }
</script>
