@extends('layouts.base')

@section('title_page', 'Login')

@section('body', 'login-page')

@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" width="50" height="50" class="align-center img-circle elevation-2" style="opacity: .8">
                <h3 class="brand-text">Sistema Administrativo <br> de Grupo vida</h3>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingrese sus credenciales para iniciar sesión</p>

                <form action="{{url('./login')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        @if($errors->has('email'))
                            <p class="text-danger form-control-feedback">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        @if($errors->has('password'))
                            <p class="text-danger form-control-feedback">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <br>
                <p class="mb-1">
                    <a href="forgot-password.html">Olvide mi contraseña</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endSection()
