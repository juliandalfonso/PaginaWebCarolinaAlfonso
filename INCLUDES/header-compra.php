<header id="header">
    <div class="container">
    <nav class="navbar navbar-expand navbar-dark fixed-top">
        <a href="comprar.php" class="navbar-brand">
            <h3 class="px-2">
                <i class="fas fa-shopping-basket"></i>Tienda
            </h3>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav container">
            <a href="cart.php" class="nav-item nav-link active ml-auto">
        <h5>
            <i class="fas fa-shopping-cart d-inline"></i>productos
            <?php 
                if(isset($_SESSION['cart']))
                {
                    $count = count($_SESSION['cart']);
                    echo "<span id=\"cart_count\" class=\"d-inline mr-2\">$count</span>";
                }
                else
                {
                    echo "<span id=\"cart_count\" class=\"d-inline mr-2\">0</span>";
                }
            ?>
        </h5></a>
        </div>
    </div>
    </nav>
    </div>
</header>