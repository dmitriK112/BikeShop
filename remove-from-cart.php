<?php
require_once '_inc/autoload.php';

$db = new Database();
$cart = new Cart($db);

if (isset($_GET['cart_id'])) {
    $cartId = (int)$_GET['cart_id'];
    if ($cartId > 0) {
        $cart->removeFromCart($cartId);
        header('location: cart.php');
    } else {
        echo "Invalid cart ID.";
    }
} else {
    echo "Missing cart ID.";
}

