<?php
require_once '_inc/autoload.php';
$db = new Database();
$user = new User($db);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    //print_r($_POST);
    if ($user->create($name, $email, $password, $role)) {
        header("Location: users.php");
        exit;
    } else {
        echo "Error creating user.";
    }
}
include('partials/header_others.php');
?>
<div class="contact">
    <section class="container">
        <h1>Creating user</h1>
        <div class="cart-top">
            <a href="users.php"><< back</a>
        </div>
        <form id="contact" action="" method="POST">
            <input type="text" placeholder="NAME" id ="name" name="name" required><br>
            <input type="text" placeholder="EMAIL" id="email" name="email" required><br>
            <input type="text" placeholder="PASSWORD" id ="password" name="password" required><br>
            <input type="text" placeholder="ROLE" id ="role" name="role" required><br>
            <input type="submit" value="Submit">
        </form>
    </section>
</div>
<?php
include('partials/footer.php');
?>

