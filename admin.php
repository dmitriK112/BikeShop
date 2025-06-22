<?php
require_once '_inc/autoload.php';
$db = new Database();
$auth = new Authenticate($db);
$auth->requireLogin();
$role = $auth->getUserRole();
if($role != 0){
    header("Location: index.php");
    exit;
}
include_once 'partials/header_others.php';
?>

<div class="contact">
    <div class="container">
        <h3>Admin Dashboard</h3>
        <div class="cart-top">
            <a href="index.php">|>> Home <<|</a>
            <a href="users.php">|>> Users <<|</a>
            <a href="contacts.php">|>> Contacts <<|</a>
        </div>
    </div>
</div>
<?php
include_once 'partials/footer.php';
?>