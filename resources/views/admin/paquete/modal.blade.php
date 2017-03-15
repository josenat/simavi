
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">     

    <form id="modalForm" accept-charset="UTF-8">

        <input type="hidden" name="_token"  value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="_method" value="PUT">

        <div class="modal-content">
          
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Actualizar Paquete</h4>
          </div>

            <div class="modal-body">                                     
                  
                  
                  <div class="form-group">
                    <small><span class='glyphicon glyphicon-asterisk'></span></small>
                      <label> Tipo: </label>
                      <input type="text" class="form-control" id="tipo" placeholder="Ej: 1" required>
                  </div> 

                  <div class="form-group">
                    <small><span class='glyphicon glyphicon-asterisk'></span></small>
                      <label> Costo: &nbsp;&nbsp; <small>(Solo Números)</small> </label> 
                      <input type="text" class="form-control" id="costo" placeholder="Ej: 25000" required>
                  </div>  

                  <div class="form-group">
                    <small><span class='glyphicon glyphicon-asterisk'></span></small>
                      <label> Descripcion: </label>
                      <input type="text" class="form-control" id="descripcion" placeholder="" required>
                  </div> 

            </div>

          <div class="modal-footer">
              
              <a href="" class="btn btn-default"> Atrás </a>

              <button type="submit" class="btn btn-default" id="btnActualizar">Aceptar</button>
              
          </div>

        </div>

    </form>

  </div>
</div>