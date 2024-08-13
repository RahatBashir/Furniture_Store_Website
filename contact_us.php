

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us </title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/cart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .div {
            margin: 0 auto; 
            width: 100%;
            background-color: #17a2b8;
            padding: 20px;
            border-radius: 10px;
        }
        .div h1 {
            text-align: center;
            color: white;
        }
        .div label {
            display: block;
            margin: 15px 0;
            color: white;
        }
        .div input {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        .div button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top:10px;
            margin-left:0px;
            background-color: #0056b3;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }
        .div button:hover {
            background-color: green;
        }
    </style>
    <script>
        function validateForm() {
            let isValid = true;
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var subject = document.getElementById('subject').value.trim();
            var message = document.getElementById('message').value.trim();

            if (!name) {
                alert('Name is required.');
                isValid = false;
            }
            if (!email) {
                alert('Email is required.');
                isValid = false;
            } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
                alert('Invalid email format.');
                isValid = false;
            }
            if (!subject) {
                alert('Subject is required.');
                isValid = false;
            }
            if (!message) {
                alert('Message is required.');
                isValid = false;
            }

            return isValid;
        }
    </script>
  
</head>
<body>
<?php include('header.php') ?>
    
    <section class="contactus" >
        <div class="nothome-text">
            <h1><Span>Get in Touch:</Span>  We're Here <br>to Help with <span>Any Questions or Inquiries</span></h1>
            <a href="shopnow_products.html#product_shoping" class="btn">Shop Now</a>
        </div>
    </section>


    <section class="contact-us">
        <div class="container mt-5">
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                     <p><i class="fas fa-map-marker-alt"></i> 5700 Main Street, Sahiwal, Punjab, Pakistan</p>
                      <p><i class="fas fa-phone-alt"></i> +123 456 7890</p>
                        <p><i class="fas fa-envelope"></i> info@comfyhome.com</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                
                </div>
    
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123456.78901234567!2dLongitude!3dLatitude!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zLong!5e0!3m2!1sen!2sus!4v1618293012345!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>
    
                <!-- <h3>Send Us a Message</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                         <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                        <div class="form-group">
                             <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                             <button type="submit" class="btn btn-primary">Send Message</button>
                </form> -->
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
            &copy; Copyright 2024. All Rights Reserved
        </div>
        <div class="credite text-center">
            Designed By <a href="#">Rahat Bashir</a>
        </div>
    </footer> -->

    <main class="container">
        <section class="row">
            <div class="div">
                <form action="formprocess.php" method="post" onsubmit="return validateForm()">
                    <h1>Contact Form</h1>
                    <?php if (isset($error)) { echo '<div class="alert alert-danger" role="alert">'.$error.'</div>'; } ?>
                    <?php if (isset($success)) { echo '<div class="alert alert-success" role="alert">'.$success.'</div>'; } ?>
                    <div class="form-group">
                        <label for="name">Name <span aria-hidden="true">*</span> <span class="sr-only">(required)</span></label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span aria-hidden="true">*</span> <span class="sr-only">(required)</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject <span aria-hidden="true">*</span> <span class="sr-only">(required)</span></label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message <span aria-hidden="true">*</span> <span class="sr-only">(required)</span></label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </section>
    </main>


    <?php include('footer.php') ?>
</body>
</html>

<script>
    
let menu= document.querySelector('#menu-icon');
let navbar= document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open');
    }
</script>