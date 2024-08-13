
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART</h1>
        </div>

        <div class="col-lg-9" id="cartItems">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $sr = $key + 1;
                            $total += $value['Price'] * $value['Quantity'];
                            echo "
                            <tr id='item$key'>
                                <td>$sr</td>
                                <td>{$value['item_Name']}</td>
                                <td>{$value['Price']}</td>
                                <td>
                                    <input class='text-center' type='number' id='quantity$key' value='{$value['Quantity']}' min='1' max='10' onchange='updateQuantity($key)'>
                                </td>
                                <td>
                                    <button type='button' onclick='removeItem($key)' class='btn btn-sm btn-info'>REMOVE</button>
                                    <input type='hidden' id='item_Name$key' value='{$value['item_Name']}'>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h3>Total:</h3>
                <h5 class="text-right" id="totalPrice"><?php echo $total; ?></h5>
                <br>
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash On Delivery
                        </label>
                    </div>
                    <br>
                    <button class="btn btn-info btn-block">Make Purchase</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function updateQuantity(key) {
        var quantity = $('#quantity' + key).val();
        var itemName = $('#item_Name' + key).val();
        $.ajax({
            type: 'POST',
            url: 'manage_cart.php',
            data: { Update_Quantity: true, item_Name: itemName, Quantity: quantity },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status === 'success') {
                    $('#totalPrice').text(result.total);
                } else {
                    alert(result.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }

    function removeItem(key) {
        var itemName = $('#item_Name' + key).val();
        $.ajax({
            type: 'POST',
            url: 'manage_cart.php',
            data: { Remove_Item: true, item_Name: itemName },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status === 'success') {
                    $('#item' + key).remove();
                    $('#totalPrice').text(result.total);
                } else {
                    alert(result.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    }
</script>

</body>
</html>
