@extends('layouts.base-dashboard')
@section('contenido')
<script src="https://js.stripe.com/v3/"></script>
<div class="row">
    <div class="col-md-6">
        <h1>AGENDAR CITAS</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <h1 id="textFecha"></h1>
    </div>
</div>
<hr>
<form action="" id="payment-form">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
              <input type="hidden" name="tipo" id="tipo">
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
                    <select class="form-control" name="pago_id" id="pago_id" required onclick="getPayments()" onchange="cardPayment()">
                        <option value="" disabled selected>Elige una opción</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="col-payment">
            <div class="mb-3">
                <div class="form-row">
                    <label for="card-element">
                    Tarjeta de Credito o Debito
                    </label>
                    <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                    </div>
            
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
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
@section('script')
  <script>
    $(document).ready(function(){
      $('#card-element').addClass('w-100');
      $('#col-payment').addClass('d-none');
    })
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51LQifsGZBygSgYdmOcirjW7BRfsTP70V7nAkTMREF1hV1iocAEUsGkrKDzjo6ITdZXkkU4Y49djxfig9ywwB5irz00bNHMiIUR');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      if($('#pago_id').val() == '1'){
        $('#tipo').val(1);
        var data = $('#payment-form').serialize();
        $.ajax({
            'type': 'POST',
            'url': '/add-citas',
            'data': data,
            success: function(response){
                var respuesta = JSON.parse(response);
                debugger;
                $('#icono').addClass(respuesta.icono+' '+respuesta.color);
                $('#titulo').html(respuesta.titulo);
                $('#titulo').addClass('me-auto '+respuesta.color);
                $('#mensaje').html(respuesta.mensaje);
                const toastLiveExample = document.getElementById('liveToast');
                const toast = new bootstrap.Toast(toastLiveExample);
                toast.show();
                if(respuesta.icono == 'icofont-ui-check'){
                    $('#payment-form').trigger('reset');
                }
            }
        });
      }else{
        $('#tipo').val(2);
        stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
        });
      }
      
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      var data = $('#payment-form').serialize();
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
                  $('#payment-form').trigger('reset');
              }
          }
      });
    }
  </script>
@endsection