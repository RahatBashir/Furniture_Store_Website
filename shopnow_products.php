


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop-now</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/cart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php include('header.php') ?>



 <section class="shop" >
    <div class="nothome-text">
        <h1><Span>Explore Endless Possibilities</Span> And Dive <br>into Our <span>Unique Collection</span></h1>
        <a href="shopnow_products.html#product_shoping" class="btn">Shop Now</a>
    </div>
</section>



  <div class="container" id="product_shoping">
        <h3 class="text-center" style="margin-top: 50px;">TREANDLY PRODUCTS</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card1.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Best Sofa</h3>
                        <p class="card-text text-center">1000.50</p>
                        <!-- <div class=" text-center" id="btn3"><button onclick="addToCart('Best Sofa', 1000.50)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart" >Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="Best Sofa">
                        <input type="hidden" name="Price" value="1000.50">
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card2.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">New Sofa</h3>
                        <p class="card-text text-center">1200.50</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('New Sofa', 100.50)">Add to Cart</button></div> -->
                        <!-- <div id="btn3"><button>Shop Now</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="New Sofa">
                        <input type="hidden" name="Price" value="1200.50">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card3.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">New Chair</h3>
                        <p class="card-text text-center">1300.20</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('New Chair', 300.20)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="New Chair">
                        <input type="hidden" name="Price" value="1300.20">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card4.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Modern Chair</h3>
                        <p class="card-text text-center">500.50</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('Modern Chair', 500.50)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="Modern Chair">
                        <input type="hidden" name="Price" value="500.50">
                    </div>
                </div>
                </form>
            </div>
        </div>



        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card5.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Best Chair</h3>
                        <p class="card-text text-center">2200.50</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('Best Chair', 200.50)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="Best Chair">
                        <input type="hidden" name="Price" value="2200.50">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card6.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Sofa Chair</h3>
                        <p class="card-text text-center">1100.50</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('Sofa Chair', 100.50)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="Sofa Chair">
                        <input type="hidden" name="Price" value="1100.50">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card7.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Table Chair</h3>
                        <p class="card-text text-center">1150.50</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('Table Chair', 1500.50)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="Table Chair">
                        <input type="hidden" name="Price" value="1100.50">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3 py-3 py-md-0">
            <form action="manage_cart.php" method="POST">
                <div class="card" id="c">
                    <img src="./img/card8.png" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Hanging Chair</h3>
                        <p class="card-text text-center">1500.60</p>
                        <!-- <div class="text-center" id="btn3"><button onclick="addToCart('Hanging Chair', 500.60)">Add to Cart</button></div> -->
                        <div class=" text-center" id="btn3"><button type="submit" name="Add_To_Cart">Add to Cart</button></div> 
                        <input type="hidden" name="item_Name" value="Hanging Chair">
                        <input type="hidden" name="Price" value="1500.50">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <footer id="footer">
        <h1 class="text-center">Comfy <span>Home</span></h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui?</p>
        <div class="icons text-center">
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-google"></i>
            <i class="bx bxl-skype"></i>
            <i class="bx bxl-instagram"></i>
        </div>
        <div class="copyright text-center">
            &copy; Copyright 2024. All Rights Reserved
        </div>
        <div class="credite text-center">
            Designed By <a href="#">Rahat Bashir</a>
        </div>
    </footer> -->

    <?php include('footer.php') ?>

</body>
</html>

<!-- <script>
    
        let menu = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            menu.classList.toggle('bx-x');
            navbar.classList.toggle('open');
        }
</script> -->