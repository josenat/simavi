
@extends('layouts.admin')

    @section('content')   

    
    <div class="list">  

        <div class="container">
 
        <div class="container-form">

            <a href="/pago" class="btn btn-default">
                <span class="glyphicon glyphicon-arrow-left"></span> Atrás 
            </a><br><br>          
    
       
            {!!Form::model($pago,['route'=>['pago.update',$pago->id],'method'=>'PUT'])!!}
              
                <div class="modal-content">
                                          
                    <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Editar Pago</h4>
                    </div>

                    <div class="modal-body">  


                        <div class="form-group">
                            {!!Form::label('Cédula:')!!}
                            {!!Form::text('cedula', null, ['class'=>'form-control','placeholder'=>'Ingrese número de cédula', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Monto:')!!}
                            {!!Form::text('monto', null, ['class'=>'form-control','placeholder'=>'Ingrese monto del pago', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Método Pago:')!!}
                            {!!Form::text('metodo', null, ['class'=>'form-control','placeholder'=>'Ingrese método de pago'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Fecha:')!!}
                            {!!Form::text('fecha', null, ['class'=>'form-control','placeholder'=>'Ingrese fecha de pago'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Recibo Nro:')!!}
                            {!!Form::text('num_recibo', null, ['class'=>'form-control','placeholder'=>'Ingrese número de recibo']) !!}
                        </div>                 

                        <div class="form-group">
                            {!!Form::label('Banco:')!!}
                            {!!Form::text('banco', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre del banco', 'required']) !!}
                        </div> 

                    </div>

                    <div class="modal-footer">
                            <a href="{{ url('/pago') }}" class="btn btn-default"> Atrás </a>

                            {!!Form::submit('Aceptar', ['class'=>'btn btn-default'])!!}   
                    </div>


                </div>

            {!!Form::close()!!}
     
     
        </div>

        </div>

    </div>
      
    @endsection
