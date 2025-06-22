<?php
require_once '_inc/autoload.php';

$db = new Database();
$auth = new Authenticate($db);
$cart = new Cart($db);

if (!$auth->isLoggedIn()) {
    header("Location: login.php?error=login_required");
    exit;
}

$userId = $_SESSION['user_id'];

if (isset($_GET['product_id'])) {
    $productId = (int)$_GET['product_id'];
    var_dump($_GET);
    echo $productId;
    $quantity = (int)$_GET['quantity'];
    $size = $_GET['size'];

    if ($productId > 0 && $quantity > 0) {
        $cart->addToCart($userId, $productId, $size, $quantity);
        if($_GET['buy_now'] == 1){
            header("Location: cart.php");
            exit;
        }else {
            header("Location: single.php?product_id=" . $productId);
            exit;
        }
    } else {
        echo "Invalid product or quantity.";
    }
} else {
    echo "Missing required fields.";
}

