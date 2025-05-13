<?php
require("_inc/autoload.php");
$db = new Database();
$contact = new Contact($db);

$contacts = $contact->index();
if (isset($_GET['delete'])) {
    $contact->destroy($_GET['delete']);
    header("Location: admin.php");
    exit;
}
include("partials/header_others.php");
?>
<div class="page-wrapper">
    <section class="container">
        <h1>Hello, admin</h1>
        <h2>Contacts</h2>
        <a href="contact-create.php" class="button">Create Contact</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php foreach ($contacts as $con): ?>
                <tr>
                    <td><?= htmlspecialchars($con['id']) ?></td>
                    <td><?= htmlspecialchars($con['name']) ?></td>
                    <td><?= htmlspecialchars($con['surname']) ?></td>
                    <td><?= htmlspecialchars($con['email']) ?></td>
                    <td><?= htmlspecialchars($con['message']) ?></td>
                    <td><a href="contact-show.php?id=<?= $con['id'] ?>">Show</a></td>
                    <td><a href="contact-edit.php?id=<?= $con['id'] ?>">Edit</a></td>
                    <td><a href="?delete=<?= $con['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</div>
<?php
include("partials/footer.php");
?>

