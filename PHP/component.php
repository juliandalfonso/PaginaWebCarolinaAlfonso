<?php 
function component($nombreproducto,$precioproducto,$productimg,$productid)
{
    $element ="

    <div class=\"col-lg-3 col-md-6 col-sm-12 my-3 \">
    <form action=\"comprar.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$productimg\" alt=\"producto1\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$nombreproducto</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text fuente-Lato font-weight-light\">
                    Some quick example text to build on the card
                </p>
                <h5>
                    <small><s class=\"text-secondary\">$35.000</s></small>
                    <span class=\"price d-block font-weight-bold h3\">$$precioproducto</span>
                </h5>
                <button class=\"btn btn-info my-3\" type=\"submit\" name=\"agregar\" >Añadir al carrito <i class=\"fas fa-shopping-cart\"></i></button>
                <input type=\"hidden\" name=\"product_id\" value=\"$productid\">                
            </div>
        </div>
    </form></div>
    
    ";
    echo $element;
}

?>

