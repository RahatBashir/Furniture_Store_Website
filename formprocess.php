<?php

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        $stmt = $con->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $success = "Your message has been saved successfully!";
        } else {
            $error = "There was an error saving your message. Please try again later.";
        }
        $stmt->close();
    } else {
        $error = implode("<br>", $errors);
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
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
        .div input,
        .div textarea {
            width: 100%;
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
    <main class="container">
        <section class="row ">
            <div class="div">
                <form action="contact_us.php" method="post">
                    <h1>Contact Form</h1>
                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error); ?></div>
                    <?php } ?>
                    <?php if (isset($success)) { ?>
                        <div class="alert alert-success" role="alert"><?php echo htmlspecialchars($success); ?></div>
                    <?php } ?>
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
