<?php

session_start();

//importamos el header -->
include("INCLUDES/header.php");

require_once("INCLUDES/header-compra.php");
//iniciamos una sesion

// Creamos la base de datos si se requiere -->
require_once("PHP/CreaBD.php");

// incluimos los componentes de productos -->
require_once("PHP/component.php");

    //creamos la instancia de la base de datos
    $database = new CreaBD("BDproductos","tablaproductos");

    if(isset($_POST['agregar']))
    {
       // print_r($_POST['product_id']);
       if(isset($_SESSION['cart']))
       {
           $item_array_id = array_column($_SESSION['cart'],"product_id");

           if(in_array($_POST['product_id'], $item_array_id))
           {
               echo "<script>alert('El producto ya fue añadido al carrito')</script>";
               echo "<script>window.location='comprar.php'</script>";
           }
           else
           {
               $count = count($_SESSION['cart']);
               $item_array = array(
                'product_id'=>$_POST['product_id']
               );

               $_SESSION['cart'][$count] = $item_array;
           }
       }
       else{
           $item_array = array(
            'product_id'=>$_POST['product_id']
           );

           //creamos una nueva variable de sesion
           $_SESSION['cart'][0] = $item_array;
            
       }
    };


// NavBar -->
include("INCLUDES/NavBar.php");

?>

<!-- colocamos el fondo de particles.js -->
<div class="container text-center vh-75 pb-4">
    <div id="particles-js"></div>
</div>

<!-- componentes de compra -->
<div class="container mt-5" id="componentes">
    <div class="row text-center py-5 componentes">
        <?php
            $result = $database->getData();
            while($row = mysqli_fetch_assoc($result))
            {
                component($row['nombre_producto'],$row['precio_producto'],$row['imagen_producto'],$row['id']);
            }
        ?>
    </div>
</div>


<!-- importamos el footer -->
<?php include("INCLUDES/footer.php");?>