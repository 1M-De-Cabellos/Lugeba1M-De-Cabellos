@extends('layouts.base-dashboard')
@section('contenido')
<div class="row">
    <div class="col-md-6">
        <h1>Historial de citas</h1>
    </div>
    <div class="col-md-2">
        <input type="checkbox" name="filtro" class="btn-check filtro" id="pendientes" autocomplete="off" checked onclick="getCitas('P')">
        <label class="btn btn-outline-primary" for="pendientes">Pendientes</label><br>
    </div>
    <div class="col-md 2">
        <input type="checkbox" name="filtro" class="btn-check filtro" id="finalizadas" autocomplete="off" onclick="getCitas('F')">
        <label class="btn btn-outline-primary" for="finalizadas">Finalizadas</label><br>
    </div>
    <div class="col-md-2">
        <input type="checkbox" name="filtro" class="btn-check filtro" id="faltas" autocomplete="off" onclick="getCitas('N')">
        <label class="btn btn-outline-primary" for="faltas">No asistidas</label><br>
    </div>
</div>
<hr>
<div class="table-responsive">
    <table class="table" id="table-citas">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Barbero</th>
                <th>Tipo de pago</th>
                <th>Fecha</th>
                <th>Horario</th>
                <th>Precio</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        getCitas('P');
    })
    $('#liveToast').addClass('d-none');
    //seleccionar solo un checkbox
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
        } else {
        $box.prop("checked", false);
        }
    });
</script>
@endsection