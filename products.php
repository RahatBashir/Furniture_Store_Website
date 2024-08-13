<?php
include('functions/userfunctions.php');

if(isset($_GET['category']))
{

$category_slug = $_GET['category'];
$category_data = getSlugActive("categories",$category_slug);
$category = mysqli_fetch_array($category_data);
$cid = $category['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections</title>
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
    <style>
    a
    {
    text-decoration: none;
    }
    </style>
</head>
<body>
<?php include('header.php') ?>



    <div class="py-3 bg-primary">
         <div class="container">
            <h6 class="text-white">
                <a class="text-white" href="categories.php">
                  Home /
                </a>
                <a class="text-white" href="categories.php">
                  Collections /
                </a>
            <?=$category['name']; ?></h6>
                
        </div>
    </div>

 <section class="shop" >
    <div class="nothome-text">
        <h1><Span>Explore Endless Possibilities</Span> And Dive <br>into Our <span>Unique Collection</span></h1>
        <a href="shopnow_products.html#product_shoping" class="btn">Shop Now</a>
    </div>
</section>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?=$category['name']; ?></h2>
                <hr>
                <div class="row">
                  <?php
                  $products = getProductbyCategory($cid);

                  if(mysqli_num_rows($products)>0)
                  {
                    foreach($products as $item)
                    {
                        ?>
                            <div class="col-md-4 mb-2">
                                <a href="product-view.php?product=<?=$item['slug']; ?>">
                                    <div class="card shadow">
                                        <div class="card-body">
                                          <img src="uploads/<?=$item['image']; ?>" alt="Product Name" class="w-50">
                                          <h4 class="text-center"><?=$item['name']; ?></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                        
                  }
                 else
                  {
                    echo "No data available";
                  }
                  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
                }
                else
                {
                    echo "No data available";
                }



 include('footer.php') ?>

</body>
</html>