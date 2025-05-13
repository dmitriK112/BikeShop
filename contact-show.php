<?php
include("partials/header_others.php");
$db = new Database();
$contact = new Contact($db);
if(isset($_GET['id'])) {
    print_r($_GET['id']);
    $id = $_GET['id'];
    $contactData = $contact->show($id);
    print_r($contactData);
}
?>
<div class="page-wrapper">
<section class="container">
    <h1>Contact show</h1>
    <p>Name: <?php echo($contactData['name']);?></p>
    <p>Surname: <?php echo($contactData['surname']);?></p>
    <p>Email: <?php echo($contactData['email']);?></p>
    <p>Message: <?php echo($contactData['message']);?></p>
    <a href="admin.php">Back to Contacts</a>
</section>
</div>
<?php
include("partials/footer.php");
?>

