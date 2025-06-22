<?php
require_once '_inc/autoload.php';
$db = new Database();
$auth = new Authenticate($db);
include("partials/header_others.php");
//echo '<pre>';
//print_r($_SESSION['add']);
//echo '</pre>';
$db = new Database();
$auth = new Authenticate($db);
$cart = new Cart($db);

$userId = $auth->isLoggedIn() ? $_SESSION['user_id'] : null;
$sessionId = session_id();
$cartItems = $cart->getCartItems($userId);
$total = $cart->getTotal($userId);
?>

<div class="cart">
    <div class="container">
        <div class="cart-top">
            <a href="index.php"><< home</a>
        </div>
        <div class="col-md-9 cart-items">
            <h2>My Shopping Bag (<?php echo count($cartItems); ?>)</h2>
            <?php if (empty($cartItems)): ?>
                <p>Your cart is empty.</p>
            <?php else: ?>
            <?php foreach ($cartItems as $item): ?>
                <div class="cart-header">
                    <a class="close1" href="remove-from-cart.php?cart_id=<?php echo $item['id']; ?>"></a>
                    <div class="cart-sec">
                        <div class="cart-item cyc">
                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt=""/>
                        </div>
                        <div class="cart-item-info">
                            <h3><?php echo htmlspecialchars($item['name']); ?><span>Model No: <?php echo htmlspecialchars($item['model']); ?></span></h3>
                            <h4><span>Rs. $ </span><?php echo number_format($item['price'], 2); ?></h4>
                            <p class="qty">Qty ::</p>
                            <a href="update-cart.php?cartId=<?php echo $item['id']?>&quantity=-1" class="total-item">-</a>
                            <input min="1" type="number" name="quantity" value="<?php echo $item['quantity']; ?>" class="form-control input-small" readonly>
                            <a href="update-cart.php?cartId=<?php echo $item['id']?>&quantity=1" class="total-item">+</a>
                            <?php if($item['size']) {?>
                            <p class="qty">Size ::</p>
                            <input min="s" type="text" name="size" value="<?php echo strtoupper($item['size']); ?>" class="form-control input-small" readonly>
                            <?php }?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="delivery">
                            <p>Service Charges:: Rs.100.00</p>
                            <span>Delivered in 2-3 business days</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-3 cart-total">
            <a class="continue" href="#">Continue to basket</a>
            <div class="price-details">
                <h3>Price Details</h3>
                <span>Total</span>
                <span class="total"><?php echo number_format($total, 2); ?></span>
                <span>Discount</span>
                <span class="total">---</span>
                <span>Delivery Charges</span>
                <span class="total">150.00</span>
                <div class="clearfix"></div>
            </div>
            <h4 class="last-price">TOTAL</h4>
            <span class="total final"><?php echo number_format($total + 150, 2); ?></span>
            <a class="order" href="#">Place Order</a>
            <div class="total-item">
                <h3>OPTIONS</h3>
                <h4>COUPONS</h4>
                <a class="cpns" href="#">Apply Coupons</a>
            </div>
        </div>
    </div>
</div>

<?php
include('partials/footer.php');
?>
