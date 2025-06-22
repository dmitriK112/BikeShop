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

if (isset($_GET['cartId'])) {
    $cartId = $_GET['cartId'];
    $quantity = $_GET['quantity'];
    if (($cart->updateCart($cartId, $quantity)) == true) {
        header("Location: cart.php?success=quantity_updated");
        exit;
    } else {
        header("Location: cart.php?error=invalid_quantity".$quantity);
        exit;
    }
} else {
    header("Location: cart.php?error=missing_fields");
    exit;
}

