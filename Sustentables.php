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

</head>


<body>

<?php echo $menu ?> 
 	
<main role="main">

      <section class="jumbotron text-center">
        <div class="foo">
          <h1 class="jumbotron-heading">Obras</h1>
          <p class="lead text-muted">En este apartado podras ver algunas de nuestras obras</p>
        </div>
      </section>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
      <a class="nav-link" href="Obras.php">Obras destacadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Propias.php">Obras Propias</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Sustentables.php">Obras Sustentables</a>
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="http://www.arcondebuenosaires.com.ar/madero-faro-999.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Sustentables</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://imgar.zonapropcdn.com/avisos/1/00/42/83/79/35/1200x1200/1653776892.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Madero Center "La Gran Manzana"</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://imgar.zonapropcdn.com/avisos/1/00/42/83/79/35/1200x1200/1653776892.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Crucero I y II</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="http://www.nuevomadero.com/upload/image/600x6001269911331_419_Sh2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Mall Dique III</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="http://siesa.com.ar/wp-content/uploads/2014/07/torreshorizons.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Torres Horizons Rio</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://imgar.zonapropcdn.com/avisos/1/00/42/95/21/45/1200x1200/1613661023.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Torre Vilo</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://imganuncios.mitula.net/en_venta_departamento_libertador_2424_143_mts_cochera_doble_piscina_gimnasios_salones_maxima_categoria_en_palermo_capital_federal_2_dormitorios_4_ba%C3%B1os_4750077535216632581.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Av. Libertador 2424</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="http://assets.ashardjian-sa.com.ar/wp-content/uploads/2017/03/16121530/01-Ruggieri-3045-8-02-1024x654.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Ruggeri 3045 </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="http://www.figueras.net/case_study/20140825_OSDE/osde.gif" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Osde “Oficinas Centrales”</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Maps</button>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>


<?php echo $final ?>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		
</body>
</html>