function getServices(){
    var select = $('#servicio_id')[0].children.length;
    if(select <= 1){
        $.ajax({
            'type': 'GET',
            'url': '/getServices',
            success: function(response){
                var respuesta = JSON.parse(response);
                var option = '';
                $.each(respuesta, function(index, valor){
                    option += `<option value='${valor.id}'>${valor.tipo_servicio}</option>`;
                });
                $('#servicio_id').append(option);
            }
        });
    }
}
function getBarbers(){
    var select = $('#barbero_id')[0].children.length;
    var servicio = $('#servicio_id').val();
    $.ajax({
        'type': 'GET',
        'url': '/getServicesPrice/'+servicio,
        success: function(response){
            var datos = JSON.parse(response);
            $('#precio').html('$'+datos[0].precio_servicio+' MXN');
        }
    });
    $.ajax({
        'type': 'GET',
        'url': '/getBarbers/'+servicio,
        success: function(response){
            var respuesta = JSON.parse(response);
            var option = '';
            $.each(respuesta, function(index, valor){
                option += `<option value='${valor.id}'>${valor.nombres} ${valor.apellidos}</option>`;
            });
            $('#barbero_id').html(option);
        }
    });
}
function getPayments(){
    var select = $('#pago_id')[0].children.length;
    if(select <= 1){
        $.ajax({
            'type': 'GET',
            'url': '/getPayments',
            success: function(response){
                var respuesta = JSON.parse(response);
                var option = '';
                $.each(respuesta, function(index, valor){
                    option += `<option value='${valor.id}'>${valor.tipo_pago}</option>`;
                });
                $('#pago_id').append(option);
            }
        });
    }
}
function getSchedules(){
    var fecha = $('#fecha').val();
    const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
    const dias_semana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
    var dia = new Date(fecha+'T00:00:00');
    $('#textFecha').html(dias_semana[dia.getDay()] + ', ' + dia.getDate() + ' de ' + meses[dia.getMonth()] + ' de ' + dia.getUTCFullYear());
    let diaEspanol = dias_semana[dia.getDay()];
    var barbero = $('#barbero_id').val();
    $.ajax({
        'type': 'GET',
        'url': '/getSchedules/'+fecha+'/'+barbero+'/'+diaEspanol,
        success: function(response){
            var respuesta= JSON.parse(response);
            var option = '';
            var objDia;
            if(respuesta.length == 0){
                option += `<option value='' disabled selected>Sin horarios disponibles</option>`;
            }else{
                $.each(respuesta, function(index, valor){
                    diaEspanol
                    switch(diaEspanol){
                        case 'lunes':
                            objDia = valor.lunes;
                            break;
                        case 'martes':
                            objDia = valor.martes;
                            break;
                        case 'miercoles':
                            objDia = valor.miercoles;
                            break;
                        case 'jueves':
                            objDia = valor.jueves;
                            break;
                        case 'viernes':
                            objDia = valor.viernes;
                            break;
                        case 'sabado':
                            objDia = valor.sabado;
                            break;
                        case 'domingo':
                            objDia = valor.domingo;
                            break;
                                
                    }
                    option += `<option value='${valor.id}'>${objDia}</option>`;
                });
            }
            
            $('#horario_id').html(option);
        }
    });
}
$('#form-add-citas').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'POST',
        'url': '/add-citas',
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
                $('#form-add-citas').trigger('reset');
            }
        }
    });
});