@extends('layouts.base')
@section('contenido')
<div class="">
    <div class="row m-0">
        <div class="col-md-5 trapecio">
            <img src="{{ asset('img/logo.jpeg') }}" alt="" class="bg-white logo-login">
        </div>
        <div class="col-md-7">
            <br>
            <br>
            <br>
            <br>
            <form id="forgot-password" class="shadow-sm login-form p-4">
                <center class="text-white"><h1>Recuperar contraseña</h1></center>
                <br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Correo</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="icofont-email"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Correo" required autocomplete="off">
                    </div>
                </div>
                <a href="/login" class="text-white">Volver</a>
                <br><br>
                <button type="submit" class="btn btn-outline-info w-100">Enviar contraseña</button>
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
