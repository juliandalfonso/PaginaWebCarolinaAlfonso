<?php 
include("INCLUDES/header.php");
// NavBar -->
include("INCLUDES/NavBar.php");

require_once("INCLUDES/header-compra.php");
?>


<!-- colocamos el fondo de particles.js -->
<div class="container text-center vh-75 pb-4 ">
    <div id="particles-js"></div>
</div>


<div class="container-fluid tabla_compra" style="margin: 150px 10px 30px 10px;">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart text-white">
                <h6>Mi Carrito</h6>
                <hr class="bg-light">
                <form action="cart.php" method="get" class="cart-items">
                    <div class="border rounded"> 
                        <div class="row bg-white">
                            <div class="col-md-3">
                                <img src="IMG/productos/producto-1.jpg" alt="imagen1" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2">Producto1</h5>
                                <small class="text-secondary">Seller: dailytuition</small>
                                <h5 class="pt2">$5000</h5>
                                <button type="submit" class="btn btn-warning">Guardar para después</button>
                                <button type="submit" class="btn btn-danger mx-2" name="remove">Eliminar</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-md-5">

        </div>
    </div>
</div>


<?php include("INCLUDES/footer.php");?>