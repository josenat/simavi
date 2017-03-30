
@extends('layouts.admin')

    @section('content')   

    
    <div class="list">  

        <div class="container">
 
        <div class="container-form">

            <a href="/viajero" class="btn btn-default">
                <span class="glyphicon glyphicon-arrow-left"></span> Atrás 
            </a><br><br>          
    
       
            {!!Form::model($viajero,['route'=>['viajero.update',$viajero->id],'method'=>'PUT'])!!}
              
                <div class="modal-content">
                                          
                    <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Actualizar Viajero</h4>
                    </div>

                    <div class="modal-body">  


                        <div class="form-group">
                            {!!Form::label('Cedula:')!!}
                            {!!Form::text('cedula', null, ['class'=>'form-control','placeholder'=>'Ingrese número cédula', 'required'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Nombres:')!!}
                            {!!Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese nombres', 'required'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Apellidos:')!!} 
                            {!!Form::text('apellido', null, ['class'=>'form-control','placeholder'=>'Ingrese apellidos', 'required'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Sexo:')!!}
                            {!!Form::text('sexo', null, ['class'=>'form-control','placeholder'=>'Ingrese tipo de sexo', 'required'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Edad:')!!}
                            {!!Form::text('edad', null, ['class'=>'form-control','placeholder'=>'Ingrese nombres', 'required'])!!}
                        </div>                

                        <div class="form-group">
                            {!!Form::label('Estado Pago:')!!}
                            {!!Form::text('estado_pago', null, ['class'=>'form-control','placeholder'=>'Ingrese estado de pago', 'required'])!!}
                        </div>  

                        <div class="form-group">
                            {!!Form::label('Telefono:')!!}
                            {!!Form::text('telefono', null, ['class'=>'form-control','placeholder'=>'Ingrese número de teléfono', 'required'])!!}
                        </div>                

                        <div class="form-group">
                            {!!Form::label('Paquete Viaje:')!!}
                            {!!Form::text('id_paquete', null, ['class'=>'form-control','placeholder'=>'Ej: 1 / 2', 'required'])!!}
                        </div>                

                        <div class="form-group">
                            {!!Form::label('Correo:')!!}
                            {!!Form::email('email', null, ['class'=>'form-control','placeholder'=>'Ingrese correo electrónico', 'required'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Fecha Nac:')!!}
                            {!!Form::text('fecha_nac', null, ['class'=>'form-control','placeholder'=>'Ingrese fecha de nacimiento', 'required'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Permiso de Viaje:')!!}
                            {!!Form::text('permiso', null, ['class'=>'form-control','placeholder'=>'Ej: Si / No'])!!}
                        </div>                                

                    </div>

                    <div class="modal-footer">
                            <a href="{{ url('/viajero') }}" class="btn btn-default"> Atrás </a>

                            {!!Form::submit('Aceptar', ['class'=>'btn btn-default'])!!}   
                    </div>


                </div>

            {!!Form::close()!!}
     
     
        </div>

        </div>

    </div>
      
    @endsection


{{-- 

<form id="modalForm" action="/viajero/{{$viajero->id}}" method="PUT" >

<form id="modalForm" action="{{ action('ViajeroController@update', [$viajero->id]) }}" >

{{ Form::open( array('action' => array('ViajeroController@update', $viajero->id), 'method' => 'PUT') ) }}

{{ Form::model($viajero, array('route' => array('viajero.update', $viajero->id), 'method' => 'PUT')) }}















                        <div class="form-group">
                            {!!Form::label('Estado Pago:')!!}
                            {!!Form::select('estado_pago', 
                                    array_merge(['label' => 'Seleccione', 'disabled' => true], ['Insolvente', 'Solvente']),
                                    $viajero->estado_pago,
                                    array('class' => 'form-control','id' => 'estado_pago')
                                )
                            !!}
                        </div>  
--}}          