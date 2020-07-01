<!-- importamos el header -->
<?php include("INCLUDES/header.php")?>

<!-- NavBar -->
<?php include("INCLUDES/NavBar.php")?>


<div class="container mt-5">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="comprar.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="IMG/productos/producto-1.jpg" alt="producto1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kit de Ortodoncia</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text fuente-Lato font-weight-light">
                            Some quick example text to build on the card
                        </p>
                        <h5>
                            <small><s class="text-secondary">$45.000</s></small>
                            <span class="price">$25.000</span>
                        </h5>
                        <button class="btn btn-info my-3" type="submit" name="add" >Añadir al carrito <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0"></div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0"></div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0"></div>
    </div>
</div>


<!-- importamos el footer -->
<?php include("INCLUDES/footer.php")?>