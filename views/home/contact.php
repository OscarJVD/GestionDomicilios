<script type="text/javascript">
    /**
     * Funcion que devuelve true o false dependiendo de si la fecha es correcta.
     * Tiene que recibir el dia, mes y año
     */
    function isValidDate(day, month, year) {
        var dteDate;

        // En javascript, el mes empieza en la posicion 0 y termina en la 11 
        //   siendo 0 el mes de enero
        // Por esta razon, tenemos que restar 1 al mes
        month = month - 1;
        // Establecemos un objeto Data con los valore recibidos
        // Los parametros son: año, mes, dia, hora, minuto y segundos
        // getDate(); devuelve el dia como un entero entre 1 y 31
        // getDay(); devuelve un num del 0 al 6 indicando siel dia es lunes,
        //   martes, miercoles ...
        // getHours(); Devuelve la hora
        // getMinutes(); Devuelve los minutos
        // getMonth(); devuelve el mes como un numero de 0 a 11
        // getTime(); Devuelve el tiempo transcurrido en milisegundos desde el 1
        //   de enero de 1970 hasta el momento definido en el objeto date
        // setTime(); Establece una fecha pasandole en milisegundos el valor de esta.
        // getYear(); devuelve el año
        // getFullYear(); devuelve el año
        dteDate = new Date(year, month, day);

        //Devuelva true o false...
        return ((day == dteDate.getDate()) && (month == dteDate.getMonth()) && (year == dteDate.getFullYear()));
    }

    /**
     * Funcion para validar una fecha
     * Tiene que recibir:
     *  La fecha en formato ingles yyyy-mm-dd
     * Devuelve:
     *  true-Fecha correcta
     *  false-Fecha Incorrecta
     */
    function validate_fecha(fecha) {
        var patron = new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");

        if (fecha.search(patron) == 0) {
            var values = fecha.split("-");
            if (isValidDate(values[2], values[1], values[0])) {
                return true;
            }
        }
        return false;
    }

    /**
     * Funcion que es ejecutada desde el botón de validar
     */
    function validar() {
        var fecha = document.getElementById("validar_fecha").value;
        if (validate_fecha(fecha) == true)
            document.getElementById("result").innerHTML = "La fecha " + fecha + " es correcta";
        else
            document.getElementById("result").innerHTML = "La fecha " + fecha + " es incorrecta";
    }
