<?php 

	include'elementos.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">


<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>


<body>

<?php echo $menu ?>


	<?php echo $fotos ?>

  
<div class="container-fluid">
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	 </div>


<div class="container-fluid">
			<div class="col-md-6">
				<p>Somos una empresa familiar que forjó sus bases sobre la responsabilidad, seriedad, compromiso, calidad y profesionalidad en cada uno de sus emprendimientos. El mercado evoca nuestro prestigio haciéndonos participe de los proyectos mas trascendentes. Crédito que respetamos con nuestra distinguida trayectoria. Gracias a ello crecimos, paulatinamente pero sobre seguro, nos mantuvimos firmes en un mercado siempre cambiante como el argentino. Supimos aceptar nuevos desafíos y atravesar las crisis, de las cuales salimos fortalecidos con mayor capacidad de desarrollo relevando competencia. 	
				</p>
			</div>
		</div>
	 </div>	

<?php echo $final ?>
  
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<script>

		if ($(window).width() > 575) {
			$("#barrita").hide();
			$("#nav").show();
		}

		if ($(window).width() <= 575) {
			$("#barrita").show();
			$("#nav").hide();
		}
		
	$(window).on('resize', function(){
      		var win = $(this); //this = window
      		if (win.width() > 575) {
      			$("#barrita").hide();
      			$("#nav").show();
      		}
		});


		$(window).on('resize', function(){
      		var win = $(this); //this = window
      		if (win.width() <= 575) {
      			$("#barrita").show();
      			$("#nav").hide();
      		}
		});
		



	</script>
</body>
</html>