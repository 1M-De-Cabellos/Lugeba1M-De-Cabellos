<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/config.css') }}">
    <link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">
    <link href="http://fonts.cdnfonts.com/css/elizabeth-script" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="">
        <div class="row m-0">
            <div class="col-md-5 trapecio">
                <img src="{{ asset('img/logo.jpeg') }}" alt="" class="bg-white logo-login">
            </div>
            <div class="col-md-7">
                <center>
                    <ul class="nav d-flex justify-content-center botones">
                        <li id="login" class="nav-item w-50 activado">
                          <a class="nav-link text-white" aria-current="page" href="#" onclick="activadologin()">Iniciar sesión</a>
                        </li>
                        <li id="registrarme" class="nav-item w-50">
                            <a class="nav-link text-white" aria-current="page" href="#" onclick="activadoRegistrarme()">Registrarme</a>
                        </li>
                    </ul>
                </center>
                <form id="form-login" class="shadow-sm login-form p-4">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-white">Correo</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="icofont-email"></i></span>
                        <input type="email" class="form-control" placeholder="Correo" required autocomplete="off">
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Contraseña</label>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon2"><i class="icofont-ui-password"></i></span>
                          <input type="password" class="form-control" placeholder="Contraseña" required autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label text-white" for="exampleCheck1">Recordar contraseña</label>
                    </div>
                    <button type="submit" class="btn btn-outline-info w-100">Acceder</button>
                </form>
                <form id="form-registrarme" class="shadow-sm login-form p-4 d-none">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-white">Nombres</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-sound-wave"></i></span>
                                  <input type="text" class="form-control" placeholder="Nombres" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-white">Apellidos</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-sound-wave"></i></span>
                                  <input type="text" class="form-control" placeholder="Apellidos" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-white">F.Nacimiento</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-calendar"></i></span>
                                  <input type="date" class="form-control" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label text-white">Télefono</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-phone"></i></span>
                                  <input type="text" class="form-control" placeholder="Télefono" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label text-white">Correo</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-mail"></i></span>
                                  <input type="email" class="form-control" placeholder="Correo" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-white">Contraseña</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-ui-password"></i></span>
                                  <input type="password" class="form-control" placeholder="Contraseña" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-white">Repetir contraseña</label>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon2"><i class="icofont-ui-password"></i></span>
                                  <input type="password" class="form-control" placeholder="Repetir contraseña" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-info w-100">Acceder</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
