<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "home";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div id="container">


    <header class="cabeza text-center text-white d-flex">
      <div class="container my-auto ">
        <div class="row MargenTop">
          <div class="col-lg-12 col-xs-12 mx-auto ">
            <div class="login-logo">
              <a href="<?=$GLOBALS['COD']->dir?>/"><img src="<?=$GLOBALS['COD']->dir?>/assets/images/Logo.png" class=" responsive l" alt="Logo Only Code"></a>
            </div>
            <h1 >
              "La <span class="sp-1">Mejor</span> Manera de Predecir el Futuro es <span class="sp-2">Inventarlo</span>"
            </h1>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto">
            <p class="text-faded mb-5">Aprendizaje Ilimitado, Posibilidades Ilimitadas</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saber Más!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary section1" id="about">
      <div class="container ">
        <div class="row">
          <div class="col-lg-8 auto-center text-center">
            <h2 class=" text-white">Cristhian Alberto Hernández Moreno</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Soy un estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Ciudad Juárez. Decidí estudiar esta carrera ya me apasiona mucho todo lo que se puede lograr con tan solo escribir unas pequeñas líneas de código. Me gustan los desafíos y constantemente me encuentro aprendiendo algo nuevo que me ayude a mejorar como programador y como persona.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Saber Aún Más!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section1 Blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 >¡A Tu Servicio!</h2>
            <hr class="my-4 hr1">
          </div>
        </div>
      </div>
      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">¡Sigue Mejorando!</h3>
              <p class="text-muted mb-0">Ten lo Más Avanzado en tus Páginas.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Maximiza tu Impacto</h3>
              <p class="text-muted mb-0">Conmigo el Impacto de tu Página Será Mayor!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">Siempre Estoy Actualizado con las Nuevas Tecnologías.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Hecho con Amor</h3>
              <p class="text-muted mb-0">¡Siempre programo con amor!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

 <section id="Maps" class="section1">
   <div id ="map" class="col-lg-12 an" > 

      </div>
 </section>

  <section id="contact" class="section1 Blanco">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h2>¡Mantengámonos en contacto!</h2>
            <hr class="my-4 hr1">
            <p class="mb-5">
            ¿Tienes alguna inquietud? ¡Mandame un email y nosotros te responderé tan prontome sea posible!</p>
          </div>
        </div>
      <br><br>
        

        <div class="box box-danger sombra">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Cristhian A. Hernández - Email</h3>
              <!-- tools box -->
             
              <!-- /. tools -->
            </div>
            <div class="box-body">
               <form action="https://formspree.io/albert502@outlook.com" method="POST" >
                <div class="form-group">
                   <input type="text" class="form-control" id="nombre" placeholder="¿Cómo te llamas?" required name="Nombre">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="¿Cuál es tu correo electrónico?" name="_replyto" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="Telefono" placeholder="¿Cuál es tu número telefónico?"  name="Telefono">
                </div>  
                <div class="form-group">
                  <input type="text" class="form-control" name="_subject" placeholder="Tema">
                </div>
                <div>


                  <textarea class="textarea" placeholder="¿Cuál es tu inquietud?"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required name="Inquietud"></textarea>
                </div>

                <div class="box-footer clearfix">
                    <button type="submit" class="pull-right btn btn-default" id="sendEmail" >Enviar
                      <i class="fa fa-arrow-circle-right"></i></button>
                  </div>
                
              </form>
              </div>
            </div>
            
      </div>
    </section>

<?php
	include_once('static/Footer.php');
?>