
@extends('layouts.admin')

    @section('content')   

    
    <div class="list">  

        <div class="container">
 
        <div class="container-form">

            <a href="/paquete" class="btn btn-default">
                <span class="glyphicon glyphicon-arrow-left"></span> Atrás 
            </a><br><br>          
    
       
            {!!Form::model($paquete,['route'=>['paquete.update',$paquete->id],'method'=>'PUT'])!!}
              
                <div class="modal-content">
                                          
                    <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Editar Paquete</h4>
                    </div>

                    <div class="modal-body">  


                        <div class="form-group">
                            {!!Form::label('Tipo:')!!}
                            {!!Form::text('tipo', null, ['class'=>'form-control','placeholder'=>'Ingrese tipo de paquete'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Costo:')!!}
                            {!!Form::text('costo', null, ['class'=>'form-control','placeholder'=>'Ingrese costo del paquete'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Descripcion:')!!}
                            {!!Form::text('descripcion', null, ['class'=>'form-control','placeholder'=>'Ingrese descripcion'])!!}
                        </div>
                               

                    </div>

                    <div class="modal-footer">
                            <a href="{{ url('/paquete') }}" class="btn btn-default"> Atrás </a>

                            {!!Form::submit('Aceptar', ['class'=>'btn btn-default'])!!}   
                    </div>


                </div>

            {!!Form::close()!!}
     
     
        </div>

        </div>

    </div>
      
    @endsection
