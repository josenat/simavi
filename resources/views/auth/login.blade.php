@extends('layouts.home')

@section('content')

        @include('alerts.validation')

        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h4><strong>Inicio de Sesión</strong></h4></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('home.store') }}">
                                {{-- csrf_field() --}}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        {{-- 
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif --}}
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        {{-- 
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif  --}}
                                    </div>
                                </div>
                                
                                {{--
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                --}}

                                <div class="form-group">
                                    <div class="col-md-3 col-md-offset-7">
                                        <button type="submit" class="btn btn-default btn-block">
                                            Entrar
                                        </button>
                                        <a href="{{ url('/register') }}" class="btn btn-default btn-block">
                                            Registrar 
                                        </a>
                                        {{--
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                        --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

@endsection