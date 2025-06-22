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
        header("Location: contacts.php");
        exit;
    } else {
        echo "Error creating contact.";
    }
}
?>
<div class="contact">
    <div class="container">
        <h3>CREATING CONTACT</h3>
        <div class="cart-top">
            <a href="contacts.php"><< back</a>
        </div>
        <form id="contact" action="" method="POST">
            <input type="text" placeholder="NAME" id ="name" name="name" required><br>
            <input type="text" placeholder="SURNAME" id ="surname" name="surname" required><br>
            <input type="text" placeholder="EMAIL" id="email" name="email" required><br>
            <textarea placeholder="MESSAGE" id="message" name="message" ></textarea><br>
            <input type="submit" value="CREATE">
        </form>
    </div>
</div>
<?php
include('partials/footer.php');
?>
