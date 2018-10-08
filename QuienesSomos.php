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


<body>

<style>
  .imagen{
    background-image: url('https://definicionyque.es/wp-content/uploads/2016/04/Obrero.jpg');
    height: 70vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
  }
  .centered{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  .cent{
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
  }
</style>

	<?php echo $menu ?>

  <div class="container-fluid">
        <div class="row">
          <div class="col imagen">
            <div class="centered">
            <h1 style="color: black">¿Quiénes Somos?</h1>
            <p style="color: black">Feroleto y Faga nació hace mas de 50 años como un emprendimiento familiar. La gestión integral de instalaciones internas es una de nuestras fortalezas. El noble resultado de nuestros trabajos permitió que nos convirtiéramos en contratistas especializados en instalaciones sanitarias, gas, calefacción y servicios contra incendios.</p>
            </div>
          </div>
        </div>
      </div>

      <hr class="featurette-divider">
  
<div style="margin-top: 15px;">
    <div class="col-xs-12 col-sm-12">
        <h2 class="cent" style="color: green">Visión</h2>
        <div>
        <p>Brindar servicios de construcción de alta calidad en obras emblemáticas de ingeniería y arquitectura, privadas y públicas, que nos permitan ejercer una posición de liderazgo en la industria de la construcción en Argentina y Uruguay. Alcanzar la eficiencia a través de soluciones creativas.</p>
        </div>
    </div>


    <hr class="featurette-divider">


    <div class="col-xs-12 col-sm-12">
        <h2 class="cent" style="color: green">Misión</h2>
        <p>Ser una empresa constructora que, a través de sus obras, mejore la vida de las personas. Queremos una organización ecológicamente responsable, que preserve la seguridad de sus empleados y respete a los clientes.</p>
    </div>
</div>
  

	<?php echo $final ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>