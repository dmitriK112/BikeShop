<?php
require("_inc/autoload.php");
$db = new Database();
$user = new User($db);

$users = $user->index();
if (isset($_GET['delete'])) {
    $user->destroy($_GET['delete']);
    header("Location: users.php");
    exit;
}
include "partials/header_others.php";
?>
<div class="page-wrapper">
    <section class="container">
        <h3>Users</h3>
        <div class="cart-top">
            <a href="admin.php"><< admin </a>
            <a href="user-create.php"> Create User >></a>
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($users as $usr): ?>
                <tr>
                    <td><?= htmlspecialchars($usr['id']) ?></td>
                    <td><?= htmlspecialchars($usr['name']) ?></td>
                    <td><?= htmlspecialchars($usr['email']) ?></td>
                    <td><?= htmlspecialchars($usr['password']) ?></td>
                    <td><?= htmlspecialchars($usr['role']) ?></td>
                    <td><a href="user-show.php?id=<?= $usr['id'] ?>" class="cpns">Show</a></td>
                    <td><a href="user-edit.php?id=<?= $usr['id'] ?>" class="cpns">Edit</a></td>
                    <td><a href="?delete=<?= $usr['id'] ?>" class="cpns">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</div>
<?php
include('partials/footer.php');
?>

