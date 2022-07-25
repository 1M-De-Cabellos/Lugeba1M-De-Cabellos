function activadologin(){
    $('#login').addClass('activado');
    $('#registrarme').removeClass('activado');
    $('#form-login').removeClass('d-none');
    $('#form-registrarme').addClass('d-none');

}
function activadoRegistrarme(){
    $('#login').removeClass('activado');
    $('#registrarme').addClass('activado');
    $('#form-login').addClass('d-none');
    $('#form-registrarme').removeClass('d-none');
}