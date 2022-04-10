<header>
            <nav>
                <?php
                if (isset($_SESSION["roll"])){
                    echo '<a href="php/logout.php">logout</a>';
                    if ($_SESSION["roll"]=== "admin") {
                        echo '<a href="admin.php">admin</a>';
                    }
                }
                
                else{
                    echo '<a href="login.php">login</a>';
                }
                ?>
                <a href="index.php">pizzas</a>
                <a href="drinken.php">drinken</a>
                <div class="account">
                    <!-- <img id="profileicon" src="img/round icon.png" alt=""> -->
                    <a href="shoppingcart.php"><img id="profileicon" src="img/shopping-cart.png"></a>
                </div>
            </nav>
        </header>
