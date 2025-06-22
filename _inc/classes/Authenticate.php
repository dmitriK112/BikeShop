<?php
class Authenticate {

    private $db;
    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function login($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
        var_dump($user);

        if($user) {
            if(password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['name'] = $user['name'];
                return true;
            } else{
                echo "Password verification failed.<br>";
                echo $password."<br>";
                echo $user['password']."<br>";
                var_dump($_SESSION);
            }
        } else {
            echo "User not found.<br>";
        }
        return false;
    }
    public function logout() {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    public function getUserRole() {
        return $_SESSION['role'] ?? null;
    }
    public function requireLogin() {
        if(!$this->isLoggedIn()) {
            header("Location:login.php");
            exit;
        }
    }


}
