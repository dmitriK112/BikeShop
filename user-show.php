<?php
include("partials/header_others.php");
$db = new Database();
$user = new User($db);
if(isset($_GET['id'])) {
    //print_r($_GET['id']);
    $id = $_GET['id'];
    $contactData = $user->show($id);
    //print_r($contactData);
}
?>

<div class="contact">
    <section class="container">
        <h3>User information</h3>
        <div class="cart-top">
            <a href="users.php"><< back</a>
        </div>
        <p>Name: <?php echo($contactData['name']);?></p>
        <p>Email: <?php echo($contactData['email']);?></p>
        <p>Password: <?php echo($contactData['password']);?></p>
        <p>Role: <?php echo($contactData['role']);?></p>
        <p>Created at: <?php echo($contactData['created_at']);?></p>
        <h3></h3>
    </section>
</div>
<?php
include("partials/footer.php");
?>

