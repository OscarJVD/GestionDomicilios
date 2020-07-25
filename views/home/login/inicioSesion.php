<body class="fondo-hueso border-bottom">
  <div class="fondo-blanco border-bottom">
    <section class="container contenedor_sin_relleno">
      <section class="row justify-content-center">
        <div class="col-12 solumobil-logo justify-content-center d-flex">
          <img src="assets/img/log.jpg" class="imagen-logo" alt="logo">
        </div>
      </section>
    </section>


    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="miModal" tabindex="-1" role="dialog"
      aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12 text-center coltitle">Registrarte</div>
                <div class="col-md-12 text-center">Es sencillo y rápido</div>
              </div>
              <hr>
              <div class="row justify-content-center">
                <form class="form" id="f1" method="post" onsubmit="validarSinRecargo();">
                  <!--ESTO SE DEBE QUITAR Y MEJOR USAR JS-->

                  <div id="error" class="justify-content-center col-10 alert alert-danger esconder" role="alert">
                    <span class="">
                      La contraseña de verificación no coincide. ¡Vuelve a intentar!
                    </span>
                  </div>

                  <div id="ok" class="justify-content-center col-10 alert alert-success esconder" role="alert">
                    Por favor verifica tu usuario mediante tu correo electrónico(Procesando formulario ... )
                  </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-10 col-xs-12 col-lg-10 col-md-10 col-sm-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control focus" placeholder="Correo electrónico" required="">
                  </div>
                </div>
                <div class="col-10 col-xs-12 col-lg-10 col-md-10 col-sm-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="password" id="pass1" class="form-control" placeholder="Contraseña" required>
                  </div>
                </div>
                <div class="col-10 col-xs-12 col-lg-10 col-md-10 col-sm-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-check-double"></i>
                      </span>
                    </div>
                    <input type="password" id="pass2" class="form-control" placeholder="Confirmar contraseña" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-sm-10 ">
                  <p class="politica">Al hacer clic en "Registrarte", aceptas nuestros terminos y condiciones <a
                      href="views/home/login/pp.php"> Politica de privacidad</a>, la Política de datos y la Política de
                    cookies.</p>
                  <div class="row text-center modal-footer">
                    <div class="col-12 col-md-12 col-sm-12 text-center">
                      <button type="submit" id="registro" class="btn btn-success">Registrarte</button>
                      </form>
                      <!--ESTO SE DEBE QUITAR Y MEJOR USAR JS-->
                      <p id="respu"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="col-12 col-sm-12 col-md-12 justify-content-center d-flex">
    <form action="?controller=login&method=login" method="post"
      class="form-container col-3 h-100 justify-content-center text-center">
      <?php if (isset($error['errorMessage'])) { ?>
      <div class="alert danger alert-dismissable text-left alert-width col-12 texto-pequeño1" role="alert">
        <button class="close" data-dismiss="alert">&times;</button>
        <p class="text-light"><?php echo $error['errorMessage']; ?></p>
      </div>
      <?php } ?>
      <div class="form-group col-10 offset-1 pt-1 text-fondo">
        <input type="email" name="correo" required
          class="form-control-sm col-12 animated  animate__backInLeft animate__fast" 
          placeholder="Correo electrónico"
          autofocus>
        <small class="form-text text-light text-center politica">Nosotros nunca compartimos tu correo con nadie mas
        </small>
      </div>
      <div class="form-group col-10 offset-1 d-flex justify-content-center">
        <input type="password" name="clave" class="form-control-sm col-12 animated  animate__backInRight animate__fast"
          placeholder="Contraseña" required>
      </div>
      <div class="col-12 mt-4 form-group justify-content-center d-flex">
        <button type="submit"
          class="btn btn-primary col-9 btn-block animated animate__fast animate__fadeIn btn-sm">Iniciar
          Sesión</button>
      </div>

      <div class="border-bottom">
        <p></p>
      </div>
      <div class="col-12 form-group mt-3 justify-content-center d-flex">
        <span class="btn btn-success col-9 btn-sm form-control animated animate__slower animate__fadeIn"
          data-toggle="modal" data-target="#miModal">
          <i class="">Crear cuenta nueva</i>
        </span>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-sm-10">
          <a href="?controller=home&method=Index"
            class="btn btn-danger btn-sm vinculo rounded-circle animated animate__faster animate__fadeInLeft">Volver</a>
        </div>
      </div>
    </form>
  </section>
  <!-- <div class="paleta">
    <img src="assets/img/1.ico" alt="Solumovil" width="100" height="100">
  </div> -->
</body>

</html>

<script>
  // EVITA COPIA Y PEGA EN EL INPUT DE CLAVE

  $(document).ready(function () {

    $("#pass1").on('copy', function (e) {
      e.preventDefault();
    })

    $("#pass2").on('copy', function (e) {
      e.preventDefault();
    })
  });

  window.onload = function () {
    let inputPass1 = document.getElementById('pass1');
    let inputPass2 = document.getElementById('pass2');

    inputPass1.onpaste = function (e) {
      e.preventDefault();
      Swal.fire({
        title: 'Acción denegada',
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      });
    }

    inputPass2.onpaste = function (e) {
      e.preventDefault();
      Swal.fire({
        title: 'Acción denegada',
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      });
    }

  };



  // EVITAR RECARGO

  $(function () {

    var form = $('#f1');

    form.submit(function (e) {
      $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        success: function (data) {
          // alert("ok");
        },
        timeout: 20000
      });

      e.preventDefault();
    });
  });

  function validarSinRecargo() {

    let pass1 = document.getElementById('pass1').value;
    let pass2 = document.getElementById('pass2').value;

    let datac = 'clave1=' + pass1 + "&clave2=" + pass2;

    // Verificamos si las constraseñas no coinciden 
    if (pass1 != pass2) {

      // Si las constraseñas no coinciden mostramos un mensaje 
      document.getElementById("error").classList.add("desenfundar");

      return false;
    } else {

      // Si las contraseñas coinciden ocultamos el mensaje de error
      document.getElementById("error").classList.remove("desenfundar");

      // Mostramos un mensaje mencionando que las Contraseñas coinciden 
      document.getElementById("ok").classList.remove("esconder");

      // Desabilitamos el botón de registro 
      document.getElementById("registro").disabled = true;

      //Refrescamos la página (Simulación de envío del formulario) 
      setTimeout(function () {
        location.reload();
      }, 20000);

      return true;
    }

    return false;
  }


  // function verificarClave() {

  //               // e.preventDefault();
  //           // Obntenemos los valores de los campos de contraseñas 

  //           // let datac = 'clave1: ' + pass1 + " clave2: " + pass2;

  //           // $.ajax({
  //           //     type: 'post',
  //           //     url: 'inicioSesion.php',
  //           //     data: datac,
  //           //     success:function(resp){
  //           //       $("#respu").html(resp);
  //           //     }
  //           // });

  //           // return false;




  //         }
</script>