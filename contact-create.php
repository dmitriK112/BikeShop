<?php
include('partials/header_others.php');
$db = new Database();
$contact = new Contact($db);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //print_r($_POST);
    if ($contact->create($name, $surname, $email, $message)) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Error creating contact.";
    }
}
?>
<div class="page-wrapper">
<section class="container">
    <h1>Adding contact</h1>
    <form id="contact" action="" method="POST">
        <input type="text" placeholder="NAME" id ="name" name="name" required><br>
        <input type="text" placeholder="SURNAME" id ="surname" name="surname" required><br>
        <input type="email" placeholder="EMAIL" id="email" name="email" required><br>
        <textarea placeholder="MESSAGE" id="message" name="message" ></textarea><br>
        <input type="submit" value="Submit">
    </form>
</section>
</div>
<?php
include('partials/footer.php');
?>
