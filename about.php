<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
     
 

    <section class="aboutus" >
        <div class="nothome-text">
            <h1><Span>Discover Our Story:</Span> Creating <br>Beautiful Furniture <span>for Your Home</span></h1>
            <a href="shopnow_products.html#product_shoping" class="btn">Shop Now</a>
        </div>
    </section>

    <section class="about">
        <div class="container" id="about">
            <h1 class="text-center" style="margin-top: 50px;">ABOUT</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/about.png" alt="">
                    </div>
                </div>
                <div class="about col-md-6 py-3 py-md-0">
                    
                    <p>Welcome to <span>Comfy</span> <span1>Home</span1> We are passionate about creating spaces that reflect your unique style and personality. Our mission is to provide high-quality furniture pieces that enhance the comfort, functionality, and aesthetics of your home.</p>
                    <div id="additional-text">
                        <p> At our store, we understand that your home is your sanctuary, which is why we offer a wide range of furniture options to suit every taste and lifestyle. Whether you prefer modern minimalism, classic elegance, or rustic charm, we have something for everyone.
    
                        Our curated collection includes handcrafted pieces made from premium materials, sourced responsibly to ensure sustainability and durability. From cozy sofas and luxurious beds to elegant dining sets and stylish accent pieces, each item in our collection is carefully selected to elevate your living space.
                        
                        In addition to our wide selection of furniture, we also offer personalized design services to help you bring your vision to life. Our team of experienced designers is dedicated to understanding your needs and preferences, offering expert advice and guidance to create a space that truly feels like home.
                        
                        Customer satisfaction is our top priority, and we strive to provide exceptional service at every step of your furniture-buying journey. Whether you're furnishing a new home, updating your current space, or simply looking for inspiration, we're here to help you make your house a home.
                        
                        Experience the difference with our store. Shop with us today and discover the perfect pieces to transform your living space into a haven of comfort and style.</p>
                        </div>
                        <div id="btn4"><button class="toggle-button" onclick="toggleText()">Read More...</button></div>
                </div>
            </div>
        </div>
    </section>

    


   
    

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
            &copy; Copyright <strong><span>Comfy <span>Home</span></span></strong>. All Rights Reserved
        </div>
        <div class="credite text-center">
            Designed By <a href="#">Rahat Bashir</a>
        </div>
    </footer> -->

    <?php include('footer.php') ?>
</body>
</html>

<script>


    function toggleText() {
            var additionalText = document.getElementById('additional-text');
            var buttonText = document.querySelector('.toggle-button');

            if (additionalText.style.display === 'none') {
                additionalText.style.display = 'block';
                buttonText.textContent = 'Read less';
            } else {
                additionalText.style.display = 'none';
                buttonText.textContent = 'Read more';
            }
        }

        
let menu= document.querySelector('#menu-icon');
let navbar= document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open');
    }
  </script>