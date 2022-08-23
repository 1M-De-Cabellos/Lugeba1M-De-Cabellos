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
                option += `<option value='${valor.id}' style="background:url(../img/${valor.foto}) no-repeat center left; padding-left:20px;">${valor.nombres} ${valor.apellidos}</option>`;
            });
            $('#barbero_id').html('<option value="" disabled selected>Elige una opción</option>');
            $('#barbero_id').append(option);
        }
    });
}
function getBarberPhoto(){
    var barbero = $('#barbero_id').val();
    $.ajax({
        'type': 'GET',
        'url': '/getBarberPhoto/'+barbero,
        success: function(response){
            var respuesta = JSON.parse(response);
            $('#foto-barber').prop('src' ,'../img/'+respuesta[0].foto);
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
    var barbero = $('#barbero_id').val();
    var diaEspanol = dias_semana[dia.getDay()];
    if(fecha != ''){
        $('#textFecha').html(dias_semana[dia.getDay()] + ', ' + dia.getDate() + ' de ' + meses[dia.getMonth()] + ' de ' + dia.getUTCFullYear());
    }
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
                    if(objDia != null){
                        option += `<option value='${valor.id}'>${objDia}</option>`;
                    }
                });
            }
            
            $('#horario_id').html(option);
        }
    });
}
function cardPayment(){
    let tipo_pago = $('#pago_id').val();
    if(tipo_pago == '1'){
        let tieneClase = $("#col-payment").hasClass("d-none");
        if(!tieneClase){
            $('#col-payment').addClass('d-none');
        }
    }else{
        let getPrecio = $('#precio').html().split(' ')[0];
        let precio = parseInt(getPrecio.slice(1));
        let = totalPagar = precio + ((precio * 3.7)/100 + 5);
        $('#precio').html(totalPagar);
        $('#col-payment').removeClass('d-none');
    }
    
}
function getCitas(filtro){
    $.ajax({
        'type': 'GET',
        'url': '/getCitas/'+filtro,
        success: function(response){
            var respuesta = JSON.parse(response);
            var row = '';
            var estado ='';
            var objDia = '';
            const dias_semana = ['domingo', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado'];
            $.each(respuesta, function(index, valor){
                filtro;
                var dia = new Date(valor.fecha+'T00:00:00');
                var diaEspanol = dias_semana[dia.getDay()];
                switch(diaEspanol){
                    case 'lunes':
                        objDia = valor.horarios.lunes;
                        break;
                    case 'martes':
                        objDia = valor.horarios.martes;
                        break;
                    case 'miercoles':
                        objDia = valor.horarios.miercoles;
                        break;
                    case 'jueves':
                        objDia = valor.horarios.jueves;
                        break;
                    case 'viernes':
                        objDia = valor.horarios.viernes;
                        break;
                    case 'sabado':
                        objDia = valor.horarios.sabado;
                        break;
                    case 'domingo':
                        objDia = valor.horarios.domingo;
                        break;
                }
                switch(valor.estado){
                    case 'P':
                        estado = '<span class="badge text-warning border border-warning">Pendiente</span>';
                        break;
                    case 'F':
                        estado = '<span class="badge text-success border border-success">Finalizados</span>';
                        break;
                    case 'N':
                        estado = '<span class="badge text-danger border border-danger">No asistidas</span>';
                        break;
                    case 'C':
                        estado = '<span class="badge text-secondary border border-secondary">Cancelada</span>';
                        break;
                }
                if(filtro == 'P'){
                    let getFecha = new Date();
                    let hoy = new Date(getFecha.toISOString().split('T')[0]);
                    let fecha = new Date(valor.fecha);
                    let resta = fecha - hoy;
                    let dias = resta/(1000*60*60*24);
                    if(dias >= 1){
                        var boton = `<button type="button" class="btn btn-danger" onclick="cancelar(${valor.id})">Cancelar</button>`;
                    }else{
                        var boton = '';
                    }
                    row += `<tr> <td>${valor.servicios.tipo_servicio}</td> <td>${valor.barberos.nombres}</td> <td>${valor.pagos.tipo_pago}</td> <td>${valor.fecha}</td> <td>${objDia}</td> <td>$${valor.servicios.precio_servicio} MXN</td> <td>${estado}</td> <td>${boton}</td></tr>`
                }else{
                    row += `<tr> <td>${valor.servicios.tipo_servicio}</td> <td>${valor.barberos.nombres}</td> <td>${valor.pagos.tipo_pago}</td> <td>${valor.fecha}</td> <td>${objDia}</td> <td>$${valor.servicios.precio_servicio} MXN</td> <td>${estado}</td> </tr>`
                }
            });
            $('#table-citas tbody').html(row);
            $("#table-citas").paginationTdA({
                elemPerPage: 5
            });
        }
    })
}
function cancelar(id){
    // $('#modal-title').html('Advertencia!!!');
    // $('#modal-title').addClass('icofont-warning');
    // $('#modal-title').addClass('text-warning');
    // $('#modal-text').html('Esta seguro de cancelar la cita, si realizo el pago con targeta, el costo por el servicio no se le devolvera');
    // $('#footer-botones').append('<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirmCancel()">Confirmar</button>');
    // $('#exampleModal').modal('show');
    $.ajax({
        'type': 'GET',
        'url': 'cancelar/'+id,
        success:function(){
            $('#modal-title').html('Cita cancelada');
            $('#modal-title').addClass('icofont-check');
            $('#modal-title').addClass('text-success');
            $('#modal-text').html('La cita ha sido cancelada');
            $('#exampleModal').modal('show');
            getCitas('P');
        }
    })
}
