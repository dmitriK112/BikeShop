<?php
require_once '_inc/autoload.php';

$db = new Database();
$auth = new Authenticate($db);

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($auth->login($email, $password)) {
        header("Location: index.php");
        exit;
    } else {
        $error = 'Incorrect email or password';
    }
}
include("partials/header_others.php");
?>

<div class="login-container">
    <h2>Login</h2>

    <?php if (isset($_GET['error']) && $_GET['error'] === 'login_required'){ ?>
        <div class="error-message">Please, login to add products to the cart.</div>
    <?php } ?>

    <?php if ($error){ ?>
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php } ?>

    <form method="POST" action="">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit" name="login">Login</button>
    </form>
    <p>Don't have an account? <a href="registry.php">Register</a></p>
</div>


