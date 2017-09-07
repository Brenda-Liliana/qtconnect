@extends('layouts.blank')

@section('content')
<div style="background: url({{ URL::to('images/source.gif')}}); padding: 0px 0px 200px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel-transparent">
                    <div class="panel-heading"><img src="{{ URL::to('images/logo-qt-connect.png')}}" style="    width: 50%;"></div>
                    <div class="panel-body" style="border: solid 1px #fff;">
                        <p class="register-title uppercase">Iniciar Sesión</p>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="color-white col-md-12">Dirección de correo electronico</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="EMail" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="color-white col-md-6">Password</label>
                                <a class="btn btn-link col-md-6" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label class="color-white">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme en este equipo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Iniciar Sesión
                                    </button>

                                    
                                </div>
                            </div>
                        </form>
                        <fieldset>
                            <legend class="color-white">¿Eres nuevo en QtConnect?</legend>
                        </fieldset>
                         <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn">Soy Nuevo</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
