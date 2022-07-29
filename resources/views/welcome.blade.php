@extends('layouts.base-dashboard')
@section('contenido')
<div class="row">
    <div class="col-md-6">
        <h1>AGENDAR CITAS</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <h1 id="textFecha"></h1>
    </div>
</div>
<hr>
<form action="" id="form-add-citas">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Tipo de servicio</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="icofont-server"></i></span>
                    <select class="form-control" name="servicio_id" id="servicio_id" required onclick="getServices()"
                        onchange="getBarbers()">
                        <option value="" disabled selected>Elige una opción</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Barbero</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="icofont-beard"></i></span>
                    <select class="form-control" name="barbero_id" id="barbero_id" required onchange="getSchedules()">
                        <option value="" disabled selected>Elige una opción</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Fecha</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="icofont-calendar"></i></span>
                    <input type="date" class="form-control" name="fecha" id="fecha" required onchange="getSchedules()">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Horarios disponibles</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="icofont-clock-time"></i></span>
                    <select class="form-control" name="horario_id" id="horario_id" required>
                        <option value="" disabled selected>Elige una opción</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Tipo de pago</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="icofont-money"></i></span>
                    <select class="form-control" name="pago_id" id="pago_id" required onclick="getPayments()">
                        <option value="" disabled selected>Elige una opción</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2>Total: <b id="precio"></b></h2>
    <br>
    <button type="submit" class="btn btn-outline-dark text-white p-4">Realizar cita</button>
</form>
@endsection
