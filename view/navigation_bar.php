<header>
    <div class="logo">
        <img src="view/resources/img/logo.png" alt="Logo UABify">
    </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#">Menu</a>
                    <ul class="dropdown-menu">
                        <?php 
                            if (isset($_SESSION['user_id'])){
                                echo "<li><a href=\"#\" onClick=\"editProfile()\">My Account</a></li>";
                                echo "<li><a href=\"#\" onClick=\"listPurchases()\">My Purchases</a></li>";
                                echo "<li><a href=\"#\" onClick=\"logout()\">Log out</a></li>";
                            }else{
                                echo "<li><a href=\"#\" onclick=\"login()\">Log in</a></li>";
                                echo "<li> <a href=\"#\" onclick=\"register()\"> Sign-up </a> </li>";
                            }                            
                        ?>
                    </ul>
                </li>
                <li class="search-bar">
                    <input id='searched_product' type="text" placeholder="Search...">
                    <button onclick="search()">Search</button>
                </li>
                <li class="cart-icon" style="float:right; padding-right: 25px;">
                    <a href="#" onclick="cartSummary()">
                    <i class="fas fa-shopping-cart" style="font-size: 20px;"></i>
                    </a>
                </li>
            </ul>
        </nav>
</header>