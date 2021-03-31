<?php
include 'use/head.php'
?>
<title>Contáctanos</title>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <br>
                <br>
                <p>Contáctanos</p>
            </div>
            <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7748890875323!2d-78.5569400473538!3d-0.26733920775333125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5992f607d6999%3A0xadcb83b88a96410b!2sIMPORTVALL!5e0!3m2!1ses-419!2sec!4v1611947397735!5m2!1ses-419!2sec" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicación:</h4>
                            <p>Tabiazo s24 - 294 y Betty Paredes, Quito, Ecuador</p>
                        </div>                
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>ceosscaner@gmail.com</p>
                        </div>
                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Teléfono:</h4>
                            <p>+593 99 511 8937</p>
                            <p>+593 98 231 1265</p>
                            <p>+593 98 381 0155</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <p>¡¡Estamos para tí!! Escríbenos</p>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor ingrese una dirección de correo válida" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres de asunto" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Cargando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tu mensaje ha sido enviado. Pronto nos comunicaremos contigo ¡Gracias!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
<?php
include 'use/footer.php'
?>