</script>
<div class="content-page cover-background font-content-contact">
    <section class="contact-form-info section">
        <!-- <div class="row p-2 justify-content-center text-center">
            <div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-0">
                <a href="?controller=home&method=contactBetter" class="text-center btn btn-light text-dark">Contactanos</a>
            </div>
        </div> -->
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="row">
                    <div class="col-12 ">
                        <a href="mailto:vargas.rodolfo0627@gmail.com">
                            <address class="bg-dark border-light border p-2 text-center rounded-top rounded-bottom m-3">
                                <p class="text-light">Click aquí para escribirnos
                                    un
                                    correo.</p>
                            </address>
                        </a>
                    </div>
                </div>
                <div class="row ml-3 mx-1">
                    <div class="col-8 well border-danger rounded">
                        <iframe class="p-3 pt-4 pr-4 pl-3"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.3288175494304!2d-74.13979488523762!3d4.7128267965769455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f834dd949a43f%3A0x1220eb0d864c1c52!2sSolumovil%20Servicio%20Tecnico!5e0!3m2!1ses!2sco!4v1593618475710!5m2!1ses!2sco"
                            width="600" height="420" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                    <div class="col-4">
                        <div class="well p-4 rounded border-danger ">
                            <h3 class="text-center">Dirección
                            </h3>
                            <address>
                                <strong class="text-danger">Pais: </strong> Colombia
                                <p></p>
                                <strong class="text-danger">Dirección: </strong>Cra. 116c #66a-16
                                <p></p>
                                <strong class="text-danger">Ciudad: </strong>Bogotá<p></p>
                                <strong class="text-danger">Correos: </strong>
                                <li class="border-light border-top p-2 mt-3">vargas.rodolfo0627<p></p>@gmail.com</li> 
                                <li class="border-light border-top border-bottom p-2">ojvargas30 <p></p> 
                                    @misena.edu.co</li> 
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="well moreinfo rounded text-center border-danger">
                        <p class="h4 text-light bg-dark p-3 rounded-bottom border">
                            ¡En nuestras redes sociales o diligenciando el formulario
                            de contacto en la parte inferior podras
                            encontrar mas información de contacto
                            en donde te contestaremos con absoluta rapidez!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-xs-12 col-md-4 col-md-push-8">
                    <div class="well p-3 mt-4 rounded rounded-lg border-danger">
                        <a class="text-success"
                            href="https://api.whatsapp.com/send?phone=573133043714&text=%C2%A1Hola!%20Quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20y%20productos%20tecnologicos%20que%20ofrece">
                            <h2 class="tittles-pages text-center">
                                <i class="fab fa-whatsapp p-5 fa-2x wtp"></i>
                            </h2>
                        </a>
                        <p class="text-center">
                            <strong class="h4">
                                Whatsapp:
                            </strong>3208557457
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-push-8">
                    <div class="well p-3 mt-4 rounded rounded-lg border-danger">
                        <a href="https://m.facebook.com/SMQCgoogle/">
                            <h2 class="tittles-pages text-center">
                                <i class="fab fa-facebook-messenger fa-2x p-5 msg"></i>
                        </a>
                        </h2>
                        <p class="text-center">
                            <strong class="h4">
                                Messenger
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-push-8">
                    <div class="well p-3 mt-4 rounded rounded-lg border-danger">
                        <a class="text-danger" href="https://co.pinterest.com/ojavier0336/">
                            <h2 class="tittles-pages text-center">
                                <i class="fab fa-pinterest p-5 fa-2x pint"></i>
                            </h2>
                        </a>
                        <p class="text-center">
                            <strong class="h4">
                                Pinterest
                            </strong>
                        </p>
                    </div>
                </div>
            </div>


                <!-- <section class="section py-3">
                    <div class="container">
                        <div class="row justify-content-center mr-3">
                            <div class="col-xs-12 text-center">
                                <h3 class="titulo-servicio col-12 col-xs-12 texto-borde-4 text-uppercase">
                                    Solicitar servicio detallado

                                    <p class="text-light h6">
                                        Diligencie los datos solicitados
                                    </p>
                                </h3>
                            </div>
                        </div>
                        <div class="row text-light text-center">
                            <div class="col-12 col-md-12 d-flex justify-content-center">
                                <div class="contenedor-step-form border border-light" id="step-form">
                                    <header>
                                        <h2>Solicitud Especializada</h2>
                                    </header>
                                    <div class="barra-progreso">
                                        <div class="step">
                                            <p>
                                                Name</p>
                                            <div class="bullet">
                                                <span>1</span>
                                            </div>
                                            <div class="check fas fa-check">
                                            </div>
                                        </div>
                                        <div class="step">
                                            <p>
                                                Contact</p>
                                            <div class="bullet">
                                                <span>2</span>
                                            </div>
                                            <div class="check fas fa-check">
                                            </div>
                                        </div>
                                        <div class="step">
                                            <p>
                                                Birth</p>
                                            <div class="bullet">
                                                <span>3</span>
                                            </div>
                                            <div class="check fas fa-check">
                                            </div>
                                        </div>
                                        <div class="step">
                                            <p>
                                                Submit</p>
                                            <div class="bullet">
                                                <span>4</span>
                                            </div>
                                            <div class="check fas fa-check">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outer">
                                        <form action="#" class="ml-1">
                                            <div class="page slide-page">
                                                <div class="title">
                                                    Basic Info:</div>
                                                <div class="field">
                                                    <div class="label">
                                                        First Name</div>
                                                    <input type="text">
                                                </div>
                                                <div class="field">
                                                    <div class="label">
                                                        Last Name</div>
                                                    <input type="text">
                                                </div>
                                                <div class="field">
                                                    <button class="firstNext next">Next</button>
                                                </div>
                                            </div>
                                            <div class="page">
                                                <div class="title">
                                                    Contact Info:</div>
                                                <div class="field">
                                                    <div class="label">
                                                        Email Address</div>
                                                    <input type="text">
                                                </div>
                                                <div class="field">
                                                    <div class="label">
                                                        Phone Number</div>
                                                    <input type="Number">
                                                </div>
                                                <div class="field btns">
                                                    <button class="prev-1 prev">Previous</button>
                                                    <button class="next-1 next">Next</button>
                                                </div>
                                            </div>
                                            <div class="page">
                                                <div class="title">
                                                    Date of Birth:</div>
                                                <div class="field">
                                                    <div class="label">
                                                        Date</div>
                                                    <input type="text">
                                                </div>
                                                <div class="field">
                                                    <div class="label">
                                                        Gender</div>
                                                    <select>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <div class="field btns">
                                                    <button class="prev-2 prev">Previous</button>
                                                    <button class="next-2 next">Next</button>
                                                </div>
                                            </div>
                                            <div class="page">
                                                <div class="title">
                                                    Login Details:</div>
                                                <div class="field">
                                                    <div class="label">
                                                        Username</div>
                                                    <input type="text">
                                                </div>
                                                <div class="field">
                                                    <div class="label">
                                                        Password</div>
                                                    <input type="password">
                                                </div>
                                                <div class="field btns">
                                                    <button class="prev-3 prev">Previous</button>
                                                    <button class="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section> -->


            <!-- <div class="row justify-content-center">

                <div class=" col-xs-12 col-md-8 col-md-pull-4 mt-4 mb-3 rounded-left form-contacto">
                    <h2 class="tittles-pages text-center mt-4">Formulario de contacto</h2>
                    <form class="form-horizontal mb-3" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-12">Nombre: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-form-contact"
                                    placeholder="Escribe tu nombre" required minlength="10" maxlength="40"
                                    pattern="[A-Za-z]{4-46}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12">Email: </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control input-form-contact"
                                    placeholder="Escribe tu Email" required minlength="5" maxlength="60"
                                    pattern="[A-Za-z]{4-25}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12">Telefono de contacto: </label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control input-form-contact"
                                    placeholder="Escribe tu numero de telefono" required min="0000000000"
                                    max="9999999999" minlength="10" maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12">Cantidad de dispositivos a arreglar: </label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control input-form-contact"
                                    placeholder="Cantidad de artefactos a reparar" required min="1"
                                    max="99999999999999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12 mt-3">¿Alguno de los siguientes coincide con tu
                                problema?</label>
                            <div class="col-sm-12">
                                <input type="checkbox" id="1" class="input-form-contact"> <label for="1">Poca Duración
                                    de La Batería</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="checkbox" id="2" class="input-form-contact"> <label for="2">Teléfono
                                    Mojado</label>

                            </div>

                            <div class="col-sm-12">
                                <input type="checkbox" id="3" class="input-form-contact"> <label for="3">Problemas Para
                                    Conectarse a WiFi</label>

                            </div>

                            <div class="col-sm-12">

                                <input type="checkbox" id="4" class="input-form-contact"> <label for="4">Fallas de
                                    componentes internos</label>
                            </div>


                            <label class="control-label col-sm-12 mt-3">Tu dispositivo o artefacto: </label>
                            <div class="col-sm-10">
                                <select class="text-dark" name="" id="" required>
                                    <option value="" selected>Seleccione...</option>
                                    <option value="">Celular</option>
                                    <option value="">Tablet</option>
                                    <option value="">Computador de escritorio</option>
                                    <option value="">Portatil</option>
                                    <option value="">Bocina</option>
                                    <option value="">Otro</option>
                                </select>
                            </div>
                            <label class="control-label col-sm-12 mt-3">Urgencia</label>
                            <div class="col-sm-10">
                                <input type="radio" name="radioo" class="input-form-contact"
                                    placeholder="Escribe tu Email" required> Baja |
                                <input type="radio" name="radioo" class="input-form-contact"
                                    placeholder="Escribe tu Email" required> Media |
                                <input type="radio" name="radioo" class="input-form-contact"
                                    placeholder="Escribe tu Email" required> Alta |
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12">Fecha de disponibilidad de domicilio:</label>
                            <div class="col-sm-10">
                                <input type="date" name="validar_fecha" id="validar_fecha"
                                    class="form-control input-form-contact" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12">Asunto Especifico: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-form-contact" placeholder="Asunto" required
                                    minlength="5" maxlength="40" pattern="[A-Za-z]{4-26}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Tu mensaje: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control input-form-contact" rows="3"
                                    placeholder="Escribe tu mensaje" required minlength="2" maxlength="300"
                                    pattern="[A-Za-z]{16-300}"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn buttonGenerar"
                                    onclick="javascript:validar();">Encargar</button>
                            </div>

                            div donde mostraremos el resultado -->
                            <!-- <div class="col-12">
                                <div id="result" class="alert alert-danger p-2 m-2" role="alert"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  -->
        </div>
    </section>
</div>
</div>
</body>

</html>