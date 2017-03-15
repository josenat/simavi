
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">     

    <form id="modalForm" accept-charset="UTF-8">
    
        <input type="hidden" name="_token"  value="{{ csrf_token() }}" id="token">
        <input type="hidden" name="_method" value="PUT">

        <div class="modal-content">
          
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Actualizar Viajero</h4>
          </div>

          <div class="modal-body">                              
                
                <div class="form-group">                    
                    <label>Cedula:</label>
                    <input type="text" class="form-control" id="cedula" placeholder="Ej: 20123456" required>
                </div> 

                <div class="form-group">
                    <label>Nombres:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombres" required>
                </div>  

                <div class="form-group">
                    <label>Apellidos:</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellidos" required>
                </div> 

                <div class="form-group">
                    <label> Sexo:</label>
                    <select class="form-control" id="sexo">
                        <option>F</option>
                        <option>M</option>
                    </select>                    
                    {{--<input type="text" class="form-control" id="sexo" placeholder="Ej: M/F" required>--}}
                </div>                   

                <div class="form-group">
                    <label>Edad:</label>
                    <input type="text" class="form-control" id="edad" placeholder="Ingrese edad" required>
                </div> 

                <div class="form-group">
                    <label>Estado Pago:</label>
                    <select class="form-control" id="estado_pago">
                        <option>Insolvente</option>
                        <option>Solvente</option>
                    </select>                    
                    {{--<input type="text" class="form-control" id="estado_pago" placeholder="Ej: Solvente o Insolvente" required>--}}
                </div>                

                <div class="form-group">
                    <label>Telefono:</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Ej: 0414-1234567" required>
                </div>  

                <div class="form-group">
                    <label> Paquete Viaje:</label>
                    <input type="text" class="form-control" id="paquete" placeholder="Ej: 1 / 2" required>
                </div>                  

                <div class="form-group">
                    <label>Correo:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese correo electrónico" required>
                </div>                

                  <div class="form-group">
                      <label> Fecha Nac: </label>
                      <input type="date" class="form-control" id="fecha_nac">
                  </div>                          

                <div class="form-group">
                    <label>Permiso de Viaje:</label>
                    <select class="form-control" id="permiso">
                        <option>  </option>
                        <option>Si</option>
                        <option>No</option>
                    </select>                    
                    {{--<input type="text" class="form-control" id="permiso" placeholder="Ej: Si/No">--}}
                </div>  
{{--
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" id="pass" placeholder="Ingrese contraseña">
                </div>          

                <div class="form-group">
                    <label>Tipo de Usuario:</label>
                    <input type="text" class="form-control" id="tipo" placeholder="Ej: 1 (administrador) 2 (standar)">
                </div> 
  --}}                
          </div>

          <div class="modal-footer">
              
            <a href="" class="btn btn-default"> Atrás </a>

            <button type="submit" class="btn btn-default" id="btnActualizar">Aceptar</button>

          </div>

        </div>

    </form>

  </div>
</div>

