<template>
    <div class="container">
      <br>
      <br>
      <br>
        <div class="row justify-content-center mt-auto">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Registro de Links</div>

                    <div class="card-body">

                      <form novalidate method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Categoria Registro</label>
                          <input type="text" class="form-control"  placeholder="categoria" v-model='categoria'>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dirección electrónica</label>
                          <input type="text" class="form-control"  placeholder="página web" v-model='link'>
                        </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model='comentario'></textarea>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Keys</label>
                          <input type="text" class="form-control"  placeholder="palabras claves" v-model='keys'>
                        </div>
                        <div class="form-group">
                        <button type="button" class="btn btn-success btn-sm"  @click="Grabar()">Grabar Registro</button>
                      </div>
                      </form>

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
              link        :   '',
              comentario  :   '',
              keys        :   '',
              categoria   :   '',
        }
      },
      methods: {
          Grabar(){
              let Me = this;
              axios.post('/grabar',  {'link': Me.link, 'comentario': Me.comentario, 'keys':Me.keys, 'categoria': Me.categoria })
              .then( response => {
                window.location.href = '/listar';
              });
          },
      }

    }
</script>
