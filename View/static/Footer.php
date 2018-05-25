 <div class="clearfix"></div>
<footer>

      <div class="row">

         <div class="social-width">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2018 Cristhian A. Hernández Moreno</li>
               <li> - Design by Cristhian</a></li>   
            </ul>

         </div>

      </div>

   </footer> <!-- Footer End-->
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery-3.2.1.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/bootstrap/bootstrap.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/Swiper/swiper.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery.lazyload.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/greensock.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/kl-animate.min.js?<?=$elapsed_time?>"></script>

<script>
    $(document).ready(function(){
       $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn"
        });
       $("#botonmenu, #cerrar").click(function (){
            $(".menu-hidden-show").toggleClass("esconder-menu-hiden-show");
        });
       $.klAnimate();
    });
</script>
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    autoplay: {
    delay: 3000,
  },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    
  })
  </script>
  <script type="text/javascript">
    function initMap(){
      var directionsDisplay = new google.maps.DirectionsRenderer;
          var directionsService = new google.maps.DirectionsService;

      var location = {lat: 31.718760, lng: -106.422446 };
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: location
      });
      var marker = new google.maps.Marker({
        position : location,
        map: map
      });
    
      var infoWindow = new google.maps.InfoWindow({map: map});

        //Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            infoWindow.setPosition(pos);
            infoWindow.setContent('Aquí Estas :D');
            calculateAndDisplayRoute(directionsService, directionsDisplay, lat, lng);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        directionsDisplay.setMap(map);

        //calculateAndDisplayRoute(directionsService, directionsDisplay, lat, lng);
        /*document.getElementById('mode').addEventListener('change', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay, lat, lng);
        });*/

      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

       function calculateAndDisplayRoute(directionsService, directionsDisplay, lat, lng) {
        //var selectedMode = document.getElementById('mode').value;
        directionsService.route({
          origin: {lat: lat, lng: lng},  // Haight.
          destination: {lat: 31.6157426, lng: -106.37140839999999},  // Ocean Beach.
          // Note that Javascript allows us to access the constant
          // using square brackets and a string value as its
          // "property."
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status == 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }


  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXuqrWX0g1JOz20c2mFeazEUcyvPbir9w&callback=initMap"></script>
</body>
</html>