
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">     

    <form id="modalForm" accept-charset="UTF-8">
    
        <input type="hidden" name="_token"  value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="_method" value="PUT">

        <div class="modal-content">
          
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Editar Pago</h4>
          </div>

          <div class="modal-body">                    
                
                <div class="form-group">
                    <label>Monto: &nbsp;&nbsp; <small>(Solo Números)</small> </label>
                    <input type="text" class="form-control" id="monto" placeholder="Ej: 15000" required>
                </div> 

                <div class="form-group">
                    <label>Método:</label>
                    <select class="form-control" id="metodo">
                        <option>Transferencia</option>
                        <option>Efectivo</option>                        
                    </select>
                    {{--<input type="text" class="form-control" id="metodo" placeholder="Ej: Efectivo / Transferencia" required>--}}
                </div>  

                <div class="form-group">
                    <label>Fecha:</label>
                    <input type="date" class="form-control" id="fecha">
                </div> 

                <div class="form-group">
                    <label>Recibo:</label>
                    <input type="text" class="form-control" id="num_recibo" placeholder="">
                </div>                   

                <div class="form-group">
                    <label>Banco:</label>
                    <input type="text" class="form-control" id="banco" placeholder="">
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