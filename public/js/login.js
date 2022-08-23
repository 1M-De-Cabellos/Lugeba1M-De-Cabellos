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
$('#form-registrarme').submit(function(e){
    e.preventDefault();
    $("#icono").removeClass();
    $("#titulo").removeClass();
    var pass = $('#password').val();
    var pass1 = $('#password1').val();
    if(pass == pass1){
        var data = $(this).serialize();
        $.ajax({
            'type': 'POST',
            'url': '/add-clientes',
            'data': data,
            success: function(response){
                var respuesta = JSON.parse(response);
                $('#icono').addClass(respuesta.icono+' '+respuesta.color);
                $('#titulo').html(respuesta.titulo);
                $('#titulo').addClass('me-auto '+respuesta.color);
                $('#mensaje').html(respuesta.mensaje);
                const toastLiveExample = document.getElementById('liveToast');
                const toast = new bootstrap.Toast(toastLiveExample);
                toast.show();
                if(respuesta.icono == 'icofont-ui-check'){
                    $('#form-registrarme').trigger('reset');
                    activadologin();
                }
            }
        });
    }else{
        $('#icono').addClass('icofont-warning-alt'+' text-warning');
        $('#titulo').html(' Ops!!!');
        $('#titulo').addClass('me-auto text-warning');
        $('#mensaje').html('Las contraseñas no coinciden');
        const toastLiveExample = document.getElementById('liveToast');
        const toast = new bootstrap.Toast(toastLiveExample);
        toast.show();
    }
});
$('#form-login').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'POST',
        'url': '/login',
        'data': data,
        success: function(response){
            var respuesta = JSON.parse(response);
            $('#icono').addClass(respuesta.icono+' '+respuesta.color);
            $('#titulo').html(respuesta.titulo);
            $('#titulo').addClass('me-auto '+respuesta.color);
            $('#mensaje').html(respuesta.mensaje);
            const toastLiveExample = document.getElementById('liveToast');
            const toast = new bootstrap.Toast(toastLiveExample);
            toast.show();
            if(respuesta.icono == 'icofont-ui-check'){
                window.location.href = '/';
            }
        }
    });
});
$('#forgot-password').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'POST',
        'url': '/recoverPassword',
        'data': data,
        success: function(response){
            var respuesta = JSON.parse(response);
            $('#icono').addClass(respuesta.icono+' '+respuesta.color);
            $('#titulo').html(respuesta.titulo);
            $('#titulo').addClass('me-auto '+respuesta.color);
            $('#mensaje').html(respuesta.mensaje);
            const toastLiveExample = document.getElementById('liveToast');
            const toast = new bootstrap.Toast(toastLiveExample);
            toast.show();
            if(respuesta.icono == 'icofont-ui-check'){
                $('#forgot-password').trigger('reset');
            }
        }
    });
});