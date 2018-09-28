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
      height: 80vh;
  }
  </style>
</head>


<body>

<?php echo $menu ?>

<?php echo $fotos ?>

  <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-3" style="padding-top: 3vh">
            <img class="rounded-circle" src="image/6.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Incendio</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3" style="padding-top: 3vh">
            <img class="rounded-circle" src="image/8.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Agua</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3" style="padding-top: 3vh">
            <img class="rounded-circle" src="image/4.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Calefaccion</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3" style="padding-top: 3vh">
            <img class="rounded-circle" src="image/7.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Gas</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div>
        </div><!-- /.row -->


<!-- <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Titulo 1 <span class="text-muted">Detalle</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">No tiene porque ser un titulo <span class="text-muted"> Detalle </span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Otra cosa <span class="text-muted">Detalle</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

         /END THE FEATURETTES -->

 </div><!-- /.container --> 

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