<!-- <?php session_start();?> -->

<header>
        <a href="#" class="logo">Comfy<span>Home</span></a>
    
        <ul class="navbar">
            <li><a href="index.php" >Home</a></li>
            <!-- <li><a href="shopnow_products.php">Shop Now</a></li> -->
            <li><a href="about.php">About Us</a></li>
            <li><a href="categories.php">Collections</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
    
    <div class="main">
        <a href="login.php" class="user"><i class='ri-user-fill'></i></a>
        <!-- <div class="cart-icon"> -->
        <!-- <a href="#" onclick="toggleCart()"><i class='bx bx-cart'></i><span id="cart-count">0</span></a> -->
        <?php
        $count = 0;
        if(isset($_SESSION['cart']))
        {
            $count = count($_SESSION['cart']);
        }
        ?>
        <a href="mycart.php" class="user"><i class='bx bx-cart'></i>(<?php echo $count; ?>)</a>
    <!-- </div> -->
    
    <!-- <div id="cart-container" class="cart-container">
        <div class="cart-header">
            <h4>Your Cart</h4>
            <button class="close-btn" onclick="toggleCart()">Close</button>
        </div>
        <ul id="cart-items" class="cart-items">
            
        </ul>
        <div id="empty-cart-message" class="empty-cart-message">Your cart is empty</div>
    </div> -->
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
    
     </header> 