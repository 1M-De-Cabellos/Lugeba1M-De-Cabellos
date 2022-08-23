<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyResume Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/boxicons.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/template.css') }}" rel="stylesheet">
  <link href="{{ asset('icofont/icofont.min.css') }}" rel="stylesheet">
  <script src="https://js.stripe.com/v3/"></script>
  <!-- =======================================================
  * Template Name: MyResume - v4.8.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="icofont-ui-home"></i> <span>Inicio</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="icofont-building-alt"></i> <span>Nosotros</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="icofont-shield"></i> <span>Políticas</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="icofont-ui-calendar"></i> <span>Agendar</span></a></li>
        <li><a href="#services" class="nav-link scrollto" onclick="getCitas('P');"><i class="icofont-folder"></i> <span>Historial</span></a></li>
        <li><a href="/logout" class="nav-link scrollto"><i class="icofont-logout"></i> <span>Cerra sesión</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Lugeba 1M de Cabellos</h1>
      <p>Realizamos: <span class="typed" data-typed-items="Corte de cabello, Corte de barba, Depilado de cejas, Planchado"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nosotros</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat tempore enim eaque cumque praesentium optio, hic non unde consectetur, id pariatur aliquid vero voluptates possimus totam, rerum delectus laboriosam esse.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset('img/logo-negro.jpeg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Lugeba 1M de Cabellos</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Fundación:</strong> <span>1 Mayo 2022</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span>www.lugeba1mcabellos.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefono:</strong> <span>+52 919 151 3420</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Ocosingo, Chiapas</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span>lugebacontacto@lugeba.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Barberias asociadas:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Dias de servicio:</strong> <span>Lunes a domingo</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Hoarrios:</strong> <span>09:00 AM - 06:00 PM</span></li>
                </ul>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit perspiciatis maxime voluptas incidunt atque eos est tempore temporibus deserunt facilis. Optio voluptas neque illo omnis esse deleniti, quasi dicta ratione?
            </p>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="section-title">
            <h2>MISION</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat tempore enim eaque cumque praesentium optio, hic non unde consectetur, id pariatur aliquid vero voluptates possimus totam, rerum delectus laboriosam esse.</p>
        </div>
        <div class="section-title">
            <h2>VISION</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat tempore enim eaque cumque praesentium optio, hic non unde consectetur, id pariatur aliquid vero voluptates possimus totam, rerum delectus laboriosam esse.</p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>POLÍTICA DE PRIVACIDAD</h2>
          <p>La presente Política de Privacidad establece los términos en que usa y protege la información que es proporcionada por sus usuarios al momento de utilizar 1M De Cabellos. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo, esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="resume-item pb-0">
              <h4>Información que es recogida</h4>
              <p><em>Nuestro sitio web podrá recoger información personal que nos sea de utilidad, como por ejemplo: Nombre, información de contacto, como su dirección de correo electrónico, numero telefónico e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar alguna cancelación de citas, devoluciones y/o búsqueda para poder procesar acciones necesarias requeridas.</em></p>
            </div>
            <div class="resume-item">
              <h4>Cookies</h4>
              <p><em>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</em></p>
              <p><em>Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente noticias. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</em></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="resume-item">
              <h4>Uso de la información recogida</h4>
              <p><em>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios. Es posible que sean enviados correos electrónicos para poder recuperar su contraseña, dicho correo puede que se muestre en spam (no se envía virus o algún archivo dañino para su dispositivo) o en bandeja de entrada, en este correo generará un código de verificación pues este será como una llave para poder restablecer una contraseña propuesta por usted.
                Está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.
                </em></p>
            </div>
            <div class="resume-item">
              <h4>Enlaces a Terceros</h4>
              <p><em>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</em></p>
            </div>
            <div class="resume-item">
                <h4>Control de su información personal</h4>
                <p><em>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</em></p>
                <p><em>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</em></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Agendar citas</h2>
        </div>
        <div class="row">
        </div>
        <form action="" id="payment-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                              <input type="hidden" name="tipo" id="tipo">
                                <label for="exampleInputEmail1" class="form-label">Tipo de servicio</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon2"><i class="icofont-server"></i></span>
                                    <select class="form-control" name="servicio_id" id="servicio_id" required onclick="getServices()"
                                        onchange="getBarbers()">
                                        <option value="" disabled selected>Elige una opción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Barbero</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon2"><i class="icofont-beard"></i></span>
                                    <select class="form-control" name="barbero_id" id="barbero_id" required onchange="getSchedules(); getBarberPhoto()">
                                        <option value="" disabled selected>Elige una opción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon2"><i class="icofont-calendar"></i></span>
                                    <input type="date" class="form-control" name="fecha" id="fecha" required onchange="getSchedules()">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Horarios disponibles</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon2"><i class="icofont-clock-time"></i></span>
                                    <select class="form-control" name="horario_id" id="horario_id" required>
                                        <option value="" disabled selected>Elige una opción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipo de pago</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon2"><i class="icofont-money"></i></span>
                                    <select class="form-control" name="pago_id" id="pago_id" required onclick="getPayments()" onchange="cardPayment()">
                                        <option value="" disabled selected>Elige una opción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="col-payment">
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
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 mb-3">
                        <img src="" id="foto-barber" class="img-thumbnail" width="200">
                    </div>
                    <div class="col-md-12 mb-3">
                        <h1 id="textFecha"></h1>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h2>Total: <b id="precio"></b></h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary p-4 w-100">Realizar cita</button>
                    </div>
                </div>
            </div>
        </form>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>historial de citas</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-2">
              <input type="checkbox" name="filtro" class="btn-check filtro" id="canceladas" autocomplete="off" onclick="getCitas('C')">
              <label class="btn btn-outline-primary" for="canceladas">Canceladas</label><br>
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
                        <th colspan="2">Estado</th>
                    </tr>
                </thead>
                <tbody>
        
                </tbody>
            </table>
        </div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Lugeba 1M de Cabellos</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, aliquam aliquid suscipit doloribus consectetur quo porro omnis magni excepturi tenetur cum atque ratione molestiae veniam? Doloremque natus quis hic dolore.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Lugeba</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="icofont-rounded-up"></i></a>


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-text">
        
      </div>
      <div class="modal-footer" id="footer-botones">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/glightbox.min.js') }}"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/typed.min.js') }}"></script>
  <script src="{{ asset('js/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/citas.js') }}"></script>
    <script src="{{ asset('js/paginate.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
      function closeModal(){
        $('#exampleModal').modal('hide');
      }
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
                $('#modal-title').html(respuesta.titulo);
                $('#modal-title').addClass(respuesta.icono);
                $('#modal-title').addClass(respuesta.color);
                $('#modal-text').html(respuesta.mensaje);
                $('#exampleModal').modal('show');
                
                if(respuesta.icono == 'icofont-ui-check'){
                    $('#payment-form').trigger('reset');
                    $('#precio').html('');
                    $('#textFecha').html('');
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
              $('#modal-title').html(respuesta.titulo);
                $('#modal-title').addClass(respuesta.icono);
                $('#modal-title').addClass(respuesta.color);
                $('#modal-text').html(respuesta.mensaje);
                $('#exampleModal').modal('show');
              if(respuesta.icono == 'icofont-ui-check'){
                  $('#payment-form').trigger('reset');
                  $('#precio').html('');
                  $('#textFecha').html('');
              }
          }
      });
    }
  </script>
</body>

</html>