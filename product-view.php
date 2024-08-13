<?php
include('functions/userfunctions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- Alertify Js -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>


    <script>
        alertify.set('notifier', 'position', 'top-right');

        <?php if (isset($_SESSION['message'])) { ?>
            alertify.success('<?= $_SESSION['message']; ?>');
            <?php unset($_SESSION['message']); ?>
        <?php } ?>
    </script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>

<?php
if (isset($_GET['product'])) {
    $product_slug = $_GET['product'];
    $product_data = getSlugActive("products", $product_slug);
    $product = mysqli_fetch_array($product_data);

    if ($product) {
        ?>
        <div class="py-3 bg-primary">
            <div class="container">
                <h6 class="text-white">
                    <a class="text-white" href="categories.php">Home /</a>
                    <a class="text-white" href="categories.php">Collections /</a>
                    <?= $product['name']; ?>
                </h6>
            </div>
        </div>

        <div class="bg-light py-4">
            <div class="container product_data mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="shadow">
                            <img src="uploads/<?= $product['image']; ?>" alt="Product Image" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="fw-bold"><?= $product['name']; ?>
                            <span class="float-right text-danger"><?= ($product['trending']) ? "Trending" : ""; ?></span>
                        </h4>
                        <hr>
                        <p><?= $product['small_description']; ?></p>

                        <div class="row">
                            <div class="col-md-6">
                                <h5> Rs <span class="text-success fw-bold"><?= $product['selling_price']; ?></span></h5>
                            </div>
                            <div class="col-md-6">
                                <h5> Rs <s class="text-danger"><?= $product['original_price']; ?></s></h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-3" style="width:130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" class="form-control text-center input-qty bg-white" disabled value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button class="btn btn-primary addToCartBtn px-4 w-100" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary px-4 w-100"><i class="fa fa-heart me-2"></i>Add to Wishlist</button>
                            </div>
                        </div>

                        <hr>

                        <h6>Product Description:</h6>
                        <p><?= $product['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "Product not found";
    }
} else {
    echo "Something went wrong!";
}
?>

<?php include('footer.php'); ?>

</body>
</html>
