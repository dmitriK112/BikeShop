<?php
require_once("_inc/autoload.php");
$db = new Database();
$contact = new Contact($db);

if(isset($_GET['id'])){
    //print_r($_GET['id']);
    $id = $_GET['id'];
    $contactData = $contact->show($id);
    //print_r($contactData);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        //print_r($_POST);
        if ($contact->edit($id, $name, $surname, $email, $message)) {
            header("Location: contacts.php");
            exit;
        } else {
            echo "Error editing contact.";
        }
    }
}
include('partials/header_others.php');
?>
<div class="contact">
    <div class="container">
        <h3>UPDATE CONTACT</h3>
        <div class="cart-top">
            <a href="contacts.php"><< back</a>
        </div>
        <p>EDIT INFO</p>
        <form id="contact" action="" method="POST">
            <input type="text" placeholder="NAME" id="name" name="name" value="<?php echo htmlspecialchars($contactData['name']); ?>" required>
            <input type="text" placeholder="SURNAME" id="surname" name="surname" value="<?php echo htmlspecialchars($contactData['surname']); ?>" required>
            <input class="user" type="text" placeholder="USER@DOMAIN.COM" id="email" name="email" value="<?php echo htmlspecialchars($contactData['email']); ?>" required><br>
            <textarea placeholder="MESSAGE" id="message" name="message"><?php echo htmlspecialchars($contactData['message']); ?></textarea>
            <input type="submit" value="EDIT">
        </form>
    </div>
</div>
<?php
include('partials/footer.php');
?>
