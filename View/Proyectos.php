<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "Proyectos";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
	include_once('static/conection.php');

	$sql = "SELECT * FROM proyectos1";
	$result = $conection->query($sql);

	$cont = 0;
	$contx2 = 3;
?>

<div id="container">
    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 Espacio">
    	<h1>Mi Trabajo</h1>
    </div>
    <div class="EspacioLeft container">

    	<?php 
    	if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()){
		    	if($cont%3 === 0){ ?>
					<div class="card-deck">
				<?php }?>
			    <!--Card-->
			    <div class="card mb-4 text-center">
			        <!--Card image-->
			        <div class="view overlay">
			            <img class="img-fluid lazy" data-original="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
			            <a href="#!">
			                <div class="mask rgba-white-slight"></div>
			            </a>
			        </div>
			        <!--Card image-->
			        <!--Card content-->
			        <div class="card-body">

			            <!--Title-->
			            <h4 class="card-title"><?=$row['Nombre']; ?></h4>

			            <!--Text-->
			            <p class="card-text"><?=$row['Descripcion']; ?></p>

						
			            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			           
			            <button type="button" class="btn btn-light-blue btn-md btn-success" data-toggle="modal" data-target="#exampleModal"><?=$row['Lenguajes']; ?></button>
			        </div>
			        <!--Card content-->

			    </div>
			    <!--Card-->
			<?php if($cont === $contx2-1){ ?>
				</div>
			<?php 
				$cont = -1;
			} 
			$cont++;
	}
}?>
	</div>
</div>


    	
	
	

<?php
  include_once('static/Footer.php');
?>