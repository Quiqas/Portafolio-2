<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// -------------------------------------------------------------------- 
  $page_title = "About";
  
// --------------------------------------------------------------------
//  Include header
// -------------------------------------------------------------------- 
  include_once('static/Header.php');
?>

<div id="container">

	<a href="<?=$GLOBALS['COD']->dir?>/Proyectos" class="contact button unit Espacio klanimate" data-x="200" data-delay="0.7">Ver Proyectos</a>

   

    <section id="about">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12  photo-wrapper klanimate" data-x="-200" data-delay="0.5" >
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 text-left klanimate" data-x="200" data-delay="0.5">
                  <div class="about-text">
                      <h1 class="klanimate" data-x="200" data-delay="0.9">Hola!</h1>
                      <h3 class="klanimate" data-x="200" data-delay="0.9">Mi nombre es Cristhian.<br> Soy un estudiante de ingeniería en sistemas computacionales en el instituto tecnológico de ciudad Juárez.</h3>

                      <p class="klanimate" data-x="200" data-delay="0.9">Me apasiona el diseño y programación de aplicaciones. Me gusta analizar a los usuarios, su comportamiento y sus necesidades en orden de crear la mejor solución posible para cada proyecto.He diseñado varias páginas web haciendo tnato el Front-end como el Back-end y usando bases de datos SQL y NoSQL.</p>

                      <p class="klanimate" data-x="200" data-delay="0.9">Cuando no me encuentro diseñando o programando, puedes estar seguro que me encuentro aprendiendo algo nuevo, o estoy leyendo un libro o viendo una pelicula.</p>

                      <p class="klanimate" data-x="200" data-delay="0.9">Si tienes algún proyecto, o solo quieres saludarme enviame un mensaje  <a href="Contacto.html">aquí</a> mismo en la página.</p>

                      <p class="klanimate" data-x="200" data-delay="0.9">Pedes conocer más acerca de mi y mi trabajo aquí:</p>
                      <ul class="social">
                        <li><a href="" target="_blank">LinkedIn</a></li>
                        <li><a href="" target="_blank">Twitter</a></li>
                        <li><a href="" target="_blank">Instagram</a></li>
                      </ul>
                  </div>
              </div>
            </div>
      </div>
    </section>
   </div>

<?php
  include_once('static/Footer.php');
?>