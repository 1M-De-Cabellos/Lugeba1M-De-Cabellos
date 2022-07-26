@extends('layouts.base')
@section('contenido')
<div class="">
    <div class="row m-0">
        <div class="col-md-5 trapecio">
            <img src="{{ asset('img/logo.jpeg') }}" alt="" class="bg-white logo-login">
        </div>
        <div class="col-md-7">
            <center>
                <ul class="nav d-flex justify-content-center botones">
                    <li id="login" class="nav-item w-50 activado">
                        <a class="nav-link text-white" aria-current="page" href="#" onclick="activadologin()">Iniciar
                            sesión</a>
                    </li>
                    <li id="registrarme" class="nav-item w-50">
                        <a class="nav-link text-white" aria-current="page" href="#"
                            onclick="activadoRegistrarme()">Registrarme</a>
                    </li>
                </ul>
            </center>
            <form id="form-login" class="shadow-sm login-form p-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Correo</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="icofont-email"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Correo" required autocomplete="off">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Contraseña</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="icofont-ui-password"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required
                            autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-white" for="exampleCheck1">Recordar contraseña</label>
                </div>
                <a href="forgot-password" class="text-white">¿Has olvidado tu contraseña?</a>
                <br><br>
                <button type="submit" class="btn btn-outline-info w-100">Acceder</button>
            </form>
            <form id="form-registrarme" class="shadow-sm login-form p-4 d-none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Nombres</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i
                                        class="icofont-sound-wave"></i></span>
                                <input type="text" class="form-control" name="nombres" placeholder="Nombres" required
                                    autocomplete="off" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" title="Solo letras sin numeros">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Apellidos</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i
                                        class="icofont-sound-wave"></i></span>
                                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"
                                    required autocomplete="off" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" title="Solo letras sin numeros">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Fecha de Nacimiento</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i class="icofont-calendar"></i></span>
                                <input type="date" class="form-control" name="fecha_nac" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Télefono</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i class="icofont-phone"></i></span>
                                <input type="text" class="form-control" name="num_telefonico" placeholder="Télefono"
                                    required autocomplete="off" minlength="10" maxlength="10" pattern="^[0-9]+" title="Solo numeros de 10 dígitos">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label text-white">Correo</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i class="icofont-email"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Correo" required
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Contraseña</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i
                                        class="icofont-ui-password"></i></span>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Contraseña" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Repetir contraseña</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i
                                        class="icofont-ui-password"></i></span>
                                <input type="password" class="form-control" name="password1" id="password1"
                                    placeholder="Repetir contraseña" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                <a href="https://1m-de-cabellos-politicas.000webhostapp.com/" target="_blank" class="text-white">Visita nuestros términos y condiciones </a><br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                    <label class="form-check-label text-white" for="defaultCheck1">
                      He leído los términos y condiciones
                    </label>
                    </div>
                <br>
                <button type="submit" class="btn btn-outline-info w-100">Acceder</button>
            </form>
        </div>
    </div>
</div>
<!-- Tostada -->
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="" id="icono"></i>
            <strong class="" id="titulo"></strong>
            <small>Justo ahora</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="mensaje">

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/login.js') }}"></script>
@endsection
