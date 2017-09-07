@extends('layouts.app')

@section('content')
<div class="cover-img">
    <img class="top-cover-img" src="{{ URL::to('images/register-qtconnect.png')}}">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="col-md-8" style="padding-top: 244px;">
                <ul style="list-style-type: none;">
                    <li>Registrate</li>
                    <li>¿Buscas un clasificado?</li>
                    <li>¿Servicios para tu negocio?</li>
                    <li>Anúnciate</li>
                    <li>Ayuda y Contacto</li>
                </ul>
            </div>
            <div class="col-md-4" style="padding-top: 146px;">
                <img class="top-cover-img" src="{{ URL::to('images/sep.png')}}">
            </div>
        </div>
        <div class="col-md-8">


        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#person">
                    <div class="box-services">
                        <i class="fa fa-user fa-2x" aria-hidden="true"> </i> Registrarme como persona
                    </div>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#business">
                    <div class="box-services">
                        <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i> Registrarme como empresa
                    </div>
                </a>
            </li>
        </ul>

        <div class="tab-content">
          <div id="person" class="tab-pane fade in active">
            <p class="register-title uppercase">Registrarme como persona</p>
            <p>Comienza a utilizar QTConnect y expande tu alcance.</p>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                     <div class="col-md-8 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electronico" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                
                    <div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                    </div>

                     <div class="col-md-6 form-group">
                        <input id="city" type="text" class="form-control" name="city" placeholder="Ciudad" required>
                    </div>

                    <div class="col-md-3 form-group">
                        <input id="cp" type="text" class="form-control" name="cp" placeholder="CP" required>
                    </div>

                    <div class="col-md-3 form-group">
                        <input id="sex" type="text" class="form-control" name="sex" placeholder="Sexo" required>
                    </div>

                <div class="form-group">
                    <div class="col-md-8">
                    <input type="checkbox" name="privacity" value="privacity">
                       Al suscribirte, aceptas nuestras Condiciones de Uso y Venta y nuestro Aviso de Privacidad. 
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                            Registrarme
                        </button>
                    </div>
                </div>
            </form>
          </div>
          <div id="business" class="tab-pane fade">
            <p class="register-title uppercase">Registrarme como empresa</p>
            <p>Completa el siguiente formulario y en breve nos pondremos en contacto para el seguimiento de tu anuncio. Los campos marcados con (*) son obligatorios.</p>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            <p><strong>Datos de Contacto</strong></p>
                            {{ csrf_field() }}
                     <div class="col-md-8 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electronico" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                
                    <div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                    </div>

                     <div class="col-md-6 form-group">
                        <input id="city" type="text" class="form-control" name="city" placeholder="Ciudad" required>
                    </div>

                    <div class="col-md-3 form-group">
                        <input id="cp" type="text" class="form-control" name="cp" placeholder="CP" required>
                    </div>

                    <div class="col-md-3 form-group">
                        <input id="sex" type="text" class="form-control" name="sex" placeholder="Sexo" required>
                    </div>
                    <div class="clearfix"></div>
                <p><strong>Dirección de la empresa</strong></p>
                <p><strong>Selecciona la ubicación exacta de tu negocio moviendo el marcador rojo sobre el mapa.</strong></p>
                <p><strong>Clasificación</strong></p>
                <div> </div>
                <div class="form-group">
                    <div class="col-md-8">
                    <input type="checkbox" name="privacity" value="privacity">
                       Al suscribirte, aceptas nuestras Condiciones de Uso y Venta y nuestro Aviso de Privacidad. 
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                            Registrarme
                        </button>
                    </div>
                </div>
            </form>

          </div>
        </div>

        
        </div>
    </div>
</div>
@endsection
