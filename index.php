<!-- conexion a mysql -->
<?php include("db.php")?>

<!-- header -->
<?php include("INCLUDES/header.php")?>

<!-- NavBar -->
<?php include("INCLUDES/NavBar.php")?>


  <!-- HEADER y fondo particles.js-->
  <div class="container text-center vh-75 pb-4">
    <div id="particles-js"></div>
    <div id="overlay">
      <img src="IMG/index/Logo.png" alt="" class="w-75">
    </div>
  </div>

  <!-- Introducción -->
  <div id="introduccion">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6 my-auto">
          <div data-aos="fade-right"><img src="IMG/index/foto-perfil.jpeg" alt=""
              class="img-thumbnail foto-perfil img-fluid text-center"></div>
        </div>
        <div class="col-md-6 my-auto">
          <div data-aos="fade-left">
            <h1 class="h1 font-weight-bold text-center">ACERCA DEL DISEÑADOR</h1>
            <p class="p fuente-Lato font-weight-light text-justify text-center">Odontóloga colombiana bioarquitecta de
              sonrisas. Diseña relaciones equilibradas entre lo anatómico, lo funcional lo armónico, y la expectativa.
              <br></br> Su concepto se basa en una odontología de inclusión, la tendencia, el desarrollo clínico y la
              innovación, entregado a quienes le confían su mejor carta de presentación: su sonrisa. <br></br>Su estilo
              se enmarca en la búsqueda de una atención delicada, amable y en armonía con el cuerpo físico y emocional.
              Dio un paso en el desarrollo de la atención y el servicio, un vinculo, llegando a la expresión individual
              de lo que descubre y quiere expresar cada persona a través de su sonrisa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin introduccion -->

   <!-- frase inspiradora -->
  <div class="container" data-aos="flip-up">
    <div class="card mt-4">
      <div class="card-header">
        Quote
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>"Una buena pintura es la narrativa visual del artista que plasma una historia detrás de una sonrisa , es la
            suavidad del trazo del pincel, la calidad del oleo y su capacidad de fijar en un lienzo el concepto que se
            busca articular".</p>
          <footer class="blockquote-footer">Carolina Alfonso
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
  <!-- fin frase inspiradora -->


  <!-- Carrousel de Servicios -->
  <div id="servicios">
    <div class="container">
      <div class="row my-4">
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-diseno-de-sonrisa.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="diseno-de-sonrisa.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-implantes.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="implantes.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-carillas-lentes.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="carillas.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-resinas.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="resinas.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row my-4">
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-rehabilitacion.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text fuente-Lato font-weight-light text-center">Rehabilitacion.</p>
              <div>
                <a href="rehabilitacion.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-coronas.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="coronas.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-neurofocal.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="neurofocal.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 py-2" data-aos="zoom-in">
          <div class="card w-100" style="width: 18rem;">
            <img class="card-img-top" src="IMG/rombos/rombo-blanqueamiento.png" alt="Card image cap">
            <div class="card-body">
              <div>
                <a href="blanqueamiento.php" class="btn btn-info btn-block">ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fin carrusel de servicios -->

  <!-- GALERIA DE IMAGENES -->
  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="IMG/index/bg-callout.jpg" alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">This is the first title</h3>
          <p>First text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="IMG/index/portfolio-1.jpg" alt="Second slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Thir is the second title</h3>
          <p>Secondary text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="IMG/index/bg-masthead.jpg" alt="Third slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">This is the third title</h3>
          <p>Third text</p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->


  <!-- REDES SOCIALES -->
  <div id="redes">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 my-auto" data-aos="fade-right">
          <h1 class="display-4 font-weight-bold text-center">
            Lorem ipsum dolor sit amet consectetur.
          </h1>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 ">
          <div class="py-3 text-center" data-aos="fade-left">
            <div class=" text-center d-md-block d-lg-inline d-sm-block ">
              <i class="fas fa-tooth iconos-redes hvr-glow"></i>
            </div>
            <p class=" text-center float-xl-right float-lg-right mb-0 mt-2 mx-auto d-md-block d-lg-inline d-sm-block">
              sit amet consectetur adipisicing elit. Beatae, velit?</p>
          </div>
          <div class="py-3 text-center" data-aos="fade-left">
            <div class=" text-center d-md-block d-lg-inline d-sm-block ">
              <i class="fas fa-tooth iconos-redes hvr-glow"></i>
            </div>
            <p class=" text-center float-xl-right float-lg-right mb-0 mt-2 mx-auto d-md-block d-lg-inline d-sm-block">
              sit amet consectetur adipisicing elit. Beatae, velit?</p>
          </div>
          <div class="py-3 text-center" data-aos="fade-left">
            <div class=" text-center d-md-block d-lg-inline d-sm-block ">
              <i class="fas fa-tooth iconos-redes hvr-glow"></i>
            </div>
            <p class=" text-center float-xl-right float-lg-right mb-0 mt-2 mx-auto d-md-block d-lg-inline d-sm-block">
              sit amet consectetur adipisicing elit. Beatae, velit?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- fin redes sociales -->



  <!-- Contacto -->
  <div class="container contact-form" data-aos="flip-down">
    <div class="contact-image">
      <img src="IMG/index/teeth.png" alt="rocket_contact" />
    </div>
    <form method="post">
      <h3>Envíanos un mensaje</h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="txtName" class="form-control" placeholder="Nombre *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
          </div>
          <div class="form-group">
            <input type="text" name="txtPhone" class="form-control" placeholder="Telefono *" value="" />
          </div>
          <div class="form-group">
            <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <textarea name="txtMsg" class="form-control" placeholder="Tu mensaje *"
              style="width: 100%; height: 150px;"></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- fin Contacto -->

  
<!-- footer -->
<?php include("INCLUDES/footer.php")?>
