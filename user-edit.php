<?php
require_once("_inc/autoload.php");
$db = new Database();
$user = new User($db);
$auth = new Authenticate($db);

if(isset($_GET['id'])){
    //print_r($_GET['id']);
    $id = $_GET['id'];
    $userData = $user->show($id);
    //print_r($contactData);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $role = $_POST['role'];
        //print_r($_POST);
        if ($user->edit($id, $name, $email, $password, $role)) {
            if($auth->getUserRole() == 0) {
                header("Location: users.php");
                exit;
            }else{
                header("Location: index.php");
                exit;
            }
        } else {
            echo "Error editing contact.";
        }
    }
}
include('partials/header_others.php');
?>
<div class="contact">
    <div class="container">
        <h3>UPDATE USER</h3>
        <?php if($auth->getUserRole() == 0){?>
        <div class="cart-top">
            <a href="users.php"><< back</a>
        </div>
        <?php }?>
        <p>EDIT INFO</p>
        <form method="POST" action="">
            <input type="text" placeholder="name" name="name" id="name" value="<?php echo htmlspecialchars($userData['name'])?>" required>
            <input type="text" placeholder="email" name="email" id="email" value="<?php echo htmlspecialchars($userData['email'])?>" required>
            <input type="text" placeholder="role" name="role" id="role" value="<?php echo htmlspecialchars($userData['role'])?>" required>
            <input type="text" placeholder="password" name="password" id="password" required>
            <button type="submit" name="register">Edit</button>
        </form>
    </div>
</div>
<?php
include('partials/footer.php');
?>

