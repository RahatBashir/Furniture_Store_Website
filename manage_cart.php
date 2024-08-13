<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'item_Name');
            if (in_array($_POST['item_Name'], $myitems)) {
                echo "<script>
                alert('Item already added');
                window.location='mycart.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('item_Name' => $_POST['item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
                echo "<script>
                alert('Item added');
                window.location='mycart.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('item_Name' => $_POST['item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            echo "<script>
            alert('Item added');
            window.location='shopnow_products.php';
            </script>";
        }
    }

    if (isset($_POST['Remove_Item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['item_Name'] == $_POST['item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                $total = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $total += $item['Price'] * $item['Quantity'];
                }
                echo json_encode(['status' => 'success', 'total' => $total]);
                exit;
            }
        }
        echo json_encode(['status' => 'error', 'message' => 'Item not found']);
        exit;
    }

    if (isset($_POST['Update_Quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['item_Name'] == $_POST['item_Name']) {
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Quantity'];
                $total = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $total += $item['Price'] * $item['Quantity'];
                }
                echo json_encode(['status' => 'success', 'total' => $total]);
                exit;
            }
        }
        echo json_encode(['status' => 'error', 'message' => 'Item not found']);
        exit;
    }
}
?>